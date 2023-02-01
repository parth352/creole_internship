
<form name="form" action="array_operators.php" method="post">
<h3>please enter only 2 values in array</h3>
    <label for="">Enter your array 1 seperated by commas : </label>
  <input type="text" name="str1" id="str1"> </br>
  <label for="">Enter your array 2 seperated by commas : </label>
  <input type="text" name="str2" id="str2"> 
</br>
</br>
  
  <select name="select" id="">
    <option value="" disabled selected>Option</option>
    <option value="union">union operators</option>
    <option value="equality">Equality operators</option>
    <option value="identity">Identity operators</option>
    <option value="inequality1">Inequality operators using (<>)</option>
    <option value="inequality">Inequality operators using (!=)</option>
    <option value="nonidentity">Non identity operators</option>
</select>

    <input type="submit" value="submit">
</form>