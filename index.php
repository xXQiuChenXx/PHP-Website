<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="index.php" method="post">
        <input type="text" name="name" id="name">
        <input type="submit" value="Submit">
    </form>
</body>

</html>

<?php
    if(isset($_POST['name'])){
        $name = $_POST['name'];
        echo "Hello $name world";
    }
?>