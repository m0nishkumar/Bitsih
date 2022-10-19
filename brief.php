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
    <title>BIT'S HACK'22</title>
    <link rel="icon" type="image/x-icon" href="/assets/icon.png">
</head>
<style>
    @media screen and (min-width: 640px) {
        #mouse-scroll {
            display: none;
        }

        .circle {
            display: none;
        }
    }

    @media screen and (max-width: 640px) {
        .prob-home h1 {
            margin-bottom: 50vh;
        }
    }
</style>

<body>
    <div class="node" id="node"></div>
    <div class="cursor" id="cursor"></div>
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
    <section class="prob-home" id="home">
        <h1>PROBLEM STATEMENT<span>'</span>S</h1>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div id="mouse-scroll">
            <div class="mouse" id="about">
                <div class="mouse-in"></div>
            </div>
            <div>
                <span class="down-arrow-1"></span>
                <span class="down-arrow-2"></span>
                <span class="down-arrow-3"></span>
            </div>
        </div>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="contentBox-glass">
                    <h4>Problem Code: <?php echo $row['id'] ?></h4>
                    <h4 style="margin-bottom:10px; font-size:16px;">Faculty Incharge Name: <?php echo $row['faculty'] ?></h4>
                    <h4 style="margin-bottom:10px; font-size:16px;">Faculty Incharge Mail: <?php echo $row['faculty_mail'] ?></h4>
                    <h3 style="margin-bottom: 10px;"><?php echo $row['title'] ?></h3>
                    <h3 style="font-size:18px;margin-bottom:10px;margin-top:0px;text-align: left;">Objective</h3>
                    <p style="text-align: left;"><?php echo $row['brief'] ?></p>
                    <h3 style="font-size:18px; margin-bottom:10px;margin-top:20px;text-align: left;">Solution Expected</h3>
                    <p style="text-align: left;"><?php
                                                    $ip = $row['solution'];
                                                    $iparr = explode(".", $ip);
                                                    foreach ($iparr as $iparr) {
                                                        if ($iparr == '') {
                                                            break;
                                                        } else { ?>
                                <i class="fa fa-dot-circle-o" style="font-size:15px"></i>
                        <?php
                                                            echo $iparr;
                                                            echo '.';
                                                            echo '<br>';
                                                        }
                                                    }

                        ?>
                    </p>
                    <div class="title-btn-2 ">
                        <form action="registeration.php" method="POST">
                            <input type="hidden" name='title_name' value='<?php echo $row['id']; ?>'>
                            <button><span>Register Now!</span></button>
                        </form>
                        <a><span><?php echo $row['count'] ?> / 15 Registered</span></a>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </section>


    <footer style="margin-top:5vh;">
        <div id="footer" class="footer-content">
            <h3>BIT'S HACK'22</h3>
            <p style="width: 50vw;">
                <bold style="font-weight: 600;">Hackathon Coordinators:<br></bold> Dr.E.L.Pradeesh/Dr.P.Purusothaman<br>
                <bold style="font-weight: 600;">Email: </bold>pradeeshel@bitsathy.ac.in/purusothaman@bitsathy.ac.in<br>
                <bold style="font-weight: 600;">Phone: <br></bold> +91 9944820144 / +91 9952013214
            </p>
            <ul class="socials">
                <li>
                    <h5 style="font-family: 'Poppins', sans-serif; font-weight: 800;">For Any Technical Queries email to bitshack2022@bitsathy.ac.in</h5>

                </li>

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