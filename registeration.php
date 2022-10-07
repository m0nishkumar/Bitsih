<?php
session_start();
include 'config.php';
error_reporting(0);
$title_id = $_POST['title_name'];
$username = $_SESSION['username'];
$sql = "SELECT * FROM team WHERE email IN('$username')";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$team =  $row['team_id'];

?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <link rel="stylesheet" href="./css/reg-css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/bubble.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>BIT'S HACK'22</title>

</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Saira:wght@600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

    button {
        background-color: #2d1574;
        color: aliceblue;
        font-family: 'poppins';
        font-weight: 900;
        border-radius: 15px;
        width: 100px;
        height: 55px;
        font-size: 15px;
        transition: 0.5s all, box-shadow 0.5s 1s;
    }
</style>

<body>
    <div>
        <nav>
            <div class="logo">
                <img src="./assets/logo.png" alt="Logo Image">
                <h3>Bannari Amman Institute of Technology</h3>
                <h4>BIT</h4>
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
                <form action="register_1.php" method="POST">
                    <input type="hidden" value="<?php echo $team ?>" name="name" required>
                    <input type="hidden" value="<?php echo $username ?>" name="email" required>
                    <br>
                    <input type="hidden" value=<?php echo $title_id; ?> name="problem" required>
                    <i style="font-size:15px" class="fa">&#xf044;</i>
                    <input type="text" placeholder="Abstract drive Link" name="link" required>
                    <div class="hover">
                        <button>
                            <div class="text" style="color:white;">Register</div>
                        </button>
                    </div>
                </form>
                <p style="color: red; padding-left:20px;padding-right:20px;padding-top:30px;">**Note: Abstract must be uploaded in drive and link should be shared here with the permissions.</p>

            </div>
        </div>
    </center>
    <script src="./bubble.js"></script>
</body>

<footer style="margin-top:5vh;">
    <div id="footer" class="footer-content">
        <h3>BIT'S HACK'22</h3>
        <p style="width: 50vw;">
            <bold style="font-weight: 600;">Hackathon Coordinators:<br></bold> Dr.E.L.Pradeesh/Dr.P.Purusothaman<br>
            <bold style="font-weight: 600;">Email: </bold>pradeeshel@bitsathy.ac.in/purusothaman@bitsathy.ac.in<br>
            <bold style="font-weight: 600;">Phone: <br></bold> +91 9944820144 / +91 9952013214
        </p>
        <ul class="socials">
            <li></li>

        </ul>
        <div class="footer-menu">
            <ul class="f-menu">
                <li><a class="nodeHover" href="main.php#home">Home</a></li>
                <li><a class="nodeHover" href="main.php#about">About</a></li>
                <li><a class="nodeHover" href="main.php#guidelines">Guidelines</a></li>
                <li><a class="nodeHover" href="prob-state.php">Problem-Statement</a></li>
                <li><a class="nodeHover" href="profile.php">Profile</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Created with ❤ by <a class="nodeHover" href="#">Kavinkumar B</a> & <a class="nodeHover" href="#">Monish kumar B</a> </p>

    </div>
</footer>

</html>