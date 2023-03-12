<?php
include('connection.php');

$result = $mysqli->query("SELECT users.id,users.username,  FROM patients");

$data =[];


if ($result->num_rows > 0) {
    // iterate over rows and add to data array
    while($row = $result->fetch_assoc()) {
      $data[] = $row;
    }
  }

  echo json_encode($data);
?>
<!-- 
SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
FROM Orders
INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID; -->