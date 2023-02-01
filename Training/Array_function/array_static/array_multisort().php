<!-- sorting of an array -->
<?php
$a=["parth1","raj5","harpesh3","kush2","ayush4"];
$b = ['4', '32', '4', '2', '1'];
array_multisort($a,SORT_DESC,$b, SORT_ASC, SORT_NUMERIC);  // by default it is ascending order and multi array sort
print_r($a);
echo "<br>";

array_multisort($b, SORT_ASC, SORT_NUMERIC); // sort array by numeric
print_r($b);
echo "<br>"
?>