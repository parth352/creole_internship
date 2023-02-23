$(document).ready (function () {  
    $("#forget_password_form").validate ({
           rules: {
               'email':{
                       required: true,
                       email:true,
                   },
           },
           messages:{
               'email': "Please enter Email in proper format.",
           }, 
      
       // login ajax call
   // $("#submit").click(function(e){
       submitHandler:function(form){
       // e.preventDefault();
       var data = $('#forget_password_form').serialize();
           $.ajax({
               type: "POST",
               url: "sql_query/forget_pass_send_email.php",
               data : data,
               beforeSend:function(){
                    $(".loader").show();
                    $("#p").html("Please wait while loading...");
                },
               success: function (response) {
                    response = JSON.parse(response);
                   if (response['status']) {
                       location.href = "otp.php";
                   }
                   else {
                    $(".loader").hide();    
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
  
