<html>
    <head>
        <script src="jquery-3.6.3.js"></script>
    </head>

<form name="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <label for="">Enter string while using space after each character : </label>
  <input type="text" name="string" id="input"><br> 
  <label for="">Enter number to check weather number is vowel or not</label>
  <input type="number" name="number" id="input1"><br>
  <input type ="submit" value ="submit" id="submit">
</form>

   <body>
    <?php

    if(isset($_POST['string']))
    {        
    $input1 =$_POST['number']-1;
    $str =$_POST['string'];
    $arr =explode(" ",$str);
    $count= count($arr);

        if($arr[$input1]=="a" || $arr[$input1]=="e" || $arr[$input1]=="i" || $arr[$input1]=="o" || $arr[$input1]=="u"){

            echo "vowel";
        }
        else{
            echo "consonent";
        }
      
    }  
    ?>
</body>
</html>