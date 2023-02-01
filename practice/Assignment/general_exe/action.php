<html>
    <body>

        <?php
            $num1 = (int)$_REQUEST['num1'];
            $sum="0";   

            for($i=2;$i<=$num1; $i++)
            {
                if($i%2==0)
                {
                    $sum+=$i;
                }
            }
            echo "the sum is: $sum";
        ?>
    </body>
</html>