<form name="form" action="" method="post">
    <label for="">Enter a string : </label>
  <input type="text" name="input" id="subject"/>
</form>


<?php

$str_len = strlen($_POST['input']);
echo "1.  Finding Substring from string range between 2 & 4  := ".substr($_POST['input'],2,4),"<br><br>";

echo "2. Trim function in substring removing whitespace := ".trim($_POST['input']),"<br><br>";

echo "3. ltrim() removes whitespace from left side  := ".ltrim($_POST['input']),"<br><br>";

echo "4. rtrim() removes whitespace from right side  :=".rtrim($_POST['input']),"<br><br>";

//echo "rtrim() removes whitespace from right side  :=".rtrim($_POST['input'])."<br><br>";

echo "5. strtoupper() converts string to upper case := ".strtoupper($_POST['input']),"<br>><br>";

echo "6. str_replace() replace the string := ".str_replace("patel","parth",$_POST['input']),"<br><br>";

echo "7. strcmp() compare two strings  :=".strcmp("parth patel",$_POST['input']),"<br><br>";

echo "8. M5 message digest encrypts the string := ".md5($_POST['input']),"<br><br>";

// print_r("explode() converts string to array word by word  :=", explode("  ", $_POST['input'])); // 1st srgument is delimeter from which the strings are converted to array
// echo "<br><br>";
echo "9. Sha1 hash function it also encrypt string := ",sha1($_POST['input']),"<br><br>";

echo "10. soundex() calculates the soundex key of a string.  := ".soundex($_POST['input'])."<br><br>";

echo "11. str_repeat() repeat the string multiple time as described := ",str_repeat($_POST['input'],5),"<br><br>";

echo "12. str_pad() it paddsd the string := ".str_pad($_POST['input'],8,"good")."<br><br>";

echo "13. Rot13() encrypt the string : ".str_rot13($_POST['input'])."<br><br>";

echo "14. str_shuffle() mix all the character in the string := ".str_shuffle($_POST['input'])."<br><br>";

echo "15. str_word_count() it count's the word in the string := ".str_word_count($_POST['input'])."<br><br>";

echo "16. ucfirst() returns the first character to uppercase := ".ucfirst($_POST['input'])."<br><br>";

echo "17. lcfirst() returns the first character to lower case := ".lcfirst($_POST['input'])."<br><br>";

echo "18. ucwords() returns first character of each words to upper case in string:== ".ucwords($_POST['input'])."<br><br>";

echo "19. addslash() add slash after character p:== ".addcslashes($_POST['input'],"p")."<br><br>";

echo "20. bin2hex() converts sring to hexa decimal:== ".bin2hex($_POST['input'])."<br><br>";

echo "21. wordwrap() after some specific length new string will be generated:== ".wordwrap($_POST['input'],5,"<br>")."<br><br>";

?>

<!-- str_split function split sting to arrays -->
<?php
echo "STR_SPLIT function   :==";
print_r(str_split("STR_SPLIT function"));
echo "<br>";
?>


<!-- number_format function -->
<?php
echo "number_format function","<br>";
echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,",","."); // , for lakhs & . is for thousands
?>

<!-- parse_string function returns query form to string -->
<?php 
// parse_str("name=Parth&age=43");
// echo $name."<br>";
// echo $age;
?>
