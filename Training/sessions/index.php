<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> <!-- This action method will help us to send value in same page only-->
            Enter value to be set as Session: <input type="text" name="session">
            <input type="submit">  
        </form>

        <h1>Creating New Session</h1> <!--WE can say session is used to store the value retrived from another page-->
        <?php
            error_reporting(0); //warning is comming at deleting of sesson at the last line of code
            
            if(!empty($_POST['session']))
            {
                $session_value=$_POST['session'];
                $update_session_value = "Have a Nice Day";
                session_start();  // this command is to be written compulsory to start session
            
                $_SESSION["new_session"] = $session_value;
                echo "This is a new session value: ";
                echo $_SESSION["new_session"];
                echo "<br>";
                echo "This is computer generated session id: ". session_id();

                echo "<h1> Updating Session </h1>";
                $_SESSION["Update_session"] = $update_session_value;
                echo "This is a Updated session value: ";
                echo $_SESSION["Update_session"];

                echo "<h1> Deleting Session </h1>";
                unset($_SESSION["update_session"]);  // my session value is destroyed using unset method
                echo "This session value is deleted using unset method:" ;
                echo $_SESSION["update_session"];
                echo "<br>"; 
            
                echo "<h1>Counting how many times session is created</h1>";
                
                if (!isset($_SESSION['count'])) // this defines how many times you have set session
                {
                    $_SESSION['count'] = 1;
                }
                else
                {
                    ++$_SESSION['count'];
                }
                echo "You have set session values for ";
                echo $_SESSION['count']. " times";
            }
            else
            {
                echo "Enter the input to text box";
            }
        ?>
    </body>
</html>