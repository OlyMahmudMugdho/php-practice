<?php

    echo $_GET["name"] . "<br>";
    echo $_SERVER["PHP_SELF"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
        <input type="text" name="name" id="name">
        <button type="submit">Send</button>
    </form>
</body>
</html>