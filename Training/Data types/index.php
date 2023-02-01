<html>
    <body>
        <h1>Null String</h1>
        <?php
        $a = "Hello Parth patel";
        $a = null;
        echo "your varuable is set to:==";
        var_dump($a);
        is_null($a); // it will return false value or === can also return false .
        ?>
       
         <!-- boolean Data Type  -->
        <h1>Boolean Data Type</h1>
        <?php
        $a = 15;
        $v = (bool) $a; //(bool) is used to define data type
        echo "bool data types will return:==>";
        var_dump($v);
        echo "<br>";
        
        // this will return boolean value to 0 because there is no value given
        $b = 0;
        $v1 = (bool) $b;
        echo "bool data type if value is not given than:==>";
        var_dump($v1);
        echo "<br>";
        ?>
        
        
        <!-- integer,Float data types in php it automaticaly converts based on size of value  -->
        <h1>Automatic Data types</h1>

        <?php
         $large_num = 942662183978546546535;  // value overflow on 64 bits of system it automatically convert to float OR float value can also be describe by 25.26
        echo " it describes the data types:==> ";
         var_dump($large_num);
        echo "<br>";

         $large_num1 = 94266218335;  // value overflow on 64 bits of system it automatically convert to int
         echo " it describes the data types:==> ";
         var_dump($large_num1);
         echo "<br>";
         ?>


        <!-- This is the string data type -->
        <h1>String Data type</h1>

            <?php

            //string representation using single quote 
            $x= 'string is represented by single quote';
            echo $x,"<br>"; 

            //string representation using Double quotes
            echo "string is represented by double quote","<br>";

            //string representation using heredoc
            echo <<<END

                This is
                heredoc
                method
                <br>
            END;

            // string representation using nowdoc
            echo <<<'EOD'
                This is
                nowdoc
                method
                <br>
            EOD;   
            ?>

            <!-- Object data type -->
            <h1>Object data type</h1>

            <?php
                class Car {
                    public $company;
                    public $model;
                    public function __construct($company, $model) {
                      $this->company = $company;
                      $this->model = $model;
                    }
                    public function message() {
                      return "My car is of " . $this->company . " company and it is " . $this->model . " model";
                    }
                  }
                  
                  $myCar = new Car("volvo", "XC40");
                  echo $myCar -> message();
                  echo "<br>";
                  $myCar = new Car("TATA", "Harrier");
                  echo $myCar -> message();
                
            ?>


            <!-- Enum data type -->
            <?php
                enum vehicle    // enums are used to define variables which has predefined values like direction(north,south,E,W)
                {
                    case cars;
                    case bikes;
                    case trucks;
                    case buses;
                }

                function f1(vehicle $s)
                {
                    return " this is enum data type";
                }

                f1(vehicle::bikes);  
            ?>




</body>
</html>