<html>
    <body>
    <?php
        $num1 = (int)$_REQUEST['num1'];
      $a =strlen($_POST['num1']);
      
       $sum=0;
       $temp= $num1;

    ?>

<?php

while($a--)
{
    $r=$num1%10;
    $sum=$sum*10+$r;
    $num1 = $num1/10;
    
  

}
echo $sum;

if($sum===$temp)
{
    echo "yes it is palindrome";
}
else
{
    echo "no it is not palindrome";
}

?>
</body>
</html>