$(document).ready (function () {  
  var validator = $("#basic-form").validate ({
    rules: {
        'fname': {
          required: true,
          minlength: 5
        },
        'lname': {
          required: true,
          minlength: 5
        },
        'email':{
          required: true,
          email:true,
        },
        'password':{
          required: true,
          minlength: 8
        },
        'file':{
          required: true,
          accept: "text/*"
        },
      },
    messages:{
              'fname': "Please enter a valid First Name minimum length 5.",
              'lname': "Please enter a valid Last Name minimum length 5.",
              'email': "Please enter Email in proper format.",
              'password': "Please enter a Password of minimum length 8",
              'file': "Please select only text file",
            },
    

    // This invalid handler method is used to handle erroes as same as above code if you want to not display error message on dom then use invalidhandlers
    // this method is only return values after invalid submit 
    // invalidHandler: function(f,v){
    //       var error = v.numberofInvalids();
    //       if (error){
    //             var invalisElements = v.invalidElements();
    //             alert (invalidElements[error]);
    //       }
    //           // $('#info').text(validator.numberofInvalids() + "field's are invalid");
    //   }

    });

    $("#reset").click(function(){
      validator.resetForm();      // clears validation message on pressing button
    });

    // validator.showErrors({
    //   "fname": "I now your firstname is parth"  // This is used to show the error before form is submited
    // });
    

    
  });  