<?php
require_once("new_config.php");


$sql = "SELECT * FROM todo";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    // mysqli_result::fetch_assoc -- mysqli_fetch_assoc — Fetch a result row as an associative array
    while($row = $result->fetch_assoc()) {
        echo "<h3>Task:" . " " . $row["task"]. " " . $row["date_due"]. " " . "</h3>";
    }
} else {
    echo "0 results";
}





 ?>
