<!-- compare array values and returns common value or array_intersect() -->
<?php
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=array("a"=>"red","f"=>"green","c"=>"blue");
print_r(array_intersect($a1, $a2));
echo "<br>"

?>