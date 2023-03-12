<?php
include('connection.php');

$result = $mysqli->query("SELECT users.id,users.username,employees.ssn,employees.position FROM users join employees ON users.id = employees.id ");

$data =[];


if ($result->num_rows > 0) {
    // iterate over rows and add to data array
    while($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
  }

  echo json_encode($data);
?>