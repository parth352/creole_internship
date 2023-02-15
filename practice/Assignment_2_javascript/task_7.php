
<?php

       
           
        function check_sort($str, $input1){
            $str_len = strlen($str);
            $arr = [];

        for($index = 0; $index < $str_len; $index++){
                array_push($arr, $str[$index]);
            }
          
            if($input1 == true){
                $ase_sort = asort($arr);
                if($ase_sort == $arr){
                    echo "TRUE";
                }
                else{
                    echo "FALSE";
                }
            }
            if($input1 == false){
                $dse_sort = rsort($arr);
                if($dse_sort == $arr){
                    echo "TRUE";
                }
                else{
                    echo "FALSE";
                }
            }
        }
        
        check_sort("abbcddeikl",false);
        echo "<br>";
        check_sort("jheca", true);

      
    ?>
