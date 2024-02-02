<?php

$servername = "localhost";
$db_user_name = "root";
$db_password = '';
$dbname = "weehoportal";

// Create connection
$conn = new mysqli($servername, $db_user_name, $db_password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}