<?php
for($i=0; $i< 9; $i++)
{
    
    for($j=0; $j<$i ;$j++)
    {
        echo "&nbsp";
        
    }
    for($n=1; $n<=9-$i ; $n++)
    {
        echo "$n";
    }
    for($k=8-$i ; $k>=1; $k--)
    {
        echo "$k";
    }

    echo "<br>";

    
    
}
?>