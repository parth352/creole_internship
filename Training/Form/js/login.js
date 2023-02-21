$(document).ready (function () {  
     $("#login_form").validate ({
            rules: {
                'email':{
                        required: true,
                        email:true,
                    },
                'password':{
                        required: true,
                        minlength: 8,
                    },
            },
            messages:{
                'email': "Please enter Email in proper format.",
                'password': "Password must be of minimum length 8",
            }, 
       
        // login ajax call
    // $("#submit").click(function(e){
        submitHandler:function(form){
        // e.preventDefault();
        var data = $('#login_form').serialize();
            $.ajax({
                type: "POST",
                url: "sql_query/verify_user.php",

                data : data,
                success: function (response) {
                    // response = JSON.parse(response);
                    if (response == 1) {
                        location.href = "home_page.php";
                    }
                    else {
                        // var error_Message = "";
                        // $("#p").html(response.msg);
                        // $.each(response["msg"], function (index, message) {
                        // error_Message += "<div>" + message + "</div>";
                        // });
                        $("#p").html("you are not registered");
                        $("#p").show()
                    }
                },
                error: function (xhr, status, error) {
                    // Handle the error from the server
                    console.log(xhr.responseText);
                }
            });
    // })
        },
    })
}); 
   
