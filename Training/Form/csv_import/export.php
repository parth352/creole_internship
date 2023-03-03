<?php
include 'connection.php';

$sql = "SELECT * FROM user_list ORDER BY id ASC";
$result= mysqli_query($conn, $sql);
$count =mysqli_num_rows($result);

if($count>0){
    $delimiter= ",";
    $filename ="members-dat_". date('y-m-d'). ".csv";
    $f =fopen('php://memory','w');
    $fields = array('id', 'name', 'email', 'mo_number','address','image');
    fputcsv($f,$fields,$delimiter);

    while($row= mysqli_fetch_assoc($result)){
        $linedata =array($row['id'],$row['name'],$row['email'],$row['mo_number'],$row['address'],$row['image']);
        fputcsv($f,$linedata,$delimiter);
    }
    fseek($f,0);

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="'.$filename.'";');

    fpassthru($f);

}
exit();

?>