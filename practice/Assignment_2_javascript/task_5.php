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
    $arr =['a','e','i','o','u'];        
    $input1 =$_POST['number']-1;
    $str =$_POST['string'];
    $new_str = str_split($str);
   
        if(in_array($new_str[$input1],$arr)){
            echo "vowel";
        }
        else{
            echo "consonent";
        }
    }  
    ?>
</body>
</html>