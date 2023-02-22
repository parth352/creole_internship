$(document).ready (function () {  
    $("#update_detail").validate ({
           rules: {
               'name':{
                    required: true,
                },
                'email':{
                    required: true,
                    email: true,
                },
                'phone':{
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
               'phone': "minimum length is 10",
               'uploadfile':"only images are accepted",
           }, 
      
       // login ajax call
   // $("#submit").click(function(e){
       submitHandler:function(form){
       // e.preventDefault();
       var data = $('#update_detail').serialize();
           $.ajax({
               type: "POST",
               url: "sql_query/update_detail.php",
               data : data,
            //    beforeSend:function(){
            //         $(".loader").show();
            //         $("#p").html("Please wait while loading...");
            //     },
               success: function (response) {
                    response = JSON.parse(response);
                   if (response['status']) {
                       location.href = "home_page.php";
                   }
                   else {
                    // $(".loader").hide();    
                        var error_Message = '';
                        $("#p").html((response.msg));
                        $.each(response['msg'], function(index, message) {
                            error_Message += '<div>' + message + '</div>';
                        });
                        $("#p").html(error_Message).css({'color':'red'});
                        $("#p").show();
                   }
               },
               error: function (xhr, status, error) { 
                   console.log(xhr.responseText);
                   alert("your ajax request is not working");
               }
           });
   // })
       },
   })
}); 
  
