<!-- intersecting two array based on keys &values  -->
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","f"=>"blue");

$result=array_intersect_assoc($a1,$a2);
print_r($result);
echo "<br>";

// intersecting arrays based on keys
print_r(array_intersect_key($a1, $a2));
echo "<br>";
?>