<?php
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if ($_SESSION["username"] != "admin") {
    header("location: admin_login.php");
    exit;
}

include 'config.php';
$sql = "SELECT * FROM problems";
$result = mysqli_query($link, $sql);
?>

<style>
    @media screen and (min-width: 640px) {
        #mouse-scroll {
            display: none;
        }

        .circle {
            display: none;
        }
    }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="icon" type="image/x-icon" href="/assets/icon.png">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <title>BIT'S HACK'22</title>
</head>

<body>
    <div class="node" id="node"></div>
    <div class="cursor" id="cursor"></div>
    <nav>
        <div class="logo">
            <img src="./assets/logo.png" alt="Logo Image">
            <h3>Bannari Amman Institute of Technology</h3>
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a class="active nodeHover" href="admin.php">Problem-Statement</a></li>
            <li><a class="nodeHover" href="admin-final-part.php">Final-Participants</a></li>
            <li><a class="nodeHover" href="lab-students.php">Lab-wise Participants</a></li>
            <li><a class="btn login-button nodeHover" href="admin_logout.php">Logout</a></li>
        </ul>
    </nav>
    <section class="prob-home" id="home">
        <h1>REVIEW PARTICIPANT<span>'</span>S</h1>
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
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="container-01">
                    <div class="neumorphic-card">
                        <div class="contentBox">
                            <h4>Problem Code: <?php echo $row['id'] ?></h4>
                            <h3><?php echo $row['title'] ?></h3>
                            <p></p>
                            <div class="title-btn">
                                <form action="admin-select.php" method="POST" class="form">
                                    <input type="hidden" name='title_id' value='<?php echo $row['id']; ?>'>
                                    <button><span>Review Participants!</span></button>
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
                    <li><a class="nodeHover" href="prob-state.php">Problem-Statement</a></li>
                    <li><a class="nodeHover" href="final-part.php">Final-Participants</a></li>
                    <li><a class="nodeHover" href="lab-students.php">Lab-Wise-Participants</a></li>
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