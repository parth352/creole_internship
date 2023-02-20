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
                console.log(response);
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
   
// $(document).ready(function () {
//     $("#submit").click(function(){
//         location.href='home_page.php';
//     });
//     $("#login_form").validate({
//         rules: {
//             email: {
//                 required: true,
//                 email: true
//             },
//             password: {
//                 required: true
//             },
//         },
//         messages: {
//             email: {
//                 required: "enter your email here",
//                 email: "you enter this for mate abc@gmail.com"
//             },
//             password: {
//                 required: "password is required"
//             }
//         },
//         submitHandler:function(form){
//             console.log("cilxked");
//             let em = $("#email").val();
//             let ps = $("#password").val();
//             let rm = $("#remember_me").val();
//             if($("#remember_me").is(":checked")){
//                 mydata = {email:em,password:ps,remember:rm};
//             }else{
//                 let rm = "none";
//                 mydata = {email:em,password:ps,remember:rm};
//             }
//             //console.log(mydata);
//             $.ajax({
//                 url:"sql_query/verify_user.php",
//                 method :"POST",
//                 data : JSON.stringify(mydata),
//                 success: function (data){
//                     let t = (data.split("</html>")[1].trim());
//                     console.log(t);
//                     if(t == 1){
//                         window.location ='home_page.php';
//                     }
//                     else{
//                         $("#p1").html("<b>"+data+"</b>");
//                     }
//                 },
//             })
//         }
//     });
// });