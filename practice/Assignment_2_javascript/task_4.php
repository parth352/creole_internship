<html>
    <head>
        <script src="jquery-3.6.3.js"></script>
    </head>

<form name="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <label for="">Enter string</label>
  <input type="text" name="string" id="string"><br> 
  <label for="">Enter number of repeted character to find</label>
  <input type="number" name="number" id="number"><br>
  <input type ="submit" value ="submit" id="submit">
</form>

<body>
  <?php
    if(isset($_POST['string']))
    {  
      $str =$_REQUEST['string'];
      $num =$_POST['number'];

    function check_repeat($str, $num) {
      $total_char =[];
      $repeat_chars = [];
      for ($index = 0; $index < strlen($str); $index++) {

        $char = $str[$index];

        if (isset($total_char[$char])) {
          $total_char[$char]++;
        } else {
          $total_char[$char] = 1;
        }
      }
      foreach ($total_char as $char => $total_char) {
        if ($total_char >= $num) {
          array_push($repeat_chars, $char);
        }
      }
      print_r($repeat_chars);
    }

    check_repeat($str, $num); 
  }
  ?>
</body>
</html>




