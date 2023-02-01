<html>
    <body>
        <h1>Set Cookie Value</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> <!-- This action method will help us to send value in same page only-->
            Enter your name to be set as cookie: <input type="text" name="cookie">
            <input type="submit">  
            <!-- click submit button 2 times to check cookie value is set or not set.
            On first click cookie value is set. On second click cookie value is displayed-->
        </form>

        <?php
            $cookie_name = "user";
            $cookie_value = $_POST['cookie'];
            setcookie($cookie_name, $cookie_value, time() + (86400*30), "/" ); // The "/" means that the cookie is available in entire website
                                                                               // or you cann write a specsific page path to set cookie value only to that page
            if(!isset($_COOKIE[$cookie_name]))
            {
                echo "Cookie named '" . $cookie_name . "' is not set!";
            }
            else
            {
                echo "Cookie '" . $cookie_name . "' is set!<br>";
                echo "Value is: " . $_COOKIE[$cookie_name];
            }
        ?>

        <h1>Modify Cookie value</h1>
        <P>again set the cookie with setcookie value</P>

        <h1>Delete Cookie value</h1>
        <?php
            setcookie("user", "", time() - 3600);  // // set the expiration date passed time or one hour ago
            echo "Cookie 'user' is deleted because duration is set to passed time.";
        ?>

        <h1>Check Cookies are Enabled</h1>
        <?php
            if(count($_COOKIE) > 0)
            {
                echo "Cookies are enabled.";
            } 
            else 
            {
                echo "Cookies are disabled.";
            }
        ?>
    </body>
</html>
