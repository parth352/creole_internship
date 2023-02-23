<!DOCTYPE html>
<html>
  <head>
    <style>
      body{
        background-color:lightgray;>

      }
      textarea {
        resize: none;
      }

      * {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  color:red;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 
}

input[type=reset] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
      </style>
  </head>
<body>

<h2 style="color:red; text-align:center;">Buy Your Dream Car</h2>

<form action="action.php" method="post" target="_blank" autocomplete="on">
  <fieldset>
    <legend style="color:red;"> Car Buying Form</legend>

    <!-- Basic user information -->
  <label for="fname">First name :</label>
  <input type="text" id="fname" name="fname" value=""><br>

  <label for="lname">Last name :</label>
  <input type="text" id="lname" name="lname" value=""><br>

  <label for="email">Email :</label>
  <input type="text" id="email" name="email" value=""><br>

  <label for="age">AGE :</label>
  <input type="number" id="age" name="age" value=""><br>

  <label for="phone">Telephone :</label>
  <input type="tel" id="phone" name="phone"> <br>

  <!-- gender radio button -->
  <label>Gender : </label> </br>
  <input type="radio" id="gender" name="gender" value="male">
  <label for="male">MALE</label><br>
  <input type="radio" id="gender" name="gender" value="female">
  <label for="female">FEMALE</label><br><br>

  <!-- check box -->
  <label>Occupation : </label> </br>
  <input type="checkbox" id="business" name="business" value="business">
  <label for="business">Business</label><br>
  <input type="checkbox" id="employe" name="employe" value="employe">
  <label for="employe">Employe</label><br>
  <input type="checkbox" id="startup" name="startup" value="startup">
  <label for="startup">Start up</label><br>

  <!-- input Type range -->
  <!-- <label for="income">Your Income (Anualy):</label>
  <input type="range" id="income" name="income" min="120000" max="19000000">
   -->
  <!-- select element -->
  <label for="cars">Choose car brand:</label><br>
<select id="cars" name="cars" multiple><
  <option value="rolce_royce">Rolce Royce</option>
  <option value="tata">Tata</option>
  <option value="mercedies">Mercedies</option>
  <option value="audi">Audi</option>
</select><br>

<!-- text area element -->
<label for="address"> Enter your address</label><br>
<textarea name="address" id ="address" row="10" cols="30">

</textarea> 

<!-- input type month -->
<label for="d_month">Car Delivery Date:</label><br>
  <input type="month" id="d_month" name="d_month"> <br><br>
  <input type="submit" value="Submit" aligne="center">
  <input type="reset" aligne="center">
</fieldset>
</form>


</body>
</html>

