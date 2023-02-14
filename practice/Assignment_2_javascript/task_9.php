<html>
    <head>
        <script src="jquery-3.6.3.js"></script>
    </head>

<form name="form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <label for="">Enter string : </label>
  <input type="text" name="string" id="input"><br> <br>
  <label for="">Enter sub string minimum length should be 2: </label>
  <input type="text" name="string2" id="input2"><br> <br>
  <input type ="submit" value ="submit" id="submit">
</form>

<body>
    <?php
        if(isset($_POST['string'])) { 

            $str =$_POST['string'];
            $main_len =strlen($str);
            $sub_str =$_POST['string2'];
            $sub_str_len= strlen($sub_str);
            $count=0;

            $last_index =$sub_str_len-1;

            for($first_index=0; $first_index<$main_len; $first_index++)
            {
                $last_index++;
                $new_str =substr($str, $first_index, $last_index);
                    
                if($new_str==$sub_str){

                    $count++;
                }   
            }
            if($count>0){
                    echo "TRUE";
            }
            else{
                    echo "FALSE";
            }
        }            
    ?>

</body> 
</html>