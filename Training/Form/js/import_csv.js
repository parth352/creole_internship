$(document).ready (function () {  

    $("#view_profile").validate ({
           rules: {
               'name':{
                    required: true,
                },
                'email':{
                    required: true,
                    email: true,
                },
                'mo_number':{
                    required: true,
                    minlength: 10,
                },
                'address':{
                    required: true,
                },
                'uploadfile':{
                    required: true,
                    accept: "image/jpg,image/jpeg,image/png,image/gif",
                    filesize: 3000000,
                },
           },
           messages:{
               'email': "Please enter Email in proper format.",
               'mo_phone': "minimum length is 10",
               uploadfile:{
                require: "image is required",
                accept: "only images are accepted",
                filesize: "Max file size is of 3 mb",
        },
           }, 
       submitHandler:function(form){
        $.ajax({
            type: "post",
            url: "sql_query/update_user_profile.php",
            data: new FormData(form),
            contentType: false,
            cache: false,
            processData:false,
        }).done(function (resp) {
            resp = JSON.parse(resp);
            if (resp['status']) {
                
                location.href = "view_profile.php";    
            }
            else {
                var errorMessage = '';
                $("#p").html((resp.msg));
                $.each(resp['msg'], function (index, message) {
                    errorMessage += '<div>' + message + '</div>';
                });
                $("#p").html(errorMessage);
                $("#p").show();
            }
        }).fail(function () {
            alert("ajax is not working");
        });
    }
  });

  $.validator.addMethod("filesize", function(value, element, param) {        // This is for filesize of validation
    return this.optional(element) || (element.files[0].size <= param);
}, "File size must be less than {0} bytes.");

});