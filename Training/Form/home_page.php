<html lang="en" >  
    <head>  
        <meta charset="UTF-8">    
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
        <!-- <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script> -->
        <link rel="stylesheet" href="bootstrap-5.0.2-dist\css\bootstrap.min.css">
        <link rel="stylesheet" href ="css/style.css">
        <script src ="Resources\jquery.min.js"> </script>
        <script>console.log("Hello");
     window.history.forward();</script>
    </head>  
 
    <body>
    <!-- Main User Interface code -->
    <?php include  "nav_bar_signout.php";?>     <!--This is for navigation bar-->
    <br>
    <h1 style="text-align:center; font-variant:small-caps;">User Listing Data</h1>
    <br>
    <table class="table table-hover" style="border:3px groove;">
    <thead >
        <tr style="font-variant:small-caps;">
        <th scope="col"> <span style="color:red;">Id</span></th>
        <th scope="col"><span style="color:red;">Name</span></th>
        <th scope="col"><span style="color:red; margin-left:25px;"> Email</span></th>
        <th scope="col" ><span style="color:red;">Mob_number</span></th>
        <th scope="col" ><span style="color:red;">Address</span></th>
        <th scope="col" ><span style="color:red;">Image</span></th>
        <th scope="col" ><span style="color:red;">Update</span></th>
        <th scope="col" ><span style="color:red;">Delete</span></th>
        </tr>
    </thead>
    <tbody>
            <?php include "sql_query/user_listing.php";?>
    </tbody>
    </table>
    </body>  
</html>  