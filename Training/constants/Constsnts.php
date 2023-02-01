<!-- Constants are like variables except that once they are defined they cannot be changed or undefined. -->

<!-- defining constants -->
<?php
define("c1", "hello parth welcome to creole studio");
echo c1; // it will print the constants values
?>



<!-- constants arrays -->

<?php
define("cars", [
  "rolce royce",
  "BMW",
  "Toyota"
]);
echo cars[0];  // displays  the constatnts array at  index 0;
echo "<br>";
echo cars[2];
echo "<br>"

?>

<!-- using constant inside functions -->
<?php
define("c2", "welcome to php");

function f1()
{
    echo c2; // c1 is the name of constants
    echo "<br>";
}

f1();
?>

<!-- we can also define constant using const keyword -->
<?php
const message = " this method uses const keyword";
echo message;
echo "<br>";
?>

<!-- none magic constants in php describe by double underscore at both the end-->
<?php   
    echo " 1.  __LINE__ constatns :== ";        
    echo "You are at line number " . __LINE__ . "<br><br>";   // it will define at which line number you are in your code 

    // __FILE__ constatnts describe the full file path
    echo "2. __FILE__ :== ";
    echo __FILE__. "<br><br>";

    //__DIR__ constatnts describe full directory path name
    echo "3. __DIR__ :== ";
    echo __DIR__. "<br><br>";

    //__CLASS__ constants return the class name in which constatnt is used
    echo "4. __FUNCTION__ :== ";
             
    function test(){       
        echo 'returns the function name : '. __FUNCTION__ . "<br><br>";   
    }    
    test();         
    echo  __FUNCTION__ . "<br><br>";  
?>  





