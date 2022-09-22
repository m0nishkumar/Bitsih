<?php 
include 'config.php';

$name = $_POST['name'];
$roll_no = $_POST['roll_no'];
$email = $_POST['email'];
$lab_name = $_POST['lab_name'];
$lab_id = $_POST['lab_id'];
$phone_number = $_POST['phone_number'];

if (isset($_POST['stud_insert']) ){
    $sql = "INSERT INTO student_details (name,roll_no,email,lab_name,lab_id,phone_number) VALUES ('$name', '$roll_no', '$email', '$lab_name', '$lab_id', '$phone_number')";
    $result = mysqli_query($link, $sql);
}
header('location: profile.php');
