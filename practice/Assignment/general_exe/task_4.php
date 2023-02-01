<?php
    $arr_num = array(5, 10, 15, 20, 25);
    $sum_arr=[];

    foreach($arr_num as $new_arr)
    {
        echo "$new_arr <br>";
    }

    for($index=0; $index<=4; $index++)
    {
        array_push($sum_arr,$arr_num[$index] *2);  
    }
    print_r($sum_arr);
?>