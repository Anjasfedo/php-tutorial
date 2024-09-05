<?php

// html form

// method
// $_GET $_POST

// if (isset($_GET['name'])) {
if (!empty($_GET['name'])) {
    echo 'Hello ' . $_GET['name'];
} else {
    echo 'Hello World';
}
// 
if (!empty($_POST['name'])) {
    echo 'Hello ' . $_POST['name'] . 'from POST';
} else {
    echo 'Hello World from POST';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="post">
        <input type="text" name="name" id="" placeholder="Enter your name">
        <input type="submit" value="Submit">
    </form>
</body>

</html>