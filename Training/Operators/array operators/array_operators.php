<html>
    <body>
    <?php
  $arr1 = explode(",",$_POST['str1']);
  $arr2 = explode(",",$_POST['str2']);
  $x=array("1"=>"$arr1[0]", "2"=>"$arr2[1]");
  $y=array("3"=>"$arr2[0]", "4"=>"$arr2[1]");
    ?>

    <?php
       if(!isset($_POST['submit']))
       {

        $select = $_POST['select'];
        switch($select)
        {

            case 'union':
                echo "Union operator: ";  //Increments $x by one, then returns $x
                print_r($x+$y);     
                break;

            case 'equality':
                echo "equality operator: "; //Returns $x, then increments $x by one
                var_dump($x==$y); 
                break;

            case 'identity':
                echo "identity operator: "; //Decrements $x by one, then returns $x
                var_dump($x===$y); 
                break;
            
            case 'inequality':
                echo "inequality operator: "; //Returns $x, then decrements $x by one
                var_dump($x!=$y); 
                break;

            case 'inequality1':
                echo "inequality operator using (<>) : ";
                var_dump($x<>$y); 
                break;

            case 'nonidentity':
                echo "Non identity operator: ";
                var_dump($x!==$y); 
                break;
            default:
                echo " ";
                break;
        }

       }
    ?>

</body>
</html>


