<?php
//************DATABASE CONNECTION*******//
//Connection to MAMP mySQL todo DB
define('DB_HOST', 'localhost:8889');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'todo');

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if (!$connection) {
  die("Database Connection Failed: " . mysql_error());
}


 ?>
