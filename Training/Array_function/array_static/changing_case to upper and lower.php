<!-- Changing_case == UPPer_case & Lower_case  -->

<?php
$friends_age=array("PaRtH"=>"21","HaRpEsH"=>"37","KuSh"=>"43");
print_r(array_change_key_case($friends_age,CASE_UPPER));
echo "lowercase","<br>";
print_r(array_change_key_case($friends_age,CASE_LOWER));
echo "<br>";
?>