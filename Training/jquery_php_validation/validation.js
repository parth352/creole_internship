$(document).ready (function () { 

  jQuery.validator.setDefaults({
    debug: true, });

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
          // remote: "check-email.php",  // This method is used to make server call for validation for posting single element to server rather than whole form.
        },
        'password':{
          required: true,
          minlength: 8,
        },

        're_password':{
          equalTo: "#password",  // reenter the password to check
        },
           
        'file':{
          required: true,
          accept: "text/*",   // This is additional jquery method used for only to accept text files 
        },

        'credit_card':{
          required: true,
          creditcard : true,
        },
      },
    messages:{
              'fname': "Please enter a valid First Name minimum length 5.",
              'lname': "Please enter a valid Last Name minimum length 5.",
              'email': "Please enter Email in proper format.",
              'reenter_email': "email doesn't match",
              'password': "Please enter a Password of minimum length 8",
              'file': "Please select only text file",
              're_password':"password doesn't match",
              'credit_card':"Enter valid credit card number",
            },
    
    // This invalid handler method is used to handle erroes as same as above code if you want to not display error message on dom then use invalidhandlers
    // this method is only return values after invalid submit 
    // invalidHandler: function(f,v){
    //       var error = v.numberofInvalids();
    //       if (error){
    //             var invalidElements = v.invalidElements();
    //             alert (invalidElements[error]);
    //       }
    //           $('#info').text(validator.numberofInvalids() + "field's are invalid");
    //   }

  });

    // It will reset all your error displayed value
    $("#reset").click(function(){
      validator.resetForm();      // clears validation message on pressing button
    });

    // it will show eroor before submiting button
    validator.showErrors({
      "fname": "I now your firstname is parth"  // This is used to show the error before form is submited
    });

    // add a custom validation method
    jQuery.validator.addmethod("laxEmail",function(value,element){
        return this.optional(element) || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@(?:\S{1,63})$/.test( value );
        }, 'please enter a valid emailaddress');
   
    var template= jQuery.validator.format("{0} is not a valid value");
    alert(template("abc"));
    // validator.destroy();   //After this point the #myForm form is back to its original boring state all validator methods are removed.  
  });  