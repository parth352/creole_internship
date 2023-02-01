<?php
    $gen_string = "This is tutorial that enables string xxx in PHP";
    $str_len=strlen($gen_string);
    $substr=substr($gen_string,0,$str_len);
    $new_arr = explode(" ",$sunbstr);
    $total_num_substr= count($new_arr);
    echo "total number of substring: $total_num_substr";
?>
