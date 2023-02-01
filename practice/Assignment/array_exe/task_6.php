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


     //$new_arr=[];
   // $val=2;
   // $update_arr=[];
    // // for($index=0; $index<=2; $index++)
    // // {
    // //     echo "[$i]=>";
    // //     print_r($arr[$i]);
    // // }
    // for($index=1; $index<=3; $index++)
    // {
    //     array_push($new_arr,$arr[$index]);
    // }
    //  //print_r($new_arr);

    // $update_arr=$new_arr;
    
    // foreach($update_arr as $final_arr=> $final_arr_value)
    // {
    //     // $update_arr[$key]= $val;
    //     // $val++;
    
    //     // $final_arr = 1;
        
    //     echo "$final_arr_value,";
    //     // print_r($final_arr_value);
    // }
   
?>