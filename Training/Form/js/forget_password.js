$(document).ready (function () {  
    $("#forget_password_form").validate ({
        rules: {
            'email':{
                required: true,
                email:true,
            }
        },
        messages:{
            'email': "Please enter Email in proper format.",
        }, 
    }), 
 
    $("#submit").click(function(e){
        e.preventDefault();
        var data = $('#forget_password_form').serialize();
        $.ajax({
            type : "post",
            url : "sql_query/forget_pass_send_email.php",
            data : data,

            beforeSend:function(){
            $(".loader").show();
            $("#p").html("Loading please wait...");
            },

        })
        .done(function(response){
            response = JSON.parse(response);
            if(response['status']){
                location.href = "otp.php";
                // var sucess_Message = '';
                // $("#p").html((response.msg));
                // $.each(response['msg'], function(index, message) {
                //     sucess_Message += '<div>' + message + '</div>';
                // });
                // $("#p").html(sucess_Message).css({'color':'green'});
                // $("#p").show();
            }
            else{
                $(".loader").hide();   
                var error_Message = '';
                $("#p").html((response.msg));
                $.each(response['msg'], function(index, message) {
                    error_Message += '<div>' + message + '</div>';
                });
                $("#p").html(error_Message).css({'color':'red'});
                $("#p").show();
            }
        }).fail(function() {
            alert("your ajax request is not working");
        })
    })

    // this is ajax for loader image

//     $(document).ajaxStart(function(){            // from starting of ajax request start to complete it shows loading image
//     $("#p").css("display", "block");
//   });
//   $(document).ajaxComplete(function(){      // ajax complete method it will return message when all the ajax request are completed.
//     $("#p").css("display", "none");
//   });
//   $("#submit").click(function(){
//     $("#p").load("your request is processing");
//   });
}) 
