<html>
<head>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
<script src ="jquery.validate.min.js"> </script>
<!-- <script src ="valid.js"></script> -->
</head>
<body>
<form id ="basic-form" name ="basic-form" method ="post" action ="">  
<label for="email"> E-Mail <span> (required) </span> </label>  
      <input id="email" type="email" name="email" required>
      <input class ="submit" type ="submit" value ="SUBMIT" name ="submit"></input>  
</form>


<script>
  $(document).ready (function () { 

   jQuery.validator.setDefaults({
     debug: true, });

   var validator = $("#basic-form").validate ({
       rules: {
          'email':{
              required: true,
              email:true,
          },  
      },
       messages:{
            'email': "Please enter Email in proper format.",
        },
  });
});  
</script>
</body>
</html>