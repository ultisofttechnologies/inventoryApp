<?php

// Database Connection
require('constants.php');

$con = mysqli_connect("DB_SERVER","DB_USER","DB_PASS");

if (!$con) {
  die("Database connection failed". mysqli_error());
}


// Database selection
$dbSelect = mysqli_select_db($con,"DB_NAME");

if (!$dbSelect) {
  die("Database selection failed"). mysqli_error());
}
 ?>
