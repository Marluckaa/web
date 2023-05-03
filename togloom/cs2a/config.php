<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "cs2a";

$con = mysqli_connect($host, $user, $pass, $dbname);

if(!$con){
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected!";

if(isset($_POST['reg_submit'])){
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    $sql = "INSERT INTO users(username, password) 
             VALUES('$username', '$password')";
    if(mysqli_query($con, $sql)){
        echo "new user successfully added!";
    }
    else{
        echo "error". $sql . " " . mysqli_error($con);
    }
}
if(isset($_POST['but_submit'])){
    $uname = mysqli_real_escape_string($con, $_POST['txt_name']);
    $password = mysqli_real_escape_string($con, $_POST['txt_pass']);
    if($uname != "" && $password != ""){
        $sql_query = "SELECT count(*) AS u_id FROM users
        WHERE username='".$uname." 'AND password='".$password." ' ";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['u_id'];
        if($count > 0 ){
            header("location: main.php");
        }
        else{
            echo "invalid username and password ";
        }

    }
}


?>