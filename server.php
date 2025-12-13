<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name"><input type="submit">
        <br><br>
    </form>
</body>

</html><?php
        $name = $_GET["name"];
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            echo "Hello, " .  $name . "<br>";
        }
        foreach ($_SERVER as $key => $value) {
            echo "{$key} = {$value} <br>";
        }
