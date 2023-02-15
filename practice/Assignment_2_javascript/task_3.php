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
      $arr= [];
      $arr1=[];

      for($index = 0; $index < $count; $index++){

        if(in_array($str[$index], $arr)){
            array_push($arr1, $str[$index]);
        }
        else{ 
            $arr[0] = $str[$index]; 
        }
    }
    sort($arr1);
    print_r($arr1[0]);
    }
  ?>
</body>
</html>
