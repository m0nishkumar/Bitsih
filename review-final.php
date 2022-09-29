<?php
session_start();
#error_reporting(0);

// Check if the user is already logged in, if yes then redirect him to welcome page
if (!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true) {
    header("location: admin_login.php");
    exit;
}
include 'config.php';

$name = $_POST['team'];


if (isset($_POST['accept'])) {
    $sql = "UPDATE final_participants SET status = 'Accepted' WHERE team = '$name'";
    echo $sql;
    $result = mysqli_query($link, $sql);
    $sqll = "UPDATE lab_count set final_count=final_count+1 WHERE team='$name'";
    $resultt = mysqli_query($link, $sqll);
} else {
    $sql = "UPDATE final_participants SET status = 'Rejected' WHERE team = '$name'";
    $result = mysqli_query($link, $sql);
}

header("location: admin-select.php");
