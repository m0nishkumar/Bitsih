<?php  
$host = '10.30.10.28:3306';  
$user = 'hack';  
$pass = 'some_pass';  
$dbname = 'hack';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$sql = 'INSERT INTO login_test(username,password) VALUES ("sdc", "sdc")';  
if(mysqli_query($conn, $sql)){  
 echo "Record inserted successfully";  
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?>  
