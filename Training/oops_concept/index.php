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
        
        <!-- Interface Method -->
        <h3>Interface method in php</h3>  <!--Interfaces allow you to specify what methods a class should implement.-->
        <?php
          interface Cat_family {
            public function sound();
          }

          class lion implements cat_family{
            public function sound(){
              echo "LION ROAR";
            }
          }

          class cat implements cat_family{
            public function sound(){
              echo " CAT MEOW";
            }
          }

          $cat = new cat();
          $lion = new lion();
          $cat_family_array=[$cat, $lion];

          foreach($cat_family_array as $cat_family){
          $cat_family->sound();
          echo "<br>"; 
          }
        ?>

        <!-- Traits methiod is used insted of classes to support multiple inheritance -->
          
           <h3>PHP Traits method</h3>    <!-- traits are used to declare methods that can be used in multiple classes. 
                                        Traits can have methods and abstract methods that can be used in multiple classes -->
        <?php
            trait message1 {        // traits keyword is used to declare traits 
                public function msg1() {
                    echo "This is trait method which is used to declare method that can be used in multiple classes";
                }
            }
            trait message2 {    
                public function msg2() {
                   echo "you can also use multiple trait in same class";
                }
            }
            class Welcome1 {
                use message1;     // use keyword is used to use traits method in different classes 
            }

            class Welcome2 {
                use message1, message2;
            }

            $obj = new Welcome1();
            $obj->msg1();
            echo "<br>";

            $obj2 = new Welcome2();
            $obj2->msg1();
            echo "<br>";
            $obj2->msg2();
        ?>
        
        <!-- Alternate Precedence Order Example -->
        <h4>Trait Alternate Precedence Order Example</h4>
        <?php
          trait HelloWorld {
            public function sayHello() {
                echo 'Hello World!';
            }
          }
        
          class TheWorldIsNotEnough {
            use HelloWorld;
            public function sayHello() {    // this is overriding sayHello() function
                echo 'Hello Universe!';
            }
          }
    
          $new_obj = new TheWorldIsNotEnough();
          $new_obj->sayHello();
        ?>

        <!-- conflict resolution for trait method using insteadof -->
        <h4>Conflict resolution for trait method using insteadof</h4>
        <?php
            trait A {
                public function smallTalk() {
                    echo 'this is small talk of trait a';
                }
                public function bigTalk() {
                    echo 'THIS IS BIG TALK OF TRAIT A';
                }
            }

            trait B {
                public function smallTalk() {
                    echo 'this is small talk of trait b';
                }
                public function bigTalk() {
                    echo 'THIS IS BIG TALK OF TRAIT B';
                }
            }

            class Talker {
                use A, B {
                    B::smallTalk insteadof A;   //the insteadof operator needs to be used to choose exactly one of the conflicting methods.
                    A::bigTalk insteadof B;
                }
            }

            class Aliased_Talker {
                use A, B {
                    B::smallTalk insteadof A;
                    A::bigTalk insteadof B;   
                    B::bigTalk as Talk;       // if two methods have same name inside same class change the calling class name by using (as) keyword
                }                             // Now B::bigTalk will be called by name Talk.
            }
            $new_obj =new Talker();
            $new_obj->bigTalk(); 
            echo "<br>";
            $new_obj->smallTalk();
            echo "<br>";
            $new_obj2 =new Aliased_Talker();
            $new_obj2->Talk(); 
        ?>


        <!-- Use of Nested traits OR traits inside traits -->
        <h3>Use of Nested Traits OR traits composed of traits</h3>
        <?php
          trait Hello{
            public function sayHello(){
              echo 'This is example of ';
            }
          }

          trait world{
            public function sayWorld(){
              echo "traits inside another trait";
            }
          }

          trait combine{
            use Hello,World;
          }

           class Use_Me{
            use combine;
           }

           $new_obj= new Use_Me();
           $new_obj->sayHello();
           $new_obj->sayWorld();
        ?>

        <!--Static Method in PHP-->
        <h3>Static Method in PHP</h3>
        <?php
          class static_example{
            public static function print_msg(){
              echo "Hello this is static method in php which is called by class_name::method_name";
            }

            public function display_static_method(){}
          }
          static_example::print_msg();                // we can call the satic method without creating object/instance of a class\
                                                      // you can use same syntax for calling static method inside another class 
        ?>

        <!-- static method inside another method of same class -->
        <h4>Static Method in PHP calling method inside another method in same class</h4>
        <?php
          class static_example1{
            public static function print_msg(){
              echo "Hello this is static method inside another method of same class to call use (self::method_name)";
            }
            public function __construct(){
              self::print_msg();                // To call atatic method inside another method of same class use (self::method_name)
            }
          }
          new static_example1();
        ?>

        <!-- Calling static method inside child class from parent class -->
        <h4>Static Method in PHP calling method inside child class</h4>
        <?php
          class parent_class{
            public static function print_msg(){
              echo "we are calling static method inside child class from parentt class using (parent::method_name)";
            }
          }

          class child_class extends parent_class{
            public function __construct(){
              parent::print_msg();
            }
          }
          new child_class();
        ?>


        <!-- Static Property in php is same as static method -->
        <h3>Static Property in php</h3>
        <?php
          class static_property{
            public static $pi_val = 3.14;              // assigning static property
            public function pi_val(){
              echo "This is called by (self::static_val) from inside its own class == ". self::$pi_val;
            }
          }

          class child_property extends static_property{
            public function __construct(){
              echo "This is called by (parent::static_val) from inside child class == ". parent::$pi_val;
            } 
          }

          echo "This is called by (class_name::static_property) from outside class == ".static_property::$pi_val;
          echo "<br>";

          $static_property= new static_property();
          $static_property->pi_val();
          echo "<br>";

          new child_property();
        ?>


        <!-- PHP Namespace-->
        <h3> Use of Namespace in php</h3>    <!-- Allow for better organization by grouping classes that work together to perform a task
                                                  They allow the same name to be used for more than one class -->
        <?php
          namespace html;
          class Table {
            public $title = "";
            public $numRows = 0;
            public function message() {
              echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
            }
          }
          $table = new Table();
          $table->title = "My table";
          $table->numRows = 5;

          $table->message();
        ?>

    </body>
</html>