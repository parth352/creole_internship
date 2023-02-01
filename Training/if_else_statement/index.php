<html>
    <body>
        <?php
            echo "<h4> This is example of if elseif else statement </h4> <br><br>";
            echo "This program will say good Morning/Afternoon/Evening based on UTC time <br><br>";
            $curr_time =date("H");  // H will describe the time in 24 hour format from (00 to 23)
            echo "current utc time is : $curr_time <br><br>";

            if($curr_time < "11")
            {
                echo "Hello Good Morning";
            }
            elseif($curr_time < "15")
            {
                echo "Hello Good Afternoon";
            }
            else
            {
                echo "Hello Good Night";
            }
        ?>
    </body>
</html>