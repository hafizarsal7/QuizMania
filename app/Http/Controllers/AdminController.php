<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Response;

use App\Http\Requests;
use App\User;
use DB;
use App\Subject;
use App\Topic;
class AdminController extends Controller
{
    //
    function __construct(){
    	//$this->middleware('auth');
    }

    public function login()
    {

    	return view('admin.welcome');
    }

      public function dashboard()
    {
        $user =new User;
       
        ?>
    <script type="text/javascript">
            alert('First You should be Login')
            window.location="/admin/login"
            </script>
            <?php
    }

    public function index(Request $request)
    {
        
    	$email=$request->input('email');
    	$password=$request->input('password');
		$user=User::where('email',$email)->where('password',$password) ->first();
	   if(!is_null($user)){
    		
    		return view('admin.dashboard');
    	}
    	else
    	{
    		?>
    		<script type="text/javascript">
    		alert('Invalid Input')
    		window.location="/admin/login"
    		</script> 
    		<?php 
    		
    	}
    }

    public function user()
    {
        $time=DB::raw('CURRENT_TIMESTAMP');

       $user = DB::table('users')->paginate(10);
        return view('admin.user',['user' => $user]);
     }

    public function view_adduser()
    {
        
        return view('admin.add_user');
    }

    public function adduser(Request $request)
    {
        
        $user=User::create($request->all());
        if(! $user)
        {
            return json_encode(array('error' => 'User Not Added yet. Please Try again Later'));
        }else{
            return json_encode(array('success' => 'User Added Successfully'));
        }
    }

    public function updateUser(Request $request){
       // dd($request->input('id'));
        $user=User::where('id',$request->input('id'))->first();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->role=$request->input('role');
        if($user->save()){
            return redirect()->back();
        }
    }


    public function addsubject(Request $request)
    {
        //dd($request);
        if (! $subject = Subject::create($request->all()))
        {
            return json_encode(array('error' => 'Subject Not Added yet. Please Try again Later'));
        }else{
            return json_encode(array('success' => 'Subject Added Successfully'));
        }
    }

    public function deleteuser(Request $request)
    {
        $id=$request->input('user_id');
        $user=User::findOrFail($id);
        if(! $user->delete()){
            return json_encode(array('error' => 'User Not Deleted yet. Please Try again Later'));
        }else{
            return json_encode(array('success' => 'User Deleted Successfully'));
        }
    }

    public function showsubjects(Request $request)
    {
        $subject=Subject::all();
        return view('admin.view_subjects',compact('subject'));
    }

    public function deletesubject(Request $request)
    {
        $id=$request->input('subject_id');
        $subject=Subject::findOrFail($id);
        if(! $subject->delete()){
            return json_encode(array('error' => 'Subject Not Deleted yet. Please Try again Later'));
        }else{
            return json_encode(array('success' => 'Subject Deleted Successfully'));
        }
    }

    public function updateSubject(Request $request){
        //dd($request->input('id'));
        $subject =new Subject;
        $subject=Subject::where('id',$request->input('id'))->first();
        $subject->Name=$request->input('Name');
        $subject->Description=$request->input('Description');
        $subject->Status=$request->input('Status');
        if($subject->save()){
            return redirect()->back();
        }
    }

    public function viewtopic()
    {
        $topic= DB::table('topics')
            ->join('subjects', 'topics.subject', '=', 'subjects.id')
            ->select('topics.*',  'subjects.Name')
            ->get();

        return view('admin.view_topic',compact('topic'));
    }

    public function addtopic()
    {
        $topic=Subject::all();
       //dd($topic);
        return view('admin.add_topic',compact('topic'));
        
    }

    public function addtopics(Request $request)
    {
        $request['subject'] = implode(',', $request['subject']);
        $topic = Topic::create($request->all());
        if (! $topic)
        {
            return json_encode(array('error' => 'Topic Not Added yet. Please Try again Later'));
        }else{
            return json_encode(array('success' => 'Topic Added Successfully'));
        }
    }

    public function deletetopic(Request $request)
    {
        $id=$request->input('topic-id');
        $topic=Topic::findOrFail($id);
        if(! $topic->delete()){
            return json_encode(array('error' => 'Topic Not Deleted yet. Please Try again Later'));
        }else{
            return json_encode(array('success' => 'Topic Deleted Successfully'));
        }
    }

    public function updatetopic(Request $request)
    {
        $topic =new Topic;
        $topic=Topic::where('id',$request->input('id'))->first();
        $topic->topic=$request->input('topic');
        $topic->description=$request->input('description');
        $topic->status=$request->input('status');
        if($topic->save()){
            return redirect()->back();
        }
    }
}
