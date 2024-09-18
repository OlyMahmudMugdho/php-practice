<?php
$server = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($server,$username,$password);

if ($conn) {
    echo "connected to database";
} else {
    echo "database connection failed";
}

?>