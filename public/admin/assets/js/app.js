$(function () {
    // Toastr options
    toastr.options = {
        "debug": false,
        "newestOnTop": false,
        "positionClass": "toast-top-center",
        "closeButton": true,
        "toastClass": "animated fadeInDown",
    };

    $.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
});
$(document).ready(function(){
	$('#topicform').on('submit',function(e){
	    e.preventDefault();
	    var formdata = new FormData(this);
	    $.ajax({
	        url: "http://localhost:8000/admin/add_topic",
	        type: "POST",
	        dataType: "json",
	        data: $('#topicform').serialize(),
	        //contentType: false,
	        //processData:false,
	        success: function (data) {
	            if(typeof(data.error) == "undefined") {
	                toastr.success(data.success);
	                $('#topicform').trigger("reset");
	                $('select[name="subject[]"]').select2('val','');   
	            } else if (data.error) {
	                toastr.error(data.error);
	            }
	        }
	    });
	});


	$('#subjectform').on('submit',function(e){
	    e.preventDefault();
	    var formdata = new FormData(this);
	    $.ajax({
	        url: "http://localhost:8000/admin/add_subject",
	        type: "POST",
	        dataType: "json",
	        data: $('#subjectform').serialize(),
	        success: function (data) {
	            if(typeof(data.error) == "undefined") {
	                toastr.success(data.success);
	                $('#subjectform').trigger("reset");  
	            } else if (data.error) {
	                toastr.error(data.error);
	            }
	        }
	    });
	});

	$('#delete-topic').on('click',function(e){
	    e.preventDefault();
	    var topic_id = $(this).val() ;

	    $.ajax({
	        url: "http://localhost:8000/admin/delete_topic",
	        type: "POST",
	        dataType: "json",
	        data: 'topic-id='+topic_id,
	        success: function (data) {
	            if(typeof(data.error) == "undefined") {
	                toastr.success(data.success);            
	            } else if (data.error) {
	                toastr.error(data.error);
	            }
	        }
	    });
	});

	$('#adduser').on('submit',function(e){
	    e.preventDefault();
	    var formdata = new FormData(this);
	    $.ajax({
	        url: "http://localhost:8000/admin/adduser",
	        type: "POST",
	        dataType: "json",
	        data: $('#adduser').serialize(),
	        
	        success: function (data) {
	            if(typeof(data.error) == "undefined") {
	                toastr.success(data.success);
	                $('#adduser').trigger("reset");
	                  
	            } else if (data.error) {
	                toastr.error(data.error);
	            }
	        }
	    });
	});

	$('#delete-subject').on('click',function(e){
	    e.preventDefault();
	    var subject_id = $(this).val() ;

	    $.ajax({
	        url: "http://localhost:8000/admin/delete_subject",
	        type: "POST",
	        dataType: "json",
	        data: 'subject_id='+subject_id,
	        success: function (data) {
	            if(typeof(data.error) == "undefined") {
	                toastr.success(data.success);            
	            } else if (data.error) {
	                toastr.error(data.error);
	            }
	        }
	    });
	});

	$('#delete-user').on('click',function(e){
	    e.preventDefault();
	    var user_id = $(this).val() ;

	    $.ajax({
	        url: "http://localhost:8000/admin/deluser",
	        type: "POST",
	        dataType: "json",
	        data: 'user_id='+user_id,
	        success: function (data) {
	            if(typeof(data.error) == "undefined") {
	                toastr.success(data.success);            
	            } else if (data.error) {
	                toastr.error(data.error);
	            }
	        }
	    });
	});
});	


