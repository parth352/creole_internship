<?php
    namespace MyProject {

    class Connection {
    public function __construct(){
        echo 'My Project class call';
        }
    }

    function connect() {
    echo 'My Project connect function.';
    }
    }

    namespace AnotherProject {

    class Connection {
    public function __construct(){
        echo 'Another Project class call';
        }
    }

    function connect() {
    echo 'Another Project connect function.';
    }

    }
?>

