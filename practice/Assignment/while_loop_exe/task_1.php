<?php
    $num=1;

    while($num!=10)
    {
        if($num%2==0)
        {
            echo "Skipping number $num because it is even. <br>";
        }
        else
        {
            echo "Executing - counter is $num  <br>";
        }
        $num++;
    }
?>