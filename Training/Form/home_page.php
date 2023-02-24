<html lang="en" >  
    <head>  
        <meta charset="UTF-8">    
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
        <!-- <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script> -->
        <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
        <link rel="stylesheet" href ="css/style.css">
        <script src ="Resources\jquery.min.js"> </script>

        <!-- This  is for search filter -->
        <script>
            $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            });
        </script>
      
 
    <body>
        <!-- Main User Interface code -->
        <?php include  "nav_bar_signout.php";

            // session_start(); // session is alredy starting in navigation bar
            $_SESSION['login'] = "cant go to login page without signout";
            
            if(!isset($_SESSION['email'])){ 
                header("Location: index.php");  }
            
            if(isset($_SESSION['delete']))
            {
                echo '<script> alert("your data is deleted") </script>';
                unset($_SESSION['delete']);
            }    
        ?>
        
        <br>
        <h1 style="text-align:center; font-variant:small-caps;">User Listing Data</h1>
        <br>
       
        <input id="myInput" type="search" placeholder="Search.." style=" float:right; margin-bottom:15px; margin-right:20px; padding:10px; border:4px groove;">  <!-- search filter-->
      
        <table class="table table-hover" style="border:3px groove;">
        <thead >
            <tr style="font-variant:small-caps;">
            <th scope="col"> <span style="color:red;">Id</span></th>
            <th scope="col"><span style="color:red;">Name</span></th>
            <th scope="col"><span style="color:red; margin-left:25px;"> Email</span></th>
            <th scope="col" ><span style="color:red;">Mob_number</span></th>
            <th scope="col" ><span style="color:red;">Address</span></th>
            <th scope="col" ><span style="color:red;">Image</span></th>
            <th scope="col" ><span style="color:red;" class="hide_button">Update</span></th>
            <th scope="col" ><span style="color:red;" class="hide_button">Delete</span></th>
            </tr>
        </thead>
        <tbody id="myTable">
            <?php include "sql_query/user_listing.php" ?>
        </tbody>
        </table>
    </body>  
</html>  