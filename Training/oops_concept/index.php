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
        ?>
        

        <!-- constant method -->
        <h3> Use of const method</h3>
        <?php
            class goodmorning{
                const MESSAGE = "Have a Nice Day";
                
                public function good(){
                    echo self::MESSAGE;      // we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name
                }
            }
            $goodmorning = new goodmorning();
            $goodmorning->good();
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


        <!-- Interface method  -->
        <h3> use of interface method</h3>
        <?php
            // Interface definition
            interface Animal {
                public function makeSound();
            }

            // Class definitions
            class Cat implements Animal {
                public function makeSound() {
                    echo " Meow ";
                }
                public function makenoise(){
                    echo "This is cat noise";
                }
            }
            class Dog implements Animal {
                public function makeSound() {
                    echo " Bark ";
                }
            }
            class Mouse implements Animal {
                public function makeSound() {
                    echo " Squeak ";
                }
            }
            // Create a list of animals
            $cat = new Cat();
            $dog = new Dog();
            $mouse = new Mouse();
            $animals = array($cat, $dog, $mouse);

            // Tell the animals to make a sound
            foreach($animals as $animal) {
              $animal->makeSound();
              echo "<br>";
            }
            $cat->makenoise();
        ?>

        <!-- Traits method in php -->
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
                   echo "OOP reduces code duplication!";
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


        
    </body>
</html>