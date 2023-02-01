<!-- intersecting arrays by user defined function -->
<?php
function mch($v1,$v2)
{
    if($v1===$v2)
    {
        return 0;
    }
    return ($v1 > $v2) ? 1 : -1;
}
$a1=["a"=>"red","b"=>"green","c"=>"blue"];
$a2=["d"=>"red","b"=>"green","e"=>"blue"];
print_r(array_intersect_uassoc($a1, $a2, "mch"));
echo "<br>";

// intersecting arrays by key using user defined match function
print_r(array_intersect_ukey($a1, $a2, "mch"));
echo "<br>";
?>