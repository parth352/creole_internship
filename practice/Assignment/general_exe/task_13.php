<?php
    $phone_number =("001-234-567678");
    $arr = explode("-",$phone_number);

    for($index_num=0;$index_num<=2;$index_num++)
    {
        echo($arr[$index_num]). "<br>"; 
    }
?>