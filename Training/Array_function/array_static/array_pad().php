<!-- adding of an element in an array using pad function -->

<?php
echo "adding of an element in an arrayusing pad function";
echo "<br>";
$a=array("red","green");
print_r(array_pad($a,5,"blue"));
echo "<br>";
// negative size parameter padd the array from front side
print_r(array_pad($a, -5, "blue"));
echo "<br>";
?>