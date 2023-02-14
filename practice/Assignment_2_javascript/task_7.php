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
            $new_arr = explode(" ",$str);
     
            // if($input1 == 1){
            //     asort($arr);
                
            // }
            // else{
            //     rsort($arr);
            // }

            function sort($new_arr,$val,$type){
                if($type==1){
                    asort($val);
                    if($new_arr==$val){
                        echo "TRUE";
                    }
                    else{
                        echo "FALSE";
                    }
                }
                else{
                    rsort($val);
                    if($new_arr==$val){
                        echo "TRUE";
                    }
                    else{
                        echo "FALSE";
                    }
                }
            }

            sort($new_arr,$arr,$input1);
            // if($input1 == 1 && $arr==$new_arr){
            //     echo "TRUE";
            // }
            // else{
            //     echo "FALSE";
            // }

            // if($input1 == 2 && $arr==$new_arr){
            //     echo "TRUE";
            // }
            // else{
            //     echo "FALSE";
            // }

        }
    ?>
</body>
    
</html>