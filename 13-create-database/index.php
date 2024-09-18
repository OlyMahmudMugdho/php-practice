<?php
$host = "localhost";
$username = "root";
$password = "";

error_reporting(E_ALL);
ini_set("display_errors", 1);

$conn = new mysqli($host, $username, $password);

if (!$conn) {
    echo "database connection failed";
}

/* 

this section produces error

$dbname = htmlspecialchars($_POST["dbname"]); 

*/

$dbname = filter_input(INPUT_POST, "dbname", FILTER_SANITIZE_SPECIAL_CHARS);

$message = null;

if ($dbname !== null) {
    $sql = "CREATE DATABASE $dbname";

    if (($conn->query($sql)) === TRUE) {
        $message = "$dbname database created successfully";
    } else {
        $message = "failed to create database";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Creation</title>
</head>

<body>
    <form method="POST">
        <label for="dbname">Database Name</label> <br>
        <input type="text" name="dbname" id="dbname">
        <input type="submit" value="Create Database">
    </form>
    <div>
        <?php
        if ($message === null) {
            null;
        } else {
            echo $message;
        }
        ?>
    </div>
</body>

</html>