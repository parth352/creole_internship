$(document).ready (function () {  
     var validator =$("#login_form").validate ({
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
        });
 
   
        // login ajax call
    $("#submit").click(function(e){
        e.preventDefault();
        var data = $('#login_form').serialize();
            $.ajax({
                type : "post",
                url : "sql_query/verify_user.php",
                data : data,
            })
            .done(function(response){
                response = JSON.parse(response);
                if(response['status']){
                    location.href = "home_page.php";
                }
                else{
                    var errorMessage = '';
                     $("#p").html((response.msg));
                    $.each(response['msg'], function(index, message) {
                        errorMessage += '<div>' + message + '</div>';
                    });
                    $("#p").html(errorMessage).css({'color':'red'});
                    $("#p").show();
                }
            })
            .fail(function() {
                    alert("your ajax request is not working");
            })
    })
}) 
   