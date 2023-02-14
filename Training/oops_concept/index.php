<html>
    <body>
        <h3>This is example of classes and object</h3>
        <?php
            class car {
                // properties
                public $model;
              
                // methods
                function set_value($model){
                    $this->model=$model;
                }

                function get_value(){
                    return $this->model;
                }
            }

            $volvo = new car();         // class is car and volvo and bmw are object
            $bmw   = new car();
            $volvo->set_value('xc90');
            $bmw->set_value('Q3');

            echo "object name is volvo and its value is ".$volvo->get_value();
            echo "<br>";
            echo "object name is bmw and its value is ".$bmw->get_value();

            echo "<h3> we can check weather the object belong to a specific class or not by instanceof keyword</h3>";
            echo "volvo is instance of car :"; var_dump($volvo instanceof car); 
            echo "<br>";   
            echo "bmw is instance of car :"; var_dump($bmw instanceof car); 
        ?>

        <!-- constructor method and destructor method -->
        <h3> Use of constructor and destructor</h3>
        <?php
            class Fruit {
              public $name;
              public $color;

              function __construct($name, $color) {   // it will be automatically called when you create new object
                $this->name = $name;
                $this->color = $color;
              }
              function get_value() {               // it will automatically called at the end of the script
                echo "The fruit is {$this->name} and the color is {$this->color}.";
              }
            }
            $apple = new Fruit("Apple", "red");
            $apple->get_value();
        ?>
        

        <!-- public/private/protected -->
        <?php
            class fruite {
                        public $name;
            public $color;
            public $weight;

            function set_name($n) {  // a public function (default)
              $this->name = $n;
            }
            protected function set_color($n) { // a protected function
              $this->color = $n;
            }
            private function set_weight($n) { // a private function
              $this->weight = $n;
            }
            }

            $mango = new fruite();
            $mango->set_name('Mango'); // OK
            // $mango->set_color('Yellow'); // ERROR    //this  is protected  it will only accesses publicaly and the class inherited from main class
            // $mango->set_weight('300'); // ERROR      //this is private function it will be only accessed inside its own class only
        ?>


        <!-- inheritance method -->
        <h3> use of inheritance</h3>
        <?php
            class vegitable {
              public $name;
              public $color;
              public function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
              }
              public function intro() {
                echo "The vegitable is {$this->name} and the color is {$this->color}.";
              }
            }
            class patato extends vegitable {
              public $weight;
              public function __construct($name, $color, $weight) {
                $this->name = $name;
                $this->color = $color;
                $this->weight = $weight;
              }
              public function intro() {
                echo "The vegitable is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
              }
            }
            $patato = new patato("patato", "brown", 50);
            $patato->intro();
            echo "<br>";
        ?>
        

        <!-- inheritance method  and protected access modifier -->
        <h3>Inheritance method with Protected Access Modifier </h3>
        <?php
          class biography{
            public $name;
            public $age;

            public function __construct($name,$age){
              $this->name = $name;
              $this->age = $age;
            }
            protected function  intro() {             // This is protecte method which can be only caleed within itself or its derived class
                echo "Your name is {$this->name}";    
              }
            }

          class your extends biography{
            public function message() {
              echo "Your age is {$this->age}";
              $this->intro();                         // Here the protected method is called 
            }
          }
          $your = new your("parth","25");
          $your->message();

        ?>

        <!-- Use of final keyword to prevent method overriding -->
        <h3>Use of Final Keyword to prevent method overriding</h3>
        <?php
           /*final*/ class volvo{                    // Here final keyword will prevent inheritance of class
              public $name;

              public function __construct($name){
                $this->name=$name;
              }  
             /* final */ public function intro(){      // final method will prevent method overriding it will show error
                echo "my name is {$this->name}";
              }
            }

            class xc40 extends volvo{
              public $price;

              public function __construct($name,$price){
                $this->name =$name;
                $this->price =$price;
              }
              public function intro(){
                echo "my name is {$this->name} and my price is {$this->price}";
              }
            }

            $xc40 =new xc40("BMW","80 lac");
            $xc40->intro();
        ?>

        <!-- Use of php class constants i php -->
        <h3>Use of php class constants</h3>
        <?php
            class goodmorning{
              const MESSAGE = "Have a Nice Day this is a constant message";  // const must be declared in uppercase to easily identify.
              function morning(){
                echo self::MESSAGE;
              }
            }
            $goodmorning = new goodmorning;
            $goodmorning->morning();
        ?>
        
        <!-- Abstract class method -->
        <h3>Use of abstract classes method</h3>   <!-- abstract classes are method which only contains names and arguments and no methods-->
        <?php
            // Parent class
            abstract class bike {
              public $name;
              
              public function __construct($name, $price) {
                $this->name = $name;
                $this->price =$price;
              }
              abstract public function intro(); 
            }
            // Child classes
            class splender extends bike {           // methods can be assign to abstract class by using child classes method
              public function intro(){
               echo "$this->name is of hero company and it's price is $this->price";
              }
            }
            class unicorn extends bike {
             public function intro(){
                echo "$this->name is of honda company and it's price is $this->price";
             }
            }
            // Create objects from the child classes
            $splender = new splender("splender", "80,000");
            echo $splender->intro();
            echo "<br>";
            $unicorn = new unicorn("unicorn","1,30,000");
            echo $unicorn->intro();
            echo "<br>";
        ?>       
        
    </body>
</html>