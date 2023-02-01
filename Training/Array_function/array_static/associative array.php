<!-- Example of an assosiative array -->

<?php
$x=1;
$cars=["Rolce_royce"=>'10',"Honda"=>'20',"BMW"=>'30'];
foreach($cars as $i=>$cars_value)
  {
  echo "Key=" . $i . ", Value=" . $cars_value+$x;
  echo "<br>";
  }

  echo "<br>";

?>
