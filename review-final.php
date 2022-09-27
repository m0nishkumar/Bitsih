<?php
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true) {
    header("location: admin_login.php");
    exit;
}
include 'config.php';

$name = $_POST['name'];
$roll_no = $_POST['roll_no'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$lab = $_POST['lab'];
$lab_id = $_POST['lab_id'];
$problem = $_POST['problem'];
$url = $_POST['link'];


if (isset($_POST['accept'])) {
    $sql = "INSERT INTO final_participants (name,roll_no,email,phonenumber,lab,lab_id,problem,link) VALUES ('$name','$roll_no','$email','$phonenumber','$lab','$lab_id','$problem','$url')";
    echo $sql;
    $result = mysqli_query($link, $sql);
    $sql1 = "DELETE FROM register WHERE problem = $problem";
    $result1 = mysqli_query($link, $sql1);
    $sqll = "UPDATE lab_count SET final_count = $final_count + 1 WHERE lab_name = $lab";
    $resultt = mysqli_query($link, $sqll);
}
if (isset($_POST['reject'])) {
    $sql = "DELETE FROM register WHERE problem = $problem";
    $result = mysqli_query($link, $sql);
}

header("location: admin-select.php"); ?>
