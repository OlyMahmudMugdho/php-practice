<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>">
        <label for="name">Name : </label> <br>
        <input type="text" name="name" id="name"> <br>
        <label for="age">Age : </label> <br>
        <input type="text" name="age" id="age"> <br>
        <button type="submit">Send Data</button>
    </form>
</body>
</html>



<?php
    $submitted = isset($_GET["name"]);

    if ($submitted) {
        echo htmlspecialchars($_GET["name"]) . "<br>";
        echo "filter_input() <br>";
        $age = filter_input(INPUT_GET, "age",FILTER_SANITIZE_SPECIAL_CHARS);
        echo $age . "<br>";
    }
?>