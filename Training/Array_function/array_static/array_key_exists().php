<!-- checking weather array key exist or not -->
<?php
$a=["Volvo"=>"XC90","BMW"=>"X5","rolce royce"=>"ghost"];
if(array_key_exists("Volvo",$a))
{
    echo "yes key exists";
}
else
{
echo "key doesn't exixt";
}
echo "<br>";
?>

<!-- returns array containing keys -->
<?php
$a=["Volvo"=>"XC90","BMW"=>"X5","Toyota"];
print_r(array_keys($a));
echo "<br>";

// returns array of specific keys defined by user
print_r(array_keys($a, "X5"));
echo "<br>";    
?>