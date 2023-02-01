<!-- spliting array in different chunks -->

<?php
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Rolce royce");
print_r(array_chunk($cars,3,false)); //by default it is false
echo "<br>";

// echo "spliting array in different chunks and preserving orignal key", "<br>";

print_r(array_chunk($cars,2,true));
echo "<br>";

?>