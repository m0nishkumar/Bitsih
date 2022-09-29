<?php
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
include 'config.php';
$id = $_POST['title_id'];
$sql = "SELECT * FROM problems WHERE id = '$id'";
$result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BIT | SIH</title>
</head>
<style>
    .glassmorphic-card {
        height: fit-content;
    }
</style>

<body>
    <div class="node" id="node"></div>
    <div class="cursor" id="cursor"></div>
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
    <section class="prob-home" id="home">
        <h1>PROBLEM STATEMENT<span>'</span>S</h1>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="container-01">
                    <div class="glassmorphic-card">
                        <div class="contentBox-glass">
                            <h4>Problem Code: <?php echo $row['id'] ?></h4>
                            <h3><?php echo $row['title'] ?></h3>
                            <p><?php echo $row['brief'] ?></p>
                            <div class="title-btn-2 ">
                                <form action="registeration.php" method="POST">
                                    <input type="hidden" name='title_name' value='<?php echo $row['id']; ?>'>
                                    <button><span>Register Now!</span></button>
                                </form>
                                <a><span><?php echo $row['count'] ?> / 15 Registered</span></a>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </section>


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
</body>
<!-- partial -->
<script src="./js/script.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.1/TweenMax.min.js'></script>
<script src='https://cdn.jsdelivr.net/gh/hmongouachon/NodeCursor/src/nodecursor-tween.js'></script>


</html>
<script type="text/javascript">
    var initCursor = new NodeCursor({
        cursor: true,
        node: true,
        cursor_velocity: 0,
        node_velocity: 0.75,
        native_cursor: 'none',
        element_to_hover: '.nodeHover',
        cursor_class_hover: 'disable',
        node_class_hover: 'expand',
        hide_mode: true,
        hide_timing: 2000,
    });
</script>