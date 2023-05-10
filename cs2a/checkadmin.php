<?php
include 'config.php';
$pmission = $_SESSION['permission'];
if($pmission!='admin'){
    header('Location: main.php');
}
?>