
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