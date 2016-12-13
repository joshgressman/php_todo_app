<?php
require("new_config.php");

$link = $connection;

$newTask =  $_POST['new_task'];
$date = $_POST['due_date'];
$comp = 0;

 $sql = "INSERT INTO todo (task, date_due, completed)
         VALUES ('$newTask', '$date', '$comp')";
      if(mysqli_query($link, $sql)){
        header("Location: http://localhost:8888/todo_php/index.php"); /* Redirect browser */
        echo "Records added successfully";
        exit;
      } else {
        echo "ERROR: Could not able to execute" ;
      }
mysqli_close($link);



 ?>
