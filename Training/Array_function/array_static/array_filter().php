<!-- array_filter function -->
<?php
function test_odd($v)
{
   return ($v & 1);  // will return even values of array
    // return !($v & 1);  // will return odd values of array
}
$a1=[1,5,2,3,9,8];
print_r(array_filter($a1,"test_odd",ARRAY_FILTER_USE_KEY));
echo "<br>";
?>