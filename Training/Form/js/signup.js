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
    var data = $("#signup_form").serialize();
    $.ajax({
      type: "post",
      url: "sql_query/insert_user.php",
      data: data,
      success: function (response) {
        if (response==1) {
          location.href = "index.php";
        } else {
          $("#p").html("You are already registeered").css({ color: "red" });
          $("#p").show();
        }
      }
    })
      .fail(function () {
        alert("your ajax request is not working");
      });
  // }
    }
  })
});
