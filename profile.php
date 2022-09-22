<?php
session_start();
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
include 'config.php';

$username = $_SESSION["username"];
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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        .responsive-table .table-header {
            display: none;
        }

        .responsive-table li {
            display: block;
        }

        .responsive-table {
            margin-bottom: 0vh;
        }

        .responsive-table .col {
            flex-basis: 100%;
        }

        .responsive-table .col {
            display: flex;
            padding: 10px 0;
        }

        .responsive-table .col:before {
            color: #6C7A89;
            padding-right: 10px;
            content: attr(data-label);
            flex-basis: 50%;
            text-align: right;
        }

        .student_details {
            display: flex;
            flex-direction: column;
            width: 100vw;
        }

        .display_profile {
            width: 100vw;

        }

        input {
            width: 250px;
            height: 42px;
            line-height: 2;
            float: left;
            display: block;
            padding: 0;
            margin: 0;
            padding-left: 20px;
            border: none;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.08);
            font-size: 1rem;
            border-radius: 4px;
        }

        label {
            font-family: 'Poppins', sans-serif;
            margin-top: 10px;
            margin-bottom: 10px;


        }

        .input_box {
            width: 300px;
            height: fit-content;
            margin: auto;
        }

        .btn {
            width: 100px;
            margin: auto;
            margin-top: 10px;
        }
    </style>
    <title>BIT | SIH</title>
</head>

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
            <li><a class="nodeHover" href="prob-state.php">Problem-Statement</a></li>
            <li><a class="nodeHover" href="#footer">Contact Us</a></li>
            <li><a class="active nodeHover" href="profile.php">Profile</a></li>
            <li><a class="btn login-button nodeHover" href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <section class="prob-home" id="home">
        <h1>PROFILE</h1>
        <div class='student_details'>
            <?php
            $sql = "SELECT email FROM student_details";
            $result = mysqli_query($link, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($username != $row['email']) {
            ?>
                        <div class='input_box'>
                            <form action="stud_insert" method="POST">
                                <h2>Update Details</h2>
                                <label>Name : </label>
                                <input type="text" name="name" placeholder="Ex:Kavin" />
                                <label>Roll Number : </label>
                                <input type="text" name="roll_no" placeholder="Ex:7376211CS183" />
                                <input type="hidden" name="email" value=<?php echo $username; ?>>
                                <label>Lab Name: </label>
                                <input type="text" name="lab_name" placeholder="Ex:AI LAb" />
                                <label>Lab Code: </label>
                                <input type="text" name="lab_id" placeholder="Ex:SLB003" />
                                <label>Phone Number: </label>
                                <input type="text" name="phone_number" placeholder="Ex:8072677XXX" />
                                <button class="login-button btn" name='stud_insert'>Submit</button>
                            </form>
                        </div>
                    <?php
                        break;
                    } else {
                    ?>
                        <div class="display_profile">
                            <?php
                            $sql = "SELECT * FROM student_details Where email IN ('$username')";
                            $result = mysqli_query($link, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <div>
                                        <ul class="responsive-table">
                                            <li>
                                                <div class="col col-1" data-label="Name: "><?php echo $row['name']; ?></div>
                                                <div class="col col-2" data-label="Roll No: "><?php echo $row['roll_no'] ?></div>
                                                <div class="col col-3" data-label="E-mail: "><?php echo $row['email'] ?></div>
                                                <div class="col col-4" data-label="Lab Name: "><?php echo $row['lab_name'] ?></div>
                                                <div class="col col-5" data-label="Lab Code: "><?php echo $row['lab_id'] ?></div>
                                                <div class="col col-6" data-label="Phone Number: "><?php echo $row['phone_number'] ?></div>
                                            </li>
                                        </ul>
                                    </div>
                                <?php
                                }
                            }
                            $team = 0;
                            $sql = "SELECT * FROM team";
                            $result = mysqli_query($link, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    if ($username == $row['email']) {
                                        $team = 1;
                                        break;
                                    }
                                }
                                ?>
                                <div class="team">
                                    <?php
                                    if ($team == 1) {
                                        $sql = "SELECT * FROM team Where email IN ($username)";
                                        $result = mysqli_query($link, $sql);
                                        if (mysqli_num_rows($result) >= 0) {
                                            echo 'Team Name: ';
                                            echo $row['team_id'];
                                            while ($row = mysqli_fetch_assoc($result)) { ?>
                                                <ul class="responsive-table">
                                                    <li>
                                                        <div class="col col-1" data-label="Name: "><?php echo $row['email']; ?></div>
                                                        <div class="col col-2" data-label="Position: "><?php echo $row['designation'] ?></div>
                                                    </li>
                                                </ul>
                                        <?php }
                                        }
                                    } else {
                                        ?>
                                        <center>
                                            <div class="create_team">
                                                <h3>You have not created team yet!</h3>
                                                <p><a href="create_team.php">Click Here</a> To Create A Team!</p>
                                            </div>
                                        </center>
                                    <?php
                                    }
                                    ?>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
            <?php
                    }
                }
            }
            ?>
        </div>
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