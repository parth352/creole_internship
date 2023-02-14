<html>
    <body>
    <?php
        $num1 = (int)$_REQUEST['num1'];
      $count =strlen($_POST['num1']);
       $sum=0;
    ?>
    
<?php
while($count--)
{
    $rem=$num1%10;
    $sum=$sum*10+$rem;
    $num1 = $num1/10; 
}
echo $sum;
?>
</body>
</html>