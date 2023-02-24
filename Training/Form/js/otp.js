$(document).ready (function () {  
  $("#otp_form").validate ({
         rules: {
             'otp':{
                     required: true,
                     minlength: 6,
                 },
         },
         messages:{
              'otp': "Minimum lenght of otp is 6.",
         }, 
     submitHandler:function(form){
     var data = $('#otp_form').serialize();
         $.ajax({
             type: "POST",
             url: "sql_query/otp_verify.php",
             data : data,

             success: function (response) {
                  response = JSON.parse(response);
                 if (response['status']) {
                     location.href = "reset_password.php";
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
     },
 })
}); 

