<?php
 if (isset($_COOKIE["name"])) {
    $name = $_COOKIE['name'];
    echo "welcome $name";
 } else {
    echo "Welcome guest";
 }
?>