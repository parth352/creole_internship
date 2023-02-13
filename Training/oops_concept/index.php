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
    </body>
</html>