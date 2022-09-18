<?php 

session_start(); 

include "conn.php";

if (isset($_POST['name']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['name']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: bitsih.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: bitsih.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);


            if ($row['username'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['name'] = $row['name'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: indexx.php");

                exit();

            }else{

                header("Location: bitsih.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: bitsih.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: bitsih.php");

    exit();

}