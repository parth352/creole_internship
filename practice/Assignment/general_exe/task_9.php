<?php
    for($i=1; $i<5; $i++ )
    {
        for($k=1;$k<$i+1;$k++)
        {
            echo "$k";
        }

        for($j=$i-1; $j<4; $j++)
        {
            echo "&nbsp";
        }
        echo "<br>";
    }
?>