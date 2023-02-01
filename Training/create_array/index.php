<html>
    <body>
        <h1> creating array in php</h1>

        <?php error_reporting(0); ?>

        <?php
            echo "<h3>This is simple method of creatimng array</h3>";
            $cars= array("tata","mahindra","bmw");
            echo "I like ". $cars[0]. ","."$cars[10]";

            echo "<h3> this is another method of creating array by using square brackets []</h3>";
            $cars= ["tata","mahindra","bmw"];
            echo "I like ". $cars[0]. ","."$cars[10]";
        ?>

        <?php
             echo "<h3>This is exampple of associative array</h3>";

             $cars=["Rolce_royce"=>'10',"Honda"=>'20',"BMW"=>'30']; // we can define "key"=>"value" in assosciative array
             foreach($cars as $i=>$cars_value)  
            {
                echo "Key=" . $i . ", Value=" . $cars_value+$x;
                echo "<br>";
            }
        ?>

        <?php
            echo "<h3>This is exampple of multidimensional array</h3>";
            // arrays in php can contains string and integers at the same time

            $arry=[['volvo','bmw'],['Parth','Rolce_royce'],[1,2,3]]; // we can assign any types of array in multidimensional one array can be of int and another one can also be string
            echo $arry[1][0]," car is of ",$arry[0][0]. " company & he has ". $arry[2][2]. " cars";
            echo "<br>"
        ?>

        <?php
            echo "<h3>This is exampple of Destructing array and swapping</h3>";

            $source_array = ['tata', 'mahindra', 'bmw'];
            [$tata, $mahindra, $bmw] = $source_array;
            echo "This is destructing of array <br>";
            echo $tata. "<br>";
            echo $mahindra. "<br><br>";
            // swapping of array
            $a = 1;
            $b = 2;
            [$b, $a] = [$a, $b]; // this method is used for 
            echo "this is swapping of array <br>";
            echo $a. "<br>";    // prints 2
            echo $b."<br>";    // prints 1
        ?>

        
        <?php
             echo "<h3>This is exampple of unset method in array used for releasing memmory used by array variable statically</h3>";
            $arr = array(5 => 1, 12 => 2);
            $arr[] = 56;    // This is the same as $arr[13] = 56;
                            // at this point of the script
            $arr["x"] = 42; // This adds a new element to
                            // the array with key "x"
            print_r($arr);
            echo "<br><br>";
            unset($arr[5]); // This removes the element from the array and release memmory
                            // this releasing memmory is done automaticaly by php by grbage collection but hence we use unset method to release memmory staticaly
            echo "after using unset method <br>";
            print_r($arr);
            
        ?>

        <?php
            echo "<h3>This is exampple of array dereferencing method you can access array directly in the method of any fnction</h3>";
            function getArray() 
            {
                return array(1, 2, 3);
            }
            $secondElement = getArray()[1];  // by using array dereferencing method you can access array directly in method of any fnction
            echo "$secondElement";
        ?>
    </body>
</html>