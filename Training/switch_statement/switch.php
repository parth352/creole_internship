
<html>
    <body>
        <?php
            if(isset($_POST['str1']))
            {
                $car = (string)$_REQUEST['str1'];
               // echo "$color";
                switch($car)
                {
                    case "volvo":
                        echo "Your fav car is volvo";
                        break;

                      case "bmw":
                        echo "Your fav car is BMW";
                        break;

                      case "rolce royce":
                        echo "Your fav car is Rolce Royce";
                        break;

                      default:
                        echo "enter valid car name"; 
                }
                echo "<h1>insted of using switch function we will use match function in php 8.0</h1>";
                $fav_car = match($car)
                {
                    'volvo' => "Your fav car is volvo",
                    'bmw' => "Your fav car is BMW",
                    'rolce royce' => "Your fav car is Rolce Royce",
                    default => "enter valid car name",
                };
                echo $fav_car;
             }
        ?>
    </body>
</html>