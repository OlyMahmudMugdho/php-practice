<?php
    function getName(){
        return filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    }

    if(isset($_POST["submit"])){
        if (!empty(getName())) {
            setcookie("name", getName(), time() + 86400,"/");
            header('Location: /php-practice/dashboard/');
        }
        else {
            echo "name can't be empty";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <input type="text" name="name" id="name"> <br>
        <button name="submit" type="submit">Save</button>
    </form>
</body>
</html>