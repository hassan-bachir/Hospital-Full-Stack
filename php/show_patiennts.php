<?php
include('connection.php');

$query = $mysqli->prepare("SELECT * FROM patients");

$data =[];