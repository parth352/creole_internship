$(document).ready (function () {  
  $("#reset_password_form").validate ({
         rules: {
          'reset_password':{
                     required: true,
                     minlength: 8,
                 },
         },
         messages:{
          reset_password: "Minimum lenght of password is 8",
         }, 
     submitHandler:function(form){
     var data = $('#reset_password_form').serialize();
         $.ajax({
             type: "POST",
             url: "sql_query/update_password.php",
             data : data,
             success: function (response) {
                  response = JSON.parse(response);
                 if (response['status']) {
                     location.href = "index.php";
                 }
                 else {
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
