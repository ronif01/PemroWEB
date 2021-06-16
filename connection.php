<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_viewer";

// create connection
$kon = mysqli_connect($servername, $username, $password, $dbname);

if ($kon) {
  # code...
  // echo "Connecton Open"; 
}
else
    echo "Connection failed";
  ?> 