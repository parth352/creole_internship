$(document).ready(function () {
  $("#otp_form").validate({
    rules: {
      'otp': {
        required: true,
        minlength: 6,
      },
    },
    'messages': {
      otp: "Minimum lenght of otp is 6.",
    },
  });

// This is for ajax call
$("#submit").click(function (e) {
    e.preventDefault();
    var data = $("#otp_form").serialize();
    $.ajax({
        type: "post",
        url: "sql_query/otp_verify.php",
        data: data,
    })
    .done(function (response) {
      response = JSON.parse(response);
      if (response["status"]) {
            location.href = "reset_password.php";
            // var sucess_Message = "";
            // $("#p").html(response.msg);
            // $.each(response["msg"], function (index, message) {
            //   sucess_Message += "<div>" + message + "</div>";
            // });
            // $("#p").html(sucess_Message).css({ color: "green" });
            // $("#p").show();

      } 
      else {
            var error_Message = "";
            $("#p").html(response.msg);
            $.each(response["msg"], function (index, message) {
            error_Message += "<div>" + message + "</div>";
            });
            $("#p").html(error_Message).css({ color: "red" });
            $("#p").show();
        }
    })
    .fail(function () {
      alert("your ajax request is not working");
    });
});

});
