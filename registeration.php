<?php
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
include 'config.php';
$id = $_POST['title_id'];
error_reporting(0);
?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Saira:wght@600&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
    </style>
    <link rel="stylesheet" href="glassmorphism.css">
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./bubble.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <div>
        <nav>
            <div class="logo">
                <img src="./assets/logo.png" alt="Logo Image">
            </div>
            <div class="hamburger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-links">
                <li><a class="nodeHover" href="main.php">Home</a></li>
                <li><a class="nodeHover" href="main.php#about">About</a></li>
                <li><a class="nodeHover" href="main.php#guidelines">Guidelines</a></li>
                <li><a class="active nodeHover" href="prob-state.php">Problem-Statement</a></li>
                <li><a class="nodeHover" href="#footer">Contact Us</a></li>
                <li><a class="nodeHover" href="profile.php">Profile</a></li>
                <li><a class="btn login-button nodeHover" href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>

    <center>
        <div class="nav_margin">
            <div class="box">
                <span style="font-family: 'Saira';font-size:30px;">
                    <div class="title">Registration Form</div>
                </span>
                <form action="register.php" method="POST">
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Team Name..." name="name">
                    <br>
                    <i class="fa fa-comments"></i>
                    <input type="text" placeholder="Email..." name="email">
                    <br>
                    <input type="hidden" value=<?php echo $id; ?> name="problem">
                    <i style="font-size:15px" class="fa">&#xf044;</i>
                    <input type="text" placeholder="link" name="link">
                    <div class="hover">
                        <button>
                            <div class="text" style="color:white;">Register</div>
                        </button>
                        <div class="text1">now!</div>
                    </div>
                </form>
            </div>
        </div>
    </center>
    <script src="./bubble.js"></script>
</body>

<footer>
    <div id="footer" class="footer-content">
        <h3>BIT INTRACOLLEGE HACKATHON'22</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
        <ul class="socials">
            <li></li>

        </ul>
        <div class="footer-menu">
            <ul class="f-menu">
                <li><a class="nodeHover" href="main.php#home">Home</a></li>
                <li><a class="nodeHover" href="main.php#about">About</a></li>
                <li><a class="nodeHover" href="main.php#guidelines">Guidelines</a></li>
                <li><a class="nodeHover" href="">Support</a></li>
                <li><a class="nodeHover" href="prob-state.php">Problem-Statement</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Created with ❤ by <a class="nodeHover" href="#">Kavinkumar B</a> & <a class="nodeHover" href="#">Monish kumar B</a> </p>
    </div>

</footer>

</html>