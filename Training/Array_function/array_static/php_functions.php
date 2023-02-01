



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

<!-- array_pop function -->
<?php
echo "array_pop function ";
echo "<br>";
$a=["red","green","blue"];
array_pop($a);
print_r($a);
echo "<br>";
?>

<!-- array_product function -->
<?php
$a=[5,10,15];
print_r(array_product($a));
echo "<br>";
?>

<!-- array_push function -->
<?php
echo "array_push";
echo "<br>";
$a = ["a"=>"parth", "3"=>"harpesh"];   // array index will be continious
array_push($a, "ayush", "yash");

print_r($a);
?>

<!-- array_rand function -->
<?php
echo "array_rand function";
echo "<br>";
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];
echo "<br>";


$b=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
print_r(array_rand($b,2)); // random key will be displayed
echo "<br>";

?>

<!-- array_reduce () -->
<?php
function myfunction($v1,$v2)
{
return $v1 . "-" . $v2;
}
$a=array("Dog","Cat","Horse");
print_r(array_reduce($a,"myfunction")); // returns array to string
echo "<br>";
?>n

<!-- array_replace -->
<?php
$a1=array("a"=>"red","b"=>"green");
$a2=array("a"=>"orange","burgundy");
print_r(array_replace($a1,$a2));
echo "<br>";
?>

<!-- array_search function -->
<?php
$a=array("a"=>"5","b"=>5,"c"=>"5");
echo array_search(5,$a,true);  // search array value and return its key
echo "<br>";
?>

<!-- array_reverse -->
<?php
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));
echo "<br>";
?>

<!-- array count function -->
<?php
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
echo "<br>";
?>

<!-- array sorting function -->
<?php
$age=array("Peter"=>"35","Ben"=>"50","Joe"=>"43");
arsort($age); // sortin ascending order
print_r($age);
echo "<br>";
asort($age);  // sort in desending order
print_r($age);
echo "<br>";
?>


<!--array_shift function  -->
<?php
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a); //Remove the first element (red) from an array, and return the value of the removed element:
print_r ($a);
echo "<br>"
?>

<!-- array_unshift function -->
<?php
$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");
print_r($a);
echo "<br>";
?>

<!-- array_walk function -->
<?php
function f4($value,$key)
{
echo "The key $key has the value $value<br>";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"f4");
echo "<br>";
?>

<!-- array_slice function -->
<?php
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2)); // displays array values after 2 elemenrt or skip 2 element
echo "<br>";
print_r(array_slice($a,2,2)); // strat slice after 2 elements and displays 2 elements
echo "<br>";
?>

<!-- array_splice function -->
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,1,2,$a2);  // replace elements in array a1 and start from element 1 and upto 2 elements 
print_r($a1);
?>