<!-- array map function -->
<?php
function f1($v)
{
  return($v+$v);
}

$a=[1,2,3,4,5];
print_r(array_map("f1",$a));
echo "<br>";    

?>



<!-- using 2 arrays in array map function -->
<?php
function f2($v1,$v2)
{
if ($v1===$v2)
  {
  return "same";
  }
return "different";
}

$a1=["Horse","Dog","Cat"];
$a2=["Cow","Dog","Rat"];
print_r(array_map("f2",$a1,$a2));
echo "<br>";
?>

<!-- assigning null as function -->
<?php
$a1=["Dog","Cat"];
$a2 = ["Puppy", "Kitten"];

print_r(array_map(null,$a1,$a2));
echo "<br>";
?>