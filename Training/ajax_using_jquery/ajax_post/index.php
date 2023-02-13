<html>
    <head> 
        <script src="jquery-3.6.3.min.js"></script>
        <!-- <script src="new_ajax.js"></script> -->
    </head>
    
    <body>
        
        <?php include "connection.php";?>

        <form method ="post" action = "<?php $_SERVER['PHP_SELF'];?>">
            Enter your First name : <input type ="text" name ="fname" class ="fname"> <br>
            Enter your Last name : <input type ="text" name ="lname" class ="lname"> <br>
            Enter your Email name : <input type ="text" name ="email" class ="email"> <br>
            <input type = "submit" value = "submit" name= "submit" id ="submit">
        </form>
        <script>
            $(document).ready(function(){
                $("#submit").click(function() {
 
                    var firstname =$("input.fname").val();
                    var lastname  =$("input.lname").val();
                    var email     =$("input.email").val();
                
                    $.ajax({
                        type: "post",
                        url: "insert_query.php",
                        data: {
                            fname: firstname,
                            lname: lastname,
                            email: email,
                        },
                        cache: false,
                        success: function(data){
                            alert("data inserted sucessfully");
                        },
                        error: function(xhr,status,error){
                            console.error(xhr);
                        },

                    });
                });
            });
        </script>
    </body>
</html>