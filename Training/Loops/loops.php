<html>
    <body>

        <?php
            $x= (int)$_REQUEST['num1'];
            $y=0;

            if(!isset($_POST['submit']))
            {
                $select= $_POST['select'];
                switch($select)
                {
                    case 'while':  //<!-- this loop executes a block of code as long as specified condition is true -->
                        echo " This is example of WHILE loop <br><br>";

                        while($y <= $x)
                        {   
                            echo "The number is :  $y <br>";
                            $y++; // post increment method
                        }
                        break;
        
                    case 'do-while': // The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true
                        echo "This is example of DO While loop <br> <br>";

                        do {
                            echo "The number is: .$y <br>";
                            $y++;
                        } 
                        while($y <= 5);
                        break;
        
                    case 'for': //The for loop - Loops through a block of code a specified number of times.
                        echo "This is example of FOR loop <br><br> ";
                    
                        for($y=0; $y<=$x; $y++)
                        {
                            echo "This number is : $y <br>";
                        }
                        break;
        
                    case 'for-each': //The for-each loop loops through a block of code for each element in an array 
                        echo "This is the example of FOR-EACH loop  <br><br>";
                        $car_arr = array("Tata","Mercedis","BMW","Mahindra");

                        foreach ($car_arr as $val)
                        {
                            echo "  $val, ";
                        }
                        break;
        

                    case 'break': // break is used to break the for loop
                        echo "This is break method it will only returns 3 value because break is set at 3 statically <br><br>";
            
                        for($y=0;$y<=$x;$y++)
                        {
                            if($y == 3)
                                {
                                    break;  // this break is set to 3
                                }
                            echo "The number is : $y <br>";
                        }
                        break;

                    case 'continue':  // continue is used to skip one step or continue without returning one tep
                        echo "This is example of continue method it will skip one value = 3 as it is defined statically <br><br>";

                        while($y < $x)
                        {
                            if($y == 3 )
                            {
                                $y++;
                                continue;
                            }
                            echo "The number is : $y <br>";
                            $y++;
                        }
                        break;
        
                    default:
                        echo "enter valid number";
                        break;


                }
            }
        ?>

    </body>
</html>