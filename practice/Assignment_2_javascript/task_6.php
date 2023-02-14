<html>
    <head>
        <script src="jquery-3.6.3.js"></script>
    </head>

<form name="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <label for="">Enter string while using space after each character : </label>
  <input type="text" name="string" id="input"><br> <br>
  <label for="">enter 1 for asc and 2 for des</label>
  <input type="number" name="number" id="input1"><br>
  <input type ="submit" value ="submit" id="submit">
</form>

<body>
    <?php
        if(isset($_POST['string'])) {        
            $input1 =$_POST['number'];
            $str =$_POST['string'];
            $arr =explode(" ",$str);
     
            if($input1 == 1){
                asort($arr);
                print_r($arr);
            }
            else
            {
                rsort($arr);
                print_r($arr);
            }
        }
    ?>
</body>
    
</html>