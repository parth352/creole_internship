<?php
   $arr_variable=['PHP','MYSQL','JAVA'];
   $arr_index=0;

   foreach($arr_variable as $new_arr)
   {
      echo "The Element [$arr_index]:"; 
      echo ( $new_arr ); 
      echo "<br>";
      $arr_index++;
   }

?>