<?php
   $arr=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
   echo "ascending order sort by value :<br><br>";
   asort($arr);

    foreach($arr as $new_arr)
    {
        echo "$new_arr <br>";     
    }
    echo "<br>"; 

    /////
    echo "ascending order sort by Key :<br><br> :" ;
    ksort($arr);

    foreach($arr as $key_sort =>$key_sort_value)
    {
        echo "key=".$key_sort.", value=".$key_sort_value. "<br>";
        echo "<br>";
    } 

    /////
    echo "descending order sorting by Value : <br><br>";
    arsort($arr);

    foreach($arr as $des_arr => $des_arr_value)
    {
        echo "key=".$des_arr.", value=".$des_arr_value. "<br>";
        echo "<br>";
    } 

    //////
    echo "descending order sorting by key : <br><br>";
    krsort($arr);

    foreach($arr as $key_des_arr => $key_des_arr_value)
    {
        echo "key=".$key_des_arr.", value=".$key_des_arr_value. "<br>";
        echo "<br>";
    } 


?>