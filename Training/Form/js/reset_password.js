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
    
     // login ajax call
 // $("#submit").click(function(e){
     submitHandler:function(form){
     // e.preventDefault();
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
 // })
     },
 })
}); 



// $(document).ready(function () {
//     $("#reset_password_form").validate({
//       rules: {
//         'reset_password': {
//           required: true,
//         },
//       },
//       'messages': {
//         'reset_password' : "Minimum lenght of password is 8."
//       },
//     });
  
//   // This is for ajax call
  
//    $("#submit").click(function (e) {
//       e.preventDefault();
//       var data = $("#reset_password_form").serialize();
//       $.ajax({
//           type: "post",
//           url: "sql_query/update_password.php",
//           data: data,
//       })
//       .done(function (response) {
//         response = JSON.parse(response);
//         if (response["status"]) {
//               location.href = "index.php";
//         } 
//         else {
//               var error_Message = "";
//               $("#p").html(response.msg);
//               $.each(response["msg"], function (index, message) {
//               error_Message += "<div>" + message + "</div>";
//               });
//               $("#p").html(error_Message).css({ color: "red" });
//               $("#p").show();
//           }
//       })
//       .fail(function () {
//         alert("your ajax request is not working");
//       });
//     });
  
// });