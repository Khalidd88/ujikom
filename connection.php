<?php
  $username = "root";
  $password = "";
  $database = "ujikom";
  $host = "localhost";
  $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
 
 
?>