<?php
require("new_config.php");

$link = $connection;

$newTask =  $_POST['new_task'];
$date = $_POST['due_date'];
$comp = 0;

 $sql = "INSERT INTO todo (task, dat_due, completed)
         VALUES ('$newTask', '$date', '$comp')";
      if(mysqli_query($link, $sql)){
        echo "Records added successfully";
      } else {
        echo "ERROR: Could not able to execute" ;
      }
mysqli_close($link);
 ?>
