<?php
    for($i=0; $i<5; $i++)
    {
        for($j=5-$i; $j>=0 ;$j--)
        {
            echo "&nbsp";   
        }

        for($k=0; $k<=$i ; $k++)
        {
            echo " *";
        }
    echo "<br>";  
    }
?>