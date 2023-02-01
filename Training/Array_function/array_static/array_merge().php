<!-- merging of two array -->
<?php
$a1=["e"=>"red","f "=>"green"];
$a2=["c"=>"blue","b"=>"yellow"];
print_r(array_merge($a1,$a2));
echo "<br>";

// using only one parameter with integer key
print_r(array_merge($a1));
echo "<br>";
?>

<!-- merging of array recursively -->
<?php
$a1=["a"=>"red","b"=>"green","c"=>"orange"];
$a2=["c"=>"blue","b"=>"yellow"];
print_r(array_merge_recursive($a1,$a2));
// on same key two different values are used then this function merge two diferent value with different index value.
echo "<br>";
?>