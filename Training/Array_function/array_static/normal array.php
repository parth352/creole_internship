<!--  Normal array function -->

<?php
$cars=["Rolce_royce","BMW","Honda"];
echo "I want to buy ", $cars[0] , "</br></br>";
?>

<!-- print all array value -->

<?php
$cars =["Rolce_royce","BMW","Honda"];
$carslen= count($cars);

for($i=0;$i<=$carslen;$i++)
{
    echo $cars[$i];
    echo "</br>";
}
?>