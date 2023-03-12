<?php
include('connection.php');

$result = $mysqli->query("SELECT * FROM patients");

$data =[];


if ($result->num_rows > 0) {
    // iterate over rows and add to data array
    while($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
  }

  echo json_encode($data);
?>