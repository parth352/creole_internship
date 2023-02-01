<pre>
<?php

$arr = explode(",",$_POST['input']);


if(!isset($_POST['submit'])){

    
        $select = $_POST['select'];
        switch($select){

            

            case 'random':
                echo "array_rand returns Random elements of array keys : ";
                $key=array_rand($arr);
                echo $arr[$key];
                 break;
            
            case 'reverse':
                 echo "array_reverse returns Reveresed array elements : ";
                 print_r(array_reverse($arr));
                 break;
            
            case 'product':
                echo "array_product returns Product of array function : ";
                print_r(array_product($arr));
                break;


            case 'count':
                  echo "count() Number of elements in array : ";
                  print_r(count($arr));
                  break;


            case 'sum':
                  echo "array_sum() returns Sum of elements : ";
                  print_r(array_sum($arr));
                  break;

            case 'unique':
                  echo "array_unique returns Unique elements of array  : ";
                  print_r(array_unique($arr));
                  break;

            case 'value':
                  echo "array_values returns Array Values : ";
                  print_r(array_values($arr));
                  break;


            case 'asc':
                  asort($arr);
                  echo "asort returns Ascending order : "."<br>";
                  foreach($arr as $key=>$val)
                        {
                              echo "[$key] = $val";
                              echo "<br>";
                        }
                                        
                  break;


            case 'dsc':
                 arsort($arr);
                  echo "arsort() returns Descending order : "."<br>";
                  foreach($arr as $key=>$val)
                        {
                        echo "[$key] = $val";
                        echo "<br>";
                        }
                  break;




            case 'shuffle':
                  echo "shuffle() returns Suffled elements : "."<br>";
                  print_r(shuffle($arr));
                  foreach($arr as $x=>$x_value)
                        {
                        echo "". $x_value;
                        echo "<br>";
                        }

                  break;



            case 'sizeof':
                  echo "sizeof() returns Number of elements : ";
                  echo sizeof($arr);
                  break;
                        


            case 'push':
                 echo "array_push() returns Pushed new element : ";
                 $pushed=array_push($arr,"Parth");
                 print_r($arr);
                  break;




            case 'pop':
                  echo "array_pop() returns Poped last element : ";
                  $poped=array_pop($arr);
                  print_r($arr);
                  break;





            case 'shift':
                  echo "array_shift() returns Shift first element : ";
                  $shifted=array_shift($arr);
                  print_r($arr);
                  break;




            case 'unshift':
                  echo "array_unshift() returns Unshift first element : ";
                  $unshifted=array_unshift($arr,5);
                  print_r($arr);
                  break;




            default:
                echo "Ussr Please Enter valid input";
                break;
        }

    } 
 
 
  
  


?>
</pre>