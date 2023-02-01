<?php
   $num = (int)$_REQUEST['num1'];
   $fact=1;

   for($i=$num; $i>=1; $i--)
   {
      $fact = $fact * $i;
   }
   echo "the factorial is : $fact";
?>

