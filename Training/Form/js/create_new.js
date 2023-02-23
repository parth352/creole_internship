$(document).ready (function () {  
    $("#create_new").validate ({
           rules: {
               'name':{
                    required: true,
                },
                'email':{
                    required: true,
                    email: true,
                },
                'mo_number':{
                    required: true,
                    minlength: 10,
                },
                'address':{
                    required: true,
                },
                'uploadfile':{
                    required: true,
                    accept: "image/jpg,image/jpeg,image/png,image/gif",
                },
           },
           messages:{
               'email': "Please enter Email in proper format.",
               'mo_phone': "minimum length is 10",
               'uploadfile':"only images are accepted",
           }, 
      
       // login ajax call
   // $("#submit").click(function(e){
       submitHandler:function(form){
       // e.preventDefault();
    //    var data = $('#create_new').serialize();
        // var data = new FormData(this);
        $.ajax({
            type: "post",
            url: "sql_query/create_new_user.php",
            data: new FormData(form),
            contentType: false,
            cache: false,
            processData:false,
        }).done(function (resp) {
            response = JSON.parse(resp);
            if (response['status']) {
                location.href = "home_page.php";    
            }
            else {
                var errorMessage = '';
                $("#p").html((res.msg));
                $.each(response['msg'], function (index, message) {
                    errorMessage += '<div>' + message + '</div>';
                });
                $("#p").html(errorMessage);
                $("#p").show();
            }
        }).fail(function () {
            alert("error");
        });
        
    }
  });
});
  
