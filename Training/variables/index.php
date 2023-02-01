<html>
<body>
    
<h1>Variables in PHP</h1>
<!-- declaring variables -->
<?php
$txt = "Good Morning";
echo "Hellow " . $txt ;
echo "<br>";

// addition by storing values in variables
$x = 5;
$y = 5;
echo $x + $y;
?>

<h1>Different scopes in declaring variables</h1>

<h3>Global scope variable</h3>
<!-- A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function -->

<?php
$x = 10;     // this is global scope variable

function test() {

  echo "Variable x inside function is:". $x; // using x inside this function will generate an error
}
test();

echo "Variable x outside function is:". $x;
echo "<br>";
?>

<h3>Local scope variable</h3>
<!-- A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function -->

<?php
function test1() {
  $z = 10; // this is local scope variable
  echo "Variable x inside function is:". $z;
}
test1();

echo "Variable x outside function is:".$z; // using x outside the function will generate an error

?>

<h1>Use of global keyword</h1>
<!-- global keyword is used before variables to access the global variables inside function  -->

<?php
    $x = 5;
    $y = 10;

        function myTest()
         {
                global $x, $y;
                $y = $x + $y;
        }

    myTest();
    echo $y; // outputs 15
?>  

<h1> Use Of Static Keyword</h1>
<!-- static keword will help variable to store value even if function has been executed completly -->

<?php
    function myTest1() {
    static $x = 0;
        echo $x;
        $x++;
    }

    myTest1(); echo "<br>";
    myTest1(); echo "<br>";
    myTest1();
?>

</body>
</html>
    
