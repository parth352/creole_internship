<?php
    $val=1;
    for($index=1; $index<20; $index++)
    {
        if($index%2==0)
        {
            echo"-";
        }
        
        if($index%2!==0)
        {
            echo $val;
            $val++;

        } 
    }
?>