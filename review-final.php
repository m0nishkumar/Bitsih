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
$id = $_POST['id'];



if (isset($_POST['accept'])) {
    $sql = "UPDATE final_participants SET status = 'Accepted' WHERE team = '$name' and problem = '$id'";
    $result = mysqli_query($link, $sql);
    $sql = "SELECT email FROM team Where team_id = '$name'";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $email = $row['email'];
        $sel = "SELECT lab_name FROM student_details WHERE email = '$email'";
        $resulttt = mysqli_query($link, $sel);
        $row = mysqli_fetch_assoc($resulttt);
        $lab_name = $row['lab_name'];
        $sqll = "UPDATE lab_count SET final_count=final_count+1 WHERE lab_name='$lab_name'";
        $resultt = mysqli_query($link, $sqll);
    }
    $sql = "SELECT * FROM team";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['team_id'] == $name) {
            $eemail  = $row['email'];
            $command = escapeshellcmd("python mail.py $eemail $id");
            echo $command;
            echo '<br>';
            $output = shell_exec($command);
        }
    }
} else {
    $sql = "UPDATE final_participants SET status = 'Rejected' WHERE team = '$name'";
    $result = mysqli_query($link, $sql);
}

header("location: admin-select.php");
