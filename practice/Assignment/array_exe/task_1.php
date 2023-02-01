
<?php
    $color = array('white', 'green', 'red');
    $str=implode(',', $color);
    echo "$str";
    echo "<br>";

    for($i=0;$i<=2;$i++)
    {
        echo "<ul>
                    <li>$color[$i]</li>

              </ul>";
    }
?>



            
