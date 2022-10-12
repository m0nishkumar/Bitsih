<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'hackathon';

$link = mysqli_connect($host, $user, $pass,$dbname);
if(!$link){
  die('Could not connect: '.mysqli_connect_error());
}
