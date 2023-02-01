<html>
    <body>
        <h1> PHP Global Variables - Superglobals </h1>
        <!-- Some predefined variables in PHP are "superglobals" -->
        
        <?php
          $val1 = 75;
          $val2 = 25; 
        
          function addition() 
          {
            $GLOBALS['val3'] = $GLOBALS['val1'] + $GLOBALS['val2'];  // $GLOBAL keyword is used to define any variable to global
          }
          addition();
          echo $val3. "<br>"; // the $z variable is called outside of the scope or function
        ?>

        <h1> PHP All $_SERVER variables </h1>
        <?php
          echo '<h3> this $_SERVER[PHP_SELF] will help you to get your file name: </h3>';
          echo $_SERVER['PHP_SELF'];  // It will return your file name
          echo "<br>";
        ?>

        <?php
          echo '<h3> This $_SERVER[SERVER_NAME] will return your server name on which your are working:  <br>'; 
          echo $_SERVER['SERVER_NAME']; // It will return your server name
          echo "<br>";
        ?>

        <?php
          echo '<h3> This  $_SERVER[SERVER_ADDR] will return your server name on which your are working:  <br>'; 
          echo $_SERVER['SERVER_ADDR']; // It will returns the IP address of the host server
          echo "<br>";
        ?>

        <?php
          echo '<h3> this $_SERVER[GATEWAY_INTERFACE] will help you to get your version of common gateway interface: </h3>';
          echo $_SERVER['GATEWAY_INTERFACE'];  // It will returns for eg: (CGI/1.1)
          echo "<br>";
        ?>

        <?php
          echo '<h3> this $_SERVER[SERVER_SOFTWARE] will help you to get your server identification string: </h3>';
          echo $_SERVER['SERVER_SOFTWARE'];  // It will returns for eg: (Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.2.) 
          echo "<br>";
        ?>

        <?php
          echo '<h3> this $_SERVER[SERVER_PROTOCOL] will return  the name and revision of the information protocol: </h3>';
          echo $_SERVER['SERVER_PROTOCOL'];  // It will returns for eg: (HTTP/1.1) 
          echo "<br>";
        ?>

        <?php
          echo '<h3> this $_SERVER[REQUEST_METHOD] will return the request method used to acces pages: </h3>';
          echo $_SERVER['REQUEST_METHOD'];  // It will returns for eg: (POST/GET) 
          echo "<br>";
        ?>

        <?php
          echo '<h3> this $_SERVER[REQUEST_TIME] will return the timestamp of start requests: </h3>';
          echo $_SERVER['REQUEST_TIME'];  // It will returns for eg: (1377687496) 
          echo "<br>";
        ?>

        <?php
          echo '<h3> this $_SERVER[QUERY_STRING] will return the query string if the page is accessed via a query string: </h3>';
          echo $_SERVER['QUERY_STRING'];  // It will not return any value as this page is not accesed by query string 
          echo "<br>";
        ?>

        <?php
          echo '<h3> this $_SERVER[HTTP_ACCEPT] will return the Accept header from the current request: </h3>';
          echo $_SERVER['HTTP_ACCEPT'];  // It will returns for eg: (text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9) 
          echo "<br>";
        ?>

        <?php
          echo '<h3> this $_SERVER[HTTP_HOST] will return the Host header from the current request: </h3>';
          echo $_SERVER['HTTP_HOST'];  // It will returns for eg: (localhost) from url 
          echo "<br>";
        ?>

        <?php
          echo '<h3> this $_SERVER[HTTP_REFERER] will return the complete URL of the current page: </h3>';
          echo $_SERVER['HTTP_REFERER'];  // It will returns for eg: (http://localhost/creole_studio_internship/Training)
          echo "<br>";
        ?>

        <?php
          echo '<h3> this $_SERVER[REMOTE_ADDR] will return  the IP address from where the user is viewing the current page: </h3>';
          echo $_SERVER['REMOTE_ADDR'];  // It will returns for eg: (::1)
          echo "<br>";
        ?>

        <?php
          echo '<h3> this $_SERVER[REMOTE_PORT] will return  the port being used on the user machine to communicate with the web server: </h3>';
          echo $_SERVER['REMOTE_PORT'];  // It will returns for eg: (51722)
          echo "<br>";
        ?>

        <?php
          echo '<h3> this $_SERVER[SCRIPT_FILENAME] will return the absolute pathname of the currently executing script: </h3>';
          echo $_SERVER['SCRIPT_FILENAME'];  // It will returns for eg: (C:/xampp/htdocs/creole_studio_internship/Training/super_global_variables/index.php)
          echo "<br>";
        ?>

        <?php
          echo '<h3> this $_SERVER[SERVER_ADMIN] will return the value given to server_admin: </h3>';
          echo $_SERVER['SERVER_ADMIN'];  // It will returns for eg: (postmaster@localhost)
          echo "<br>";
        ?>

        <?php
          echo '<h3> this $_SERVER[SERVER_ADMIN] will return the port on the server machine being used by the web server for communication: </h3>';
          echo $_SERVER['SERVER_PORT'];  // It will returns for eg: (80)
          echo "<br>";
        ?>

        <?php
          echo '<h3> this $_SERVER[SERVER_SIGNATURE] will return the server version and virtual host name : </h3>';
          echo $_SERVER['SERVER_SIGNATURE'];  // It will returns for eg: (Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.2.0 Server at localhost Port 80)
          echo "<br>";
        ?>

        <?php
          echo '<h3> this $_SERVER[SCRIPT_NAME] will return the path of the current script : </h3>';
          echo $_SERVER['SCRIPT_NAME'];  // It will returns for eg: (/creole_studio_internship/Training/super_global_variables/index.php)
          echo "<br>";
        ?>

        <h1>PHP $_REQUEST Method</h1>  <!--REQUEST method can retrive data passed by both the method POST/GET -->
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> <!-- This action method will help us to send value in same page only-->
          Your Fav Car Name: <input type="text" name="car_name">
          <input type="submit">
        </form>

        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST")
          {
            // collect value of input field
            $car_name = $_REQUEST['car_name'];
            if (empty($car_name))   // checks if text field is empty or not 
            {
              echo "Car Name is empty";
            } 
            else 
            {
              echo $car_name;
            }
          }
        ?>

        <h1>PHP $_POST Method</h1>
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> <!-- This action method will help us to send value in same page only-->
          Your Name: <input type="text" name="your_name">
          <input type="submit">
        </form>

        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST")
          {
            $your_name = $_POST['your_name']; // collect value of input field using post methood
            if (empty($your_name))   // checks if text field is empty or not 
            {
              echo "your Name is empty";
            } 
            else 
            {
              echo $your_name;
            }
          }
        ?>

        <h1> PHP $_GET Method</h1>   <!-- GET method will pass value in url-->

        <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>"> <!-- This action method will help us to send value in same page only-->
          Your Name: <input type="text" name="your_name">
          <input type="submit">
        </form>

        <?php
          if(isset($_GET["your_name"])) // it will retrive value from url
          {
            echo "Hi ". $_GET['your_name']. "<br />";
          }
         ?>

         <h1>PHP $_FILES Method</h1>

         <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
          <input type="file" name="file">
          <input type ="submit" value="submit">
         </form>

        <?php
          echo "Filename: " . $_FILES['file']['name']."<br>";
          echo "File Type: " . $_FILES['file']['type']."<br>";
          echo "File Size: " . $_FILES['file']['size']."<br>";
          echo "File Path: " . $_FILES['file']['tmp_name']."<br>";
          echo "Error " . $_FILES['file']['error']."<br>";
        ?>

        <h1>PHP $_ENV Method</h1> <!--This global variable is used by system itself it is not hardcoded-->

        <?php
          putenv('NAME="Parth Patel"');
          echo 'My name is '.getenv('NAME');  // $_env method is mostly used  to retrive data from session
        ?>

        <h1>$http_response_header</h1>

        <?php
          file_get_contents("https://www.php.net/manual/en/reserved.variables.httpresponseheader.php");
          $link_info = $http_response_header;

          foreach($link_info as $new_arr)
          {
            var_dump($new_arr);
            echo "<br>";
          }
        ?>
    </body>
</html>