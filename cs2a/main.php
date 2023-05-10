<?php

include 'check.php';
if(isset($_POST['garah'])){
    session_destroy();
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> this is not a main page </h1>
    <form action="" method="POST">
        <input type="submit" value="гарах" name="garah">
    </form>
    <?php
    $pmission = $_SESSION['permission'];
    echo $pmission;
    ?>
</body>
</html>