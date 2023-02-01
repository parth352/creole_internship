<html>
    <body>
        <h1>Use of Echo</h1>  
        <!-- echo has no return value & echo can take multiple parameters-->
        <?php
            $txt1 = "Hello";
            $txt2 = "PHP";
            echo "<h2>echo has no return value</h2>";
            echo "echo can take multiple parameters <br>";
            echo "echo is faster than print<br>";
            echo "This ", "string ", "was ", "made ", "with multiple parameters. <br>";
            echo $txt1. " " .$txt2;
        ?>


        <h1>Use of Print</h1>

        <?php
            print "<h2>This msg is displayed by print statement </h2>";
            print "print has return value <br>";
            print "print can only take 1 argument <br>";
            print "print is slower than echo <br>";
            print "Hello"." ".$txt2;
        ?>
    </body>
</html>