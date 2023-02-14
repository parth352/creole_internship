<html>
    <head>
        <script src="jquery-3.6.3.js"></script>
    </head>

<form name="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <label for="">Enter string : </label>
  <input type="text" name="string" id="input"><br> <br>
  <input type ="submit" value ="submit" id="submit">
</form>

<body>
    <?php
        if(isset($_POST['string'])) { 

            $str =$_POST['string'];
            
            function word($str)
            {
                $new_str= str_shuffle($str);
                echo "$new_str";
            }
            word($str);
        }
    ?>
</body> 
</html>