<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class AdminController extends Controller
{
    //
    function __construct(){
    	$this->middleware('auth');
    }

    public function login()
    {
    	return view('admin.welcome');
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
}
