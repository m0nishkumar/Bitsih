<?php

include 'config.php';
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$username = $_SESSION["username"];
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>BIT'S HACK'22 | PROFILE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="icon" type="image/x-icon" href="/assets/icon.png">
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

        table {
            border-collapse: collapse;
            width: 50%;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
            flex-basis: 50%;

        }

        tr {
            display: flex;
            flex-direction: row;
        }

        select {
            width: 272px;
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

        p {
            margin-top: 25px;
            margin-left: 15px;
            font-family: 'Poppins', sans-serif;
        }

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
        <div class='student_details'>
            <?php
            $info = 0;
            $sql = "SELECT email FROM student_details";
            $result = mysqli_query($link, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    if ($username == $row['email']) {
                        $info = 1;
                        break;
                    }
                }

                if ($info == 0) {
            ?>
                    <div class='input_box'>
                        <form action="stud_insert.php" method="POST">
                            <h2>Update Details</h2>
                            <label>Name: </label>
                            <input type="text" name="name" placeholder="Ex:Kavin" required />
                            <label>Roll Number: </label>
                            <input type="text" name="roll_no" placeholder="Ex:7376211CS183" required />
                            <input type="hidden" name="email" value=<?php echo $username; ?>>
                            <label>Lab Name: </label>
                            <select id="lab_name" name="lab_name">
                                <option value="APPAREL MADE-UPS AND HOME FURNISHINGS LAB">APPAREL MADE-UPS AND HOME FURNISHINGS LAB</option>
                                <option value="ART AND DESIGN LABORATORY">ART AND DESIGN LABORATORY</option>
                                <option value="ARTIFICIAL INTELLIGENCE - PRODUCT DEVELOPMENT">ARTIFICIAL INTELLIGENCE - PRODUCT DEVELOPMENT</option>
                                <option value="BIO PROSPECTING LAB">BIO PROSPECTING LAB</option>
                                <option value="BIOPOLYMER AND BIOMATERIAL SYNTHESIS AND ANAYLTICAL TESTING">BIOPOLYMER AND BIOMATERIAL SYNTHESIS AND ANAYLTICAL TESTING </option>
                                <option value="BIOPROCESS AND BIOPRODUCTS LAB">BIOPROCESS AND BIOPRODUCTS LAB</option>
                                <option value="BLOCKCHAIN TECHNOLOGY">BLOCKCHAIN TECHNOLOGY</option>
                                <option value="CLOUD COMPUTING">CLOUD COMPUTING</option>
                                <option value="COMMUNICATION PROTOCOL">COMMUNICATION PROTOCOL</option>
                                <option value="CYBER SECURITY">CYBER SECURITY</option>
                                <option value="DATA SCIENCE - INDUSTRIAL APPLICATIONS">DATA SCIENCE - INDUSTRIAL APPLICATIONS</option>
                                <option value="ELECTRICAL DRIVES AND AUTOMATION">ELECTRICAL DRIVES AND AUTOMATION</option>
                                <option value="ELECTRICAL PRODUCT DEV LAB">ELECTRICAL PRODUCT DEV LAB</option>
                                <option value="ELECTRONIC PRoDUCT DEV LAB">ELECTRONIC PRODUCT DEV LAB</option>
                                <option value="ELECTRONIC SYSTEM FOR WILDLIFE CONSERVATION">ELECTRONIC SYSTEM FOR WILDLIFE CONSERVATION</option>
                                <option value="EMBEDDED TECHNOLOGY">EMBEDDED TECHNOLOGY</option>
                                <option value="ENERGY AND THERMAL PRODUCT DESIGN & DEVELOPMENT LAB">ENERGY AND THERMAL PRODUCT DESIGN & DEVELOPMENT LAB</option>
                                <option value="ENERGY STORAGE & CONVERSION">ENERGY STORAGE & CONVERSION</option>
                                <option value="FUNCTIONAL FOOD & NUTRACEUTICALS">FUNCTIONAL FOOD & NUTRACEUTICALS</option>
                                <option value="FUNGAL BIODIVERSITY AND BIO-RESOURCES LABORATORY">FUNGAL BIODIVERSITY AND BIO-RESOURCES LABORATORY></option>
                                <option value="HACKATHON LAB">HACKATHON LAB</option>
                                <option value="AI BASED INDUSTRIAL AUTOMATION">AI BASED INDUSTRIAL AUTOMATION</option>
                                <option value="INDUSTRIAL DESIGN">INDUSTRIAL DESIGN</option>
                                <option value="INDUSTRIAL IOT">INDUSTRIAL IOT</option>
                                <option value="IOT">IOT</option>
                                <option value="MANUFACTURING & FABRICATION">MANUFACTURING & FABRICATION</option>
                                <option value="MICRO PROTOTYPING LAB">MICRO PROTOTYPING LAB</option>
                                <option value="MOBILE AND WEB APP FOR SOFTWARE APPLICATIONS">MOBILE AND WEB APP FOR SOFTWARE APPLICATIONS</option>
                                <option value="MODELLING & ANALYSIS">MODELLING & ANALYSIS</option>
                                <option value="DESIGN AND PROTOTYPING">DESIGN AND PROTOTYPING</option>
                                <option value="MOLECULAR DIAGNOSTICS & BIO MOLECULE CHARACTERISATION">MOLECULAR DIAGNOSTICS & BIO MOLECULE CHARACTERISATION</option>
                                <option value="NEW PRODUCT DEVELOPMENT LAB">NEW PRODUCT DEVELOPMENT LAB</option>
                                <option value="INTELLIGENT COMMUNICATION AND EMBEDDED SYSTEMS LAB">INTELLIGENT COMMUNICATION AND EMBEDDED SYSTEMS LAB</option>
                                <option value="PRINTED CIRCUIT BOARD (PCB) LAB">PRINTED CIRCUIT BOARD (PCB) LAB</option>
                                <option value="RENEWABLE ENERGY AND HVAC PRODUCTS">RENEWABLE ENERGY AND HVAC PRODUCTS</option>
                                <option value="ROBOTICS & AUTOMATION LAB">ROBOTICS & AUTOMATION LAB</option>
                                <option value="INTEGRATED AI & SENSORS">INTEGRATED AI & SENSORS</option>
                                <option value="SIGNAL PROCESSING FOR HEALTH CARE LAB">SIGNAL PROCESSING FOR HEALTH CARE LAB</option>
                                <option value="SMART AGRICULTURE">SMART AGRICULTURE</option>
                                <option value="SMART AND HEALTHY INFRASTRUCTURE">SMART AND HEALTHY INFRASTRUCTURE</option>
                                <option value="ROBOTIC PROCESS AUTOMATION LAB">ROBOTIC PROCESS AUTOMATION LAB</option>
                                <option value="SUSTAINABLE CIVIL ENGINEERING MATERIALS LAB">SUSTAINABLE CIVIL ENGINEERING MATERIALS LAB</option>
                                <option value="TECHNICAL TEXTILE">TECHNICAL TEXTILE</option>
                                <option value="UNMANNED AERIAL VEHICLE">UNMANNED AERIAL VEHICLE</option>
                                <option value="UNMANNED UNDERWATER VEHICLE">UNMANNED UNDERWATER VEHICLE</option>
                                <option value="VIRTUAL INSTRUMENTATION LAB">VIRTUAL INSTRUMENTATION LAB</option>
                                <option value="VIRTUAL REALITY / AUGMENTED REALITY">VIRTUAL REALITY / AUGMENTED REALITY</option>
                                <option value="VISION ENGINEERING LAB">VISION ENGINEERING LAB</option>
                                <option value="INTELLIGENCE INNOVATION LAB">INTELLIGENCE INNOVATION LAB</option>
                                <option value="SMART SENSOR INTELLIGENT">SMART SENSOR INTELLIGENT</option>
                                <option value="BIOMEDICAL SYSTEMS">BIOMEDICAL SYSTEMS</option>
                                <option value="ELECTRICAL INTEGRATED DRIVES">ELECTRICAL INTEGRATED DRIVES</option>
                                <option value="ARTIFICIAL INTELLIGENCE - TECHNOLOGIES">ARTIFICIAL INTELLIGENCE - TECHNOLOGIES</option>
                                <option value="ARTIFICIAL INTELLIGENCE - INDUSTRIAL APPLICATIONS">ARTIFICIAL INTELLIGENCE - INDUSTRIAL APPLICATIONS</option>
                                <option value="ARTIFICIAL INTELLIGENCE - SOFTWARE SOLUTIONS">ARTIFICIAL INTELLIGENCE - SOFTWARE SOLUTIONS</option>
                                <option value="DATA SCIENCE - COMPUTATIONAL INTELLIGENCE">DATA SCIENCE - COMPUTATIONAL INTELLIGENCE</option>
                                <option value="DATA SCIENCE - BIG DATA ANALYTICS">DATA SCIENCE - BIG DATA ANALYTICS</option>
                                <option value="DATA SCIENCE - EXPERT SYSTEMS">DATA SCIENCE - EXPERT SYSTEMS</option>
                                <option value="WEB DESIGN AND DEVELOPMENT">WEB DESIGN AND DEVELOPMENT</option>
                                <option value="SILK FASHION LAB">SILK FASHION LAB</option>
                                <option value="INDUSTRIAL WEB AND MOBILE APP DEVELOPMENT">INDUSTRIAL WEB AND MOBILE APP DEVELOPMENT</option>
                                <option value="INTEGRATED SMART BUILDINGS LAB">INTEGRATED SMART BUILDINGS LAB</option>
                                <option value="E-MOBILITY LAB">E-MOBILITY LAB</option>
                                <option value="HUMAN CENTERED AI LAB">HUMAN CENTERED AI LAB</option>
                                <option value="COMPUTATIONAL BIOLOGY LAB">COMPUTATIONAL BIOLOGY LAB</option>
                            </select>
                            <label>Lab Code: </label>
                            <select id="lab_id" name="lab_id">
                                <option value="SLB001">SLB001</option>
                                <option value="SLB002">SLB002</option>
                                <option value="SLB003">SLB003</option>
                                <option value="SLB004">SLB004</option>
                                <option value="SLB005">SLB005</option>
                                <option value="SLB006">SLB006</option>
                                <option value="SLB007">SLB007</option>
                                <option value="SLB008">SLB008</option>
                                <option value="SLB009">SLB009</option>
                                <option value="SLB010">SLB010</option>
                                <option value="SLB011">SLB011</option>
                                <option value="SLB012">SLB012</option>
                                <option value="SLB014">SLB014</option>
                                <option value="SLB015">SLB015</option>
                                <option value="SLB016">SLB016</option>
                                <option value="SLB018">SLB018</option>
                                <option value="SLB019">SLB019</option>
                                <option value="SLB020">SLB020</option>
                                <option value="SLB021">SLB021</option>
                                <option value="SLB022">SLB022</option>
                                <option value="SLB023">SLB023</option>
                                <option value="SLB024">SLB024</option>
                                <option value="SLB025">SLB025</option>
                                <option value="SLB026">SLB026</option>
                                <option value="SLB027">SLB027</option>
                                <option value="SLB029">SLB029</option>
                                <option value="SLB030">SLB030</option>
                                <option value="SLB031">SLB031</option>
                                <option value="SLB032">SLB032</option>
                                <option value="SLB033">SLB033</option>
                                <option value="SLB034">SLB034</option>
                                <option value="SLB037">SLB037</option>
                                <option value="SLB038">SLB038</option>
                                <option value="SLB041">SLB041</option>
                                <option value="SLB043">SLB043</option>
                                <option value="SLB045">SLB045</option>
                                <option value="SLB046">SLB046</option>
                                <option value="SLB047">SLB047</option>
                                <option value="SLB048">SLB048</option>
                                <option value="SLB049">SLB049</option>
                                <option value="SLB050">SLB050</option>
                                <option value="SLB051">SLB051</option>
                                <option value="SLB052">SLB052</option>
                                <option value="SLB053">SLB053</option>
                                <option value="SLB054">SLB054</option>
                                <option value="SLB055">SLB055</option>
                                <option value="SLB056">SLB056</option>
                                <option value="SLB057">SLB057</option>
                                <option value="SLB059">SLB059</option>
                                <option value="SLB062">SLB062</option>
                                <option value="SLB063">SLB063</option>
                                <option value="SLB064">SLB064</option>
                                <option value="SLB065">SLB065</option>
                                <option value="SLB066">SLB066</option>
                                <option value="SLB067">SLB067</option>
                                <option value="SLB068">SLB068</option>
                                <option value="SLB069">SLB069</option>
                                <option value="SLB070">SLB070</option>
                                <option value="SLB071">SLB071</option>
                                <option value="SLB072">SLB072</option>
                                <option value="SLB073">SLB073</option>
                                <option value="SLB074">SLB074</option>
                                <option value="SLB075">SLB075</option>
                                <option value="SLB076">SLB076</option>
                                <option value="SLB077">SLB077</option>

                            </select>
                            <label>Phone Number: </label>
                            <input type="text" name="phone_number" placeholder="Ex:8072677XXX" required />
                            <button class="login-button btn" name='stud_insert'>Submit</button>
                        </form>
                        <p><a href="https://docs.google.com/spreadsheets/d/1YrR1pqdsx0mrsfe1nWjhmjhReZgjuEys/edit?usp=sharing&ouid=101494206720533475609&rtpof=true&sd=true" target="_blank" rel="noreferrer noopener">Click here</a> to check your lab code.</p>
                    </div>
                <?php
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
                            <div style='width:100vw; overflow-x:hidden;' class="team">
                                <?php
                                if ($team == 1) {
                                    $team_name = $row['team_id'];
                                    $sql = "SELECT * FROM team Where team_id IN ('$team_name')";
                                    $result1 = mysqli_query($link, $sql); ?>
                                    <h3 style="text-align: center;">
                                        <?php
                                        echo 'Team Name: ';
                                        echo $row['team_id'];
                                        ?>
                                    </h3>
                                    <center>
                                        <br>
                                        <div>
                                            <table>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                </tr>
                                            </table>
                                        </div>
                                        <?php
                                        while ($row = mysqli_fetch_assoc($result1)) { ?>
                                            <div>
                                                <table>
                                                    <tr>
                                                        <td><?php echo $row['email']; ?></td>
                                                        <td><?php echo $row['designation']; ?></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        <?php }
                                        echo '<br>'; ?>
                                    </center>
                                <?php
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
                    $sql = "SELECT * FROM register WHERE email = '$username'";
                    $result = mysqli_query($link, $sql);
                    $row = mysqli_fetch_assoc($result);
                    $exist = $row['email'];
                    if ($exist == $username) {
                    ?>

                        <?php
                        $sql = "SELECT * FROM final_participants Where team = '$team_name'";
                        $result = mysqli_query($link, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $status = $row['status'];
                            $code = $row['problem'];
                        ?> <div style="display:flex; flex-direction:row; margin:auto;">
                                <p> <?php echo ("SOP's review status of $code :"); ?> </p><?php
                                                                                            if ($status == 'Initiated') {
                                                                                            ?>
                                    <p><i style="color: #fdc60f;" class="fa fa-circle" aria-hidden="true"></i><?php echo ' ';
                                                                                                                echo $status; ?></p>
                                <?php } elseif ($status == 'Accepted') { ?>
                                    <p><i style="color: #00e600;" class="fa fa-circle" aria-hidden="true"></i><?php echo ' ';
                                                                                                                echo $status; ?></p>
                                <?php  } else { ?>
                                    <p><i style="color: #ff0000;" class="fa fa-circle" aria-hidden="true"></i><?php echo ' ';
                                                                                                                echo $status; ?></p>
                                <?php      } ?>
                            </div> <?php
                                }
                            }
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
    <?php
    mysqli_close($link);
    ?>
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