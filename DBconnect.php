<?php
$conn = mysqli_connect('localhost','root','root','appointment');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>