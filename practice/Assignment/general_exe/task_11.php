<?php
    $char_value=0;

    for($index=0; $index<=4; $index++)
    {
        $Char_value= 65 + $index;
        $str = chr($Char_value);

        for($num_char=5; $num_char>$index; $num_char--)
        {
            echo "$str";
        }
            echo "<br>";
    }
?>

