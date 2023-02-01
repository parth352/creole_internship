<?php
    $arr=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
    73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
    
    $arr_count=count($arr);
    $sum=array_sum($arr);
    $avg= $sum/$arr_count;
    echo "Average Temperature is $avg";
    echo "<br>";
    sort($arr);
    echo "List of seven lowest temperatures :";

    for($i=0 ; $i<=7 ;$i++)
    {
        echo "$arr[$i],";
    }
    echo "<br>";
    echo "List of seven highest temperatures :";
    
    for($i=$arr_count-1 ,$j=0; $j<7; $j++, $i--)
    {
        echo "$arr[$i],";
    }
?>