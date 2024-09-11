<?php
    $submitted = isset($_GET["name"]);

    if ($submitted) {
        echo htmlspecialchars($_GET["name"]) . "<br>";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <input type="text" name="name" id="name"> <br>
        <button type="submit">Send Data</button>
    </form>
</body>
</html>