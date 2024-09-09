<?php

$message = "Hello World";
$info = "it's me";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Web Page</title>
</head>
<body>
    <h1>message <?php echo $message ?></h1>
    <h2>
        <?= $info ?>
    </h2>
</body>
</html>