<html>
    <body>
    <?php
    $num1 = (int)$_REQUEST['num1'];
    $num2 = (int)$_REQUEST['num2'];
    
    ?>

<?php


if(isset($_POST['select'])){

//   print_r( $_POST);    this is the debug technique
//   exit;

        $select = $_POST['select'];
        switch($select){

            case 'arithmatic':
                echo "<h1> Arithmatic Operators </h1>";
                echo "Addition Operation ==> ".($num1)+($num2)."<br>";
                echo "Subtraction Operation ==> ".($num1)-($num2)."<br>";
                echo "multiplication Operation ==> ".($num1)*($num2)."<br>";
                echo "Division Operation ==> ".($num1)/($num2)."<br>";
                echo "Modulus Operation ==> ".($num1)%($num2)."<br>";
                echo "Exponential Operation ==> ".($num1)**($num2)."<br>";
                
                break;

            case 'assignment':

                $x=(int)$num1;
                echo "<h1> Assignment Operators </h1>";
                echo "Addition Operation ==> ".($x +=($num2))."<br>";
                echo "Subtraction Operation ==> ".($x -=($num2))."<br>";
                echo "multiplication Operation ==> ".($x *=($num2))."<br>";
                echo "Division Operation ==> ".($x /=($num2))."<br>";
                echo "Modulus Operation ==> ".($x %=($num2))."<br>";
                    
                break;


            case 'comparision':
                echo "<h1> Comparision Operators </h1>";
                echo "Equals Operation (==) ==> "; var_dump(($num1)==($num2)); echo "<br>";
                echo "Identical Operation (===) ==> "; var_dump(($num1)===($num2)); echo "<br>";
                echo "Not-Equals Operation (!=) ==> "; var_dump (($num1)!=($num2)); echo "<br>";
                echo "Not-Equals Operation (<>) ==> "; var_dump (($num1)<>($num2)); echo "<br>";
                echo "Not-Identical Operation (!==) ==> "; var_dump (($num1)!==($num2)); echo "<br>";
                echo "Greater than Operation (>) ==> "; var_dump (($num1)>($num2)); echo "<br>";
                echo "Less than Operation (<) ==> "; var_dump (($num1)<($num2)); echo "<br>";
                echo "Greater than or Equal to Operation (>=) ==> "; var_dump (($num1)>=($num2)); echo "<br>";
                echo "Less than or Equal to Operation (<=) ==> "; var_dump (($num1)<=($num2)); echo "<br>";
                echo "Spaceship Operation (<=>) ==> "; var_dump (($num1)<=>($num2)); echo "<br>";
                
                break;


            case 'icrement/decrement':

                $x=(int)$num1;
                $y=(int)$num1;
                $z=(int)$num1;
                $w=(int)$num1;

                echo "<h1> Increment/Decrement Operators </h1>";
                echo "num1=".$x."<br>";
                echo "Pre-Icrements Operation (++val) ==> ".(++$x)."<br>";
                echo "Post-Increment Operation (val++) ==> ".($y++)."<br>";
                echo "Pre-Decrement Operation (--val) ==> ".(--$z)."<br>";
                echo "Post-Decrement Operation (val--) ==> ".($w--)."<br>";
                
                break;


            case 'logical':
                echo "<h1> logical Operators </h1>";

                $x = 100;      
                $y = 50;

                if ($x == 100 and $y == 50) {
                     echo "and operators (val1 and val2) <br>";
                }
                echo"In logical operators there are various types like==> <br>";

                echo " or Operation (val1 or val2) <br>";
                echo "xor Operation (val1 xor val2) <br>"; // return True if either val1 or val2 is true, but not both 
                echo "&& Operation (val1 && val2) <br>";
                echo "|| Operation (val1 || val2) <br>";
                echo "not Operation (val1 not val2) <br>";
        
                break;

            case 'ternary';
                $a=$num1 > $num2 ? "successful" : "not successful";
                echo "Ternary Operation is ".$a."<br> <br>";
                echo "NOTE: To make ternary operator sucessful enter val1 > val2 <br>";
            
            default:
                echo "select appropriate operator";
                break;
            }
        }
?>

     
</body>
</html>