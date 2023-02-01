<!-- compares value and return the difference by array_diff() -->
<?php
$a1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$a2=array("a"=>"red","f"=>"green","c"=>"blue");

// compare only value and return which is unique
print_r(array_diff($a1,$a2));
echo "<br>";

// compare keys $ value and return which is unique
print_r(array_diff_assoc($a1,$a2));
echo "<br>";

// compare only keys and return which is unique
print_r(array_diff_key($a1,$a2));
echo "<br>";


 
function cmp($a,$b)
{
    if($a===$b)
    {
        return 0;
    }
     return($a>$b?1:-1);

}
//compare keys and values ny user defined function
print_r(array_diff_uassoc($a1,$a2,"cmp"));
echo "<br>;";

//compare only keys by user defined function
print_r(array_diff_ukey($a1,$a2,"cmp"));
echo "<br>";
?>
