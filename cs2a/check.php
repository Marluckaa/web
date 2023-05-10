<?php
include 'config.php';
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}
if(isset($_POST['garah'])){
    session_destroy();
    header('Location: index.php');
}

?>