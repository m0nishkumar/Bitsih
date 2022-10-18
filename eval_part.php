<?php
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (!isset($_SESSION["eval_loggedin"]) && $_SESSION["eval_loggedin"] !== true) {
    header("location: evaluators_login.php");
    exit;
}
include 'config.php';
error_reporting(0);

$problem = $_POST["prob_id"];
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

    <title>BIT'S HACK'22 | EVALUATE</title>
</head>
<style type="text/css">
    .responsive-table .col-1 {
        flex-basis: 25%;
    }

    .responsive-table .col-2 {
        flex-basis: 25%;
    }

    .responsive-table .col-3 {
        flex-basis: 25%;
    }

    .responsive-table .col-4 {
        flex-basis: 25%;
    }

    input {
        width: 2vw;
        height: 3vh;
        border: solid 1px #ccc;
        border-radius: 3px;
    }
</style>

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
            <li><a class="active nodeHover" href="evaluators.php">Dashboard</a></li>
            <li><a class="nodeHover" href="evaluators.php">Evaluate</a></li>
            <li><a class="btn login-button nodeHover" href="admin_logout.php">Logout</a></li>
        </ul>
    </nav>
    <section class="prob-home" id="home">
        <h1>EVALUATE PARTICIPANT<span>'</span>S</h1>
        <?php
        $sql = "SELECT * FROM problems WHERE id = $problem";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result); ?>
        <h3 style="text-align: center; font-family:'Poppins'; font-weight:600; margin-bottom:5vh;"><?php echo $row['title'] ?></h3>
        <ul style="width: 80vw;" class="responsive-table">
            <li class="table-header">
                <div class="col col-1">Team</div>
                <div class="col col-2">Problem Code</div>
                <div class="col col-3">Abstract Link</div>
                <div class="col col-4"></div>
            </li>
        </ul>
        <?php
        $sql = "SELECT * FROM final_participants WHERE problem = $problem";
        $result = mysqli_query($link, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <ul style="width: 80vw;" class="responsive-table">
                    <li class="table-row">
                        <div class="col col-1" data-label="Team: "><?php echo $row['team'] ?></div>
                        <div class="col col-2" data-label="Problem Code: "><?php echo $row['problem'] ?></div>
                        <div class="col col-3" data-label="Abstract Link: "><a href="<?php echo $row['link'] ?>" target="_blank" rel="noreferrer noopener">Click Here! </a></div>
                        <div class="col col-4" data-label="">
                            <form action="eval_brief.php" method="POST" class="form">
                                <input type="hidden" name='team' value='<?php echo $row['team']; ?>'>
                                <input type="hidden" name='prob_id' value='<?php echo $row['problem']; ?>'>
                                <button class="btn login-button nodeHover" href="brief.php">Go</button>
                            </form>
                        </div>
                    </li>
                </ul>
            <?php  }
        } else {
            ?>
            <center>
                <h3 class="no-record"><?php echo "No records found."; ?></h3>
            </center>
        <?php
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
                <li></li>

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