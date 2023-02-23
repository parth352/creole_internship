$(document).ready(function () {
  $("#signup_form").validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 8,
      },
    },
    messages: {
      email: "Please enter Email in proper format.",
      password: "Password must be of minimum length 8",
    },
 
  submitHandler:function(form){
    // e.preventDefault();
  // $("#submit").click(function (e) {
  //   e.preventDefault();
    var data = $("#signup_form").serialize();
    $.ajax({
      type: "post",
      url: "sql_query/insert_user.php",
      data: data,
      success: function (response) {
        if (response==1) {
          location.href = "index.php";
        } else {
          // var errorMessage = "";
          // $("#p").html(response.msg);
          // $.each(response["msg"], function (index, message) {
          //   errorMessage += "<div>" + message + "</div>";
          // });
          $("#p").html("You are already registeered").css({ color: "red" });
          $("#p").show();
        }
      }
    })
      // .done(function (response) {
      //   response = JSON.parse(response);
      //   if (response["status"]) {
      //     location.href = "index.php";
      //   } else {
      //     var errorMessage = "";
      //     $("#p").html(response.msg);
      //     $.each(response["msg"], function (index, message) {
      //       errorMessage += "<div>" + message + "</div>";
      //     });
      //     $("#p").html(errorMessage).css({ color: "red" });
      //     $("#p").show();
      //   }
      // })
      .fail(function () {
        alert("your ajax request is not working");
      });
  // }
    }
  })
});
