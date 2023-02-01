<!-- array_column() function -->
<?php
$names = [["id"=>'1',"f_name"=>"Parth","l_name"=>"Patel"],
          ["id"=>'2',"f_name"=>"Kush","l_name"=>"Kalavadiya"],
          "id"=>'3',"f_name"=>"Harpesh","l_name"=>"Jaganiya"];
$last_name=array_column($names,'l_name',"f_name");
print_r($last_name);

echo "<br>"
?>