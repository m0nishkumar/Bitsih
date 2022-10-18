<?php
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (!isset($_SESSION["eval_loggedin"]) && $_SESSION["eval_loggedin"] !== true) {
    header("location: evaluators_login.php");
    exit;
}
include 'config.php';
error_reporting(0);

$team = $_POST["team"];
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
        flex-basis: 5%;
    }

    .responsive-table .col-2 {
        flex-basis: 5%;
    }

    .responsive-table .col-3 {
        flex-basis: 7%;
    }

    .responsive-table .col-4 {
        flex-basis: 8%;
    }

    input {
        width: 2vw;
        height: 3vh;
        border: solid 1px #ccc;
        border-radius: 3px;
    }

    textarea {
        width: 20vw;
        height: 6.5vh;
        border: solid 1px #ccc;
        border-radius: 3px;
        font-size: 20px;
    }

    .eval_brief {
        width: fit-content;
        height: fit-content;
        border: solid 1px #ccc;
        border-radius: 5px;
        margin: auto;
        padding: 5vh;
        font-size: 20px;
        font-family: 'Poppins';
        margin-bottom: 5vh;
    }

    .eval_brief div {
        margin: 2vh;
    }

    h2 {
        font-size: 20px;
        font-family: 'Poppins';
        text-align: center;
        margin-bottom: 2vh;
    }

    input {
        font-style: "poppins";
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
        $sql = "SELECT * FROM final_participants WHERE problem = '$problem' AND team = '$team'";
        $result = mysqli_query($link, $sql);
        $row1 = mysqli_fetch_assoc($result); ?>
        <h2>Team: <?php echo $row1['team'] ?></h2>
        <h2>Problem Code: <?php echo $row1['problem'] ?></h2>
        <?php
        $sql = "SELECT * FROM evaluation WHERE prob_id = '$problem' AND team = '$team'";
        $result = mysqli_query($link, $sql);
        $row2 = mysqli_fetch_assoc($result);
        if ($row2['team'] != $team) {
            $sql = "SELECT * FROM final_participants WHERE problem = '$problem' AND team = '$team'";
            $result = mysqli_query($link, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {  ?>
                    <div class="eval_brief">
                        <div>Abstract Link: <a href="<?php echo $row['link'] ?>" target="_blank" rel="noreferrer noopener">Click Here! </a></div>
                        <form action="eval_final.php" method="POST" class="form">
                            <input type="hidden" name='team' value='<?php echo $row['team']; ?>'>
                            <input type="hidden" name='prob_id' value='<?php echo $row['problem']; ?>'>
                            <div>Front-End Score: <input name="front_end" type="number" min="0" max="10"> /10</div>
                            <div>Back-End Score: <input name="back_end" type="number" min="0" max="10"> /10</div>
                            <div>Database Connectivity: <input name="database" type="number" min="0" max="10"> /10</div>
                            <div>Usage of Advanced Technology: <input name="ad_tech" type="number" min="0" max="10"> /10</div>
                            <div>Solution Towards Objective: <input name="solution" type="number" min="0" max="10"> /10</div>
                            <div>Comments: <textarea name="comments" type="text"></textarea></div>
                            <div>Any Specific Training Require: <textarea name="training" type="text"></textarea></div>
                            <center><button name="evaluate" class="btn login-button nodeHover">Submit</button></center>
                        </form>
                    </div>
                    <?php  }
            }
        } else {
            if (!isset($_POST['update'])) {
                $sql = "SELECT * FROM evaluation WHERE prob_id = '$problem' AND team = '$team'";
                echo $sql;
                $result = mysqli_query($link, $sql);
                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {
                        $solution = $row['solution'];
                        $total = $solution + $row['ad_tech'] + $row['data_base'] + $row['back_end'] + $row['front_end'];
                    ?>
                        <div class="eval_brief">
                            <div style="font-size: 15px; text-align:center;">Evaluated At: <?php echo $row['evaluated_at'] ?></div>
                            <div>Abstract Link: <a href="<?php echo $row['link'] ?>" target="_blank" rel="noreferrer noopener">Click Here! </a></div>
                            <div>Front-End Score: <?php echo $row['front_end'] ?> /10</div>
                            <div>Back-End Score: <?php echo $row['back_end'] ?> /10</div>
                            <div>Database Connectivity: <?php echo $row['data_base'] ?> /10</div>
                            <div>Usage of Advanced Technology: <?php echo $row['ad_tech'] ?> /10</div>
                            <div>Solution Towards Objective: <?php echo $solution ?> /10</div>
                            <div>Total: <?php echo $total ?> /50</div>
                            <div>Comments: <?php echo $row['comments'] ?></div>
                            <div>Any Specific Training Require: <?php echo $row['training'] ?></div>
                            <form action="eval_brief.php" method="POST" class="form">
                                <input type="hidden" name='team' value='<?php echo $row['team']; ?>'>
                                <input type="hidden" name='prob_id' value='<?php echo $row['prob_id']; ?>'>
                                <center><button name="update" class="btn login-button nodeHover">Update</button></center>
                            </form>
                        </div>
                    <?php  }
                } else {
                    ?>
                    <center>
                        <h3 class="no-record"><?php echo "No records found!"; ?></h3>
                    </center>
                <?php
                }
            }
        }
        $_SESSION['team'] = $row['team'];
        $_SESSION['prob_id'] = $row['prob_id'];
        $temp = 0;
        if($_SESSION['team'] == '' && $_SESSION['prob_id'] == '') {
            $temp = 1;
        }

        if (isset($_POST['update'])) {
            $team = $_POST["team"];
            $problem = $_POST["prob_id"];
            $sql = "SELECT * FROM evaluation WHERE team = '$team'";
            $result = mysqli_query($link, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {  ?>
                    <div class="eval_brief">
                        <div>Abstract Link: <a href="<?php echo $row['link'] ?>" target="_blank" rel="noreferrer noopener">Click Here! </a></div>
                        <form action="eval_final.php" method="POST" class="form">
                            <input type="hidden" name='team' value='<?php echo $row['team']; ?>'>
                            <input type="hidden" name='prob_id' value='<?php echo $row['prob_id']; ?>'>
                            <div>Front-End Score: <input name="front_end" type="number" min="0" max="10" value="<?php echo $row['front_end']; ?>"> /10</div>
                            <div>Back-End Score: <input name="back_end" type="number" min="0" max="10" value="<?php echo $row['back_end']; ?>"> /10</div>
                            <div>Database Connectivity: <input name="database" type="number" min="0" max="10" value="<?php echo $row['data_base']; ?>"> /10</div>
                            <div>Usage of Advanced Technology: <input name="ad_tech" type="number" min="0" max="10" value="<?php echo $row['ad_tech']; ?>"> /10</div>
                            <div>Solution Towards Objective: <input name="solution" type="number" min="0" max="10" value="<?php echo $row['solution']; ?>"> /10</div>
                            <div>Comments: <textarea name="comments" type="text" value="<?php echo $row['comment']; ?>"></textarea></div>
                            <div>Any Specific Training Require: <textarea name="training" type="text" value="<?php echo $row['training']; ?>"></textarea></div>
                            <center><button name="eval_update" class="btn login-button nodeHover">Update</button></center>
                        </form>
                    </div>
                <?php
                    break;
                }
            } else {
                ?>
                <center>
                    <h3 class="no-record"><?php echo "No records found!."; ?></h3>
                </center>
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