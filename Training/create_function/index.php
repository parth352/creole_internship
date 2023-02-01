<html>
    <body>
        <h1> How to create Functions in php</h1>
        <?php
            echo "<h3>This is user defined function </h3>";
            
            function user_define($company,$location,$num) // we can also pass arguments in this functions
                                                          // PHP automatically associates a data type to the variable, depending on its value as $num is associated to integer automatically
            {
                echo "This function is user defined function <br><br>";
                echo "This function is called by $company from $location has position $num in the world <br>"; 

            }
            user_define("Creole studio", "Ahemdabad", 53);  // calling functions by passing argument
            echo " <br><br>";
        ?>

            <!--this code is commented because strict_type=1 is applied to whole file it will generate error  -->

        <?php // declare(strict_types=1); 

                                        // it checks that all arguments should match its data type as defined by user
                                       // there are two values for strict_type 0 & 1 by default it is 0. 

            // echo " <h3>This is user defined function using strict_type = 1 </h3> ";

            // function user_define1(int $company,string $location,int $num) // we can also pass arguments in this functions
            // {
            //     echo "This function is user defined function <br><br>";
            //     echo "This function is called by $company from $location has position $num in the world <br>"; 

            // }

            // user_define1("Creole studio", "Ahemdabad", 53);  // calling it will generate error because  $company is passed as string and not as integer

        ?>

            
        <?php
            echo "<h3>This function is using default parameter value as height=100 </h3>";
            
            function your_height(int $minheight = 100) // passing default argument value to function as defalut value is set to 50
            {
                echo "The height is : $minheight <br>";
            }
            your_height(); // will use the default value of 50 because it is set by user
            echo "<br>";
            your_height(192); // in this function call 192 value is set to parameter
                              // as new argumnet is passed $minheight value is overwritten by new value.
            echo "<br>";
        ?>

        
        <?php 
            echo "<h3> This function is using return  method to send answer </h3>";
            
            function sum(int $x, int $y)  
            {
                $a = $x + $y;
                return $a; // passing return value as answer
            }
            echo "5 + 10 = " . sum(5, 10) . "<br>";
            echo "7 + 13 = " . sum(7, 13) . "<br>";
            echo "2 + 4 = " . sum(2, 4) . "<br><br>";
        ?> 


        <?php 
            echo "<h3> Here Data type is assigned to retuurn type to float </h3>";

            function add(float $a, float $b) : float  // (: float) float datatype is assigned to return value
            {
                return $a + $b;
            }
            echo add(1.2, 5.2);
            echo "<br><br>"; 
        ?>


        <?php
             echo "<h3> Here arguments are passed by refrence </h3>";

            function add_ref_value(&$val)  
                    // & is used to show the pointer for refrence value
            {
                return $val += 5 ;
            }

            $num = 10;
            add_ref_value($num);  // $num is passed which stores value 10 as shown in above line
            echo "$num";          // it will return the value passed by function
        ?>
        

        <?php
            echo "<h3> This is arrow function in php </h3>";
            $z = 1;
            $fn = fn($x) => fn($y) => $x * $y + $z;  // arrow function is completed in single line                                 
            // Outputs 51
            var_export($fn(5)(10));  //var_export() outputs value or returns structured information about a variable.
            echo "<br>";    
        ?>


        <?php
            echo "<h3> This is variable function in php as per php documentation </h3>";

            class car
            {
                function Variable()   // functions inside class are called methods
                {
                    $name = 'Tata'; //PHP supports the concept of variable functions. This means that if a variable name has parentheses appended to it then it will run that function
                    $this->$name(); // This calls the Tatar() method as $name is assigned Tata value.
                }
    
                function Tata()
                {
                    echo "This is Tata Nexon";
                }
            }
            $cars = new car();
            $function_name = "Variable";
            $cars->$function_name();  // This calls car->Variable()
        ?>
        
    </body>
</html>