<?php
$host_name = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "records-rex";

$conn = new mysqli($host_name, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>