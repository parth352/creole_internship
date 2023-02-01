
<html>
    <body>

    <h1>1. checkdate()</h1>
    <!-- checks weather date is in valid format or not-->
<?php 
var_dump(checkdate(12,31,-400));  // return false
echo "<br>";
var_dump(checkdate(2,29,2003));
echo "<br>";
var_dump(checkdate(2,29,2004));
echo "<br>";
?>


<h1>2. date_add()</h1>
 <!-- adding extra (days or years or months) to some predefine date using date_add() -->

 <?php
$date=date_create("2023-01-29");  // this is date_create function helps you to create date
date_add($date,date_interval_create_from_date_string("1 year"));
echo date_format($date,"Y-m-d");   // date_formate function
?>


<h1>3. date_default_timezone_get()</h1>

<?php
echo date_default_timezone_get(); // returns the default time zone
echo "<br>";

date_default_timezone_set("Asia/Bangkok");
echo date_default_timezone_get();
?>

<h1>4. date_diff() </h1>
<!-- returns the difference between two dates -->
<?php
$date1=date_create("2023-03-15");
$date2=date_create("2023-12-12");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
?>

<h1>5. date_modify()</h1>
 <!-- update date by 15 days -->
<?php
$date=date_create("2023-05-01");
date_modify($date,"+15 days");
echo date_format($date,"Y-m-d");
?>

<h1>6. Parsing date from string format</h1>

<?php
print_r(date_parse_from_format("mmddyyyy","01292023"));
echo "<br>";
// print_r(date_parse("2013-05-01 12:30:45.5"));
?>

<h1>7. date_offset_set</h1> 
<!-- An offset is the number of hours or minutes a certain time zone is ahead of or behind GMT. -->
<?php
$winter=date_create("2023-12-31",timezone_open("Europe/Oslo"));
$summer=date_create("2023-06-30",timezone_open("Europe/Oslo"));

echo date_offset_get($winter) . " seconds.<br>";
echo date_offset_get($summer) . " seconds.";
?>

<h1>8. date_sun_info</h1>
<!-- returns info about sunset/sunrise for specified date and specified logitude/latitude -->
<?php
$sun_info=date_sun_info(strtotime("2023-01-01"),31.7667,35.2333);
foreach ($sun_info as $key=>$val)
  {
  echo "$key: " . date("H:i:s",$val) . "<br>";
  }
?>

<h1>9. date_isodate_set</h1>
<!-- set the ISO date -->
<?php
$date=date_create();
date_isodate_set($date,2023,2);
echo date_format($date,"Y-m-d");
?>

<h1>10. date_parse</h1>
<!-- returns detail information of date in form of array -->
<?php
print_r(date_parse("2023-01-01 12:30:45.5"));
?>

<h1>11. date_sub</h1>
<!-- subtract days/yeasr/month from calender as per given by user -->

<?php
$date=date_create("2023-01-15");
date_sub($date,date_interval_create_from_date_string("14 days"));
echo date_format($date,"Y-m-d");
?>


<h1>==>  Time function</h1>
<!-- Time function in php -->


<!-- date_time_set() -->
<h1>1. date_time_set()</h1>
<?php
$date=date_create("2023-01-29");
date_time_set($date,13,24,25);
echo date_format($date,"Y-m-d H:i:s");
?>


<!-- getdate() returns date and time of your current system  -->
<h1>2. Getdate() <h1>

<?php
print_r(getdate());
echo "<br><br>";
print_r(gettimeofday()); 
echo "<br> <br>";

?>

<!-- idate() -->
<?php
echo "Swatch Beat/Internet Time: ".idate("B") . "<br>";
echo "d - Day of the month: ",idate("d") . "<br>";
echo "h - Hour (12 hour format): ",idate("h") . "<br>";
echo "H - Hour (24 hour format): ",idate("H") . "<br>";
echo "i - Minutes: ",idate("i") . "<br>";
echo "I - returns 1 if DST (daylight saving time) is activated, 0 otherwise: ".idate("I") . "<br>";
echo "L - returns 1 for leap year, 0 otherwise: ".idate("L") . "<br>";
echo "m - Month number: ",idate("m") . "<br>";
echo "s - Seconds: ",idate("s") . "<br>";
echo "t - Days in current month: ",idate("t") . "<br>";
echo "U - Seconds since the Unix Epoch: ",idate("U") . "<br>";
echo "w - Day of the week (Sunday=0): ",idate("w") . "<br>";
echo "W - ISO-8601 week number of year (week starts on Monday): ",idate("W") . "<br>";
echo "y - Year (1 or 2 digits): ",idate("y") . "<br>";
echo "Y - Year (4 digits): ",idate("Y") . "<br>";
echo "z - Day of the year: ",idate("z") . "<br>";
echo "Z - Timezone offset in seconds: ",idate("Z") . "<br>";
?>

<!-- microtime() -->
<h1>3. microtime()</h1>

<?php
echo(microtime());
?>

<!-- strtotime() -->
<h1>4. strtotime</h1>

<?php
echo(strtotime("last Sunday"));
?>

<!-- time() -->
<h1>5. time()</h1>

<?php
$t=time();  // The time() function returns the current time in the number of seconds since the Unix Epoch
echo($t."<br>");
?>

<!-- version of timezone -->
<h1>6. version of timezone</h1>

<?php
echo timezone_version_get();
?>
</body>
</html>