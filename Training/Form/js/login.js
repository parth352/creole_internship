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
        submitHandler:function(form){
        var data = $('#login_form').serialize();
            $.ajax({
                type: "POST",
                url: "sql_query/verify_user.php",

                data : data,
                success: function (response) {
                    if (response == 1) {
                        location.href = "home_page.php";
                    }
                    else {
                        $("#p").html("you are not registered");
                        $("#p").show()
                    }
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        },
    })
}); 
   
