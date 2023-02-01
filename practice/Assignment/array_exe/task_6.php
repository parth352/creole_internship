<?php
    $str ='one,two,three,four';
    $new_str ='two,three,four';
    $arr= explode(',',$str);
    $arr1= explode("'",$new_str);
    $new_arr =['one'];
    
    $my_arr=str_split($str,18);
    print_r($my_arr);
    echo "<br>";

    $ans=array_merge([$new_arr],[$arr1]);
    print_r($ans);
    echo "<br>";

    echo "Array( ";
    for($i=0; $i<=2; $i++)
    {
        echo "[$i] => $arr[$i],";
    }
    echo ")";
?>