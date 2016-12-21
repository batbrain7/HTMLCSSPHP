<?php

// $browser = get_browser(null,true);  //some problem here
// echo $browser['browser'];
$date = $_GET['date'];
$day =  $_GET['day'];
$year = $_GET['year'];


 ?>

<form action="browsernform.php" method="GET">
  Date : <br><input type="text" name="date"><br>
  Day : <br><input type="text" name="day"><br>
  Year : <br><input type="text" name="year"><br>
  <input type="submit" name="submit" value="Submit">
</form>
