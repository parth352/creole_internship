<html>
    <head>
        <script src="jquery-3.6.3.js"></script>
    </head>

<form name="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <label for="">Enter string</label>
  <input type="text" name="string" id="string"><br> 
  <input type ="submit" value ="submit" id="submit">
</form>

<body>
  <?php
    if(isset($_POST['string']))
    {  
      $str =$_REQUEST['string'];    
      $count =strlen($str);
      $str = strtoLower($str);

     for($index = 0; $index < $count; $index++){

        if($index%2==0){
            echo strtoupper($str[$index]);
        }    
        else{
            echo ($str[$index]);
        }  
      }
    }
    ?>
</body>
</html>
