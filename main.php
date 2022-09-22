<?php

include 'config.php';
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$username = $_SESSION["username"];

error_reporting(0); // For not showing any error
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
            <li><a class="active nodeHover" href="#home">Home</a></li>
            <li><a class="nodeHover" href="#about">About</a></li>
            <li><a class="nodeHover" href="#guidelines">Guidelines</a></li>
            <li><a class="nodeHover" href="prob-state.php">Problem-Statement</a></li>
            <li><a class="nodeHover" href="#footer">Contact Us</a></li>
            <li><a class="nodeHover" href="profile.php">Profile</a></li>
            <li><a class="login-button nodeHover" href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <section class="home" id="home">
        <?php
        ?>
        <h3>Hey <?php echo $username ?> !</h3>
        <h4 class="main_title">BIT INTRACOLLEGE<br>SOFTWARE HACKATHON<span>'</span>22</h4>
        <h2>BIT INTRACOLLEGE<br>SOFTWARE HACKATHON<span>'</span>22</h2>

        <a class="login-button join nodeHover" href="prob-state.php">Join the Event </a>
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
    </section>

    <section class="about">
        <div class="about-container">
            <h2><u>BIT HACKATHON</u></h2>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
        <div class='sphere'>
            <div class='ring'></div>
            <div class='ring'></div>
            <div class='ring'></div>
            <div class='ring'></div>
            <div class='ring'></div>
            <div class='ring'></div>
            <div class='ring'></div>
            <div class='ring'></div>
            <div class='ring'></div>
            <div class='ring'></div>
            <div class='ring'></div>
            <div class='ring'></div>
            <div class='ring'></div>
            <div class='ring'></div>
            <div class='ring'></div>
            <div class='ring'></div>
        </div>
    </section>
    <h1></h1>
    <div class="key-points">
        <div class="points-left">
            <img src="./assets/Layer 2.png" alt="Futuristic Vector" width="100px" height="100px">
            <h1>Futuristic</h1>
            <p>Lorem Ipsum is simply dummy<br> text of the printing and <br>typesetting industry.</p>
        </div>
        <hr>
        <div class="points-center">
            <img src="./assets/Layer 0.png" alt="Ingenious Vector" width="100px" height="100px">
            <h1>Ingenious</h1>
            <p>Lorem Ipsum is simply dummy<br> text of the printing and <br>typesetting industry.</p>
        </div>
        <hr>
        <div class="points-right">
            <img src="./assets/Layer 3.png" alt="Empowering Vector" width="100px" height="100px">
            <h1>Empowering</h1>
            <p>Lorem Ipsum is simply dummy<br> text of the printing and <br>typesetting industry.</p>
        </div>
    </div>
    <div class="count-down">
        <div class="container">
            <h1 id="headline">Count Every Second Until The Event</h1>
            <div id="countdown">
                <ul>
                    <li><span id="days"></span>days</li>
                    <li><span id="hours"></span>Hours</li>
                    <li><span id="minutes"></span>Minutes</li>
                    <li><span id="seconds"></span>Seconds</li>
                </ul>
            </div>
            <div id="content" class="emoji">
                <span>🥳</span>
                <span>🎉</span>
                <span>✨</span>
            </div>
        </div>
    </div>
    <p id="guidelines"></p>
    <section class="event">
        <h2>HOW TO TAKE PART?</h2>
        <div class="event-process">
            <div class="step">
                <h1 class="numbering">1</h1>
                <div class="left">
                    <h3><span>Register for the event</h3>
                    <h5>before <span>September 30</span> / 11:59 pm</h5>
                </div>
                <div class="right">
                    <h4>Create your team and<br>register for the event</h4>
                </div>
            </div>
            <div class="step">
                <h1 class="numbering">2</h1>
                <div class="left">
                    <h3><span>Select you Problem Statement</span></h3>
                </div>
                <div class="right">
                    <h4>Choose one problem <br>statement from the given List</h4>
                </div>
            </div>
            <div class="step">
                <h1 class="numbering">3</h1>
                <div class="left">
                    <h3><span>Submit your SOP's</span></h3>
                </div>
                <div class="right">
                    <h4>An approach to the chosen<br> statement is to be submitted</h4>
                </div>
            </div>
            <div class="step">
                <h1 class="numbering">4</h1>
                <div class="left">
                    <h3><span>Confirmation</span></h3>
                </div>
                <div class="right">
                    <h4>Is your team Selected?<br> Final step is to make your presence in.</h4>
                </div>
            </div>
        </div>
    </section>`
    <p class="infooo">ABOUT</p>
    <h1 class="info">HACKATHON'22</h1>
    <section class="reg">
        <div class="continer">
            <h3>Registration</h3>
            <center>
                <img src="./assets/registration.png" alt="Registration Image" width="120px" height="120px">
                <h4>Team Strength</h4>
                <p><i class="fa fa-dot-circle-o" style="font-size:15px"></i> Minimum: 3</p>
                <p><i class="fa fa-dot-circle-o" style="font-size:15px"></i> Maximum: 6</p>

            </center>
        </div>
        <div class="continer">
            <h3>Main Event</h3>
            <center>
                <img src="./assets/event.png" alt="Event Image" width="120px" height="120px">
                <p><i class="fa fa-dot-circle-o" style="font-size:15px"></i> Venue: Main Auditorium</p>
                <p><i class="fa fa-dot-circle-o" style="font-size:15px"></i> Date : September 30 to October 2</p>
            </center>
        </div>
        <div class="continer">
            <h3>Benefits</h3>
            <center>
                <img src="./assets/benefits.png" alt="Benefits Image" width="120px" height="120px">
                <p><i class="fa fa-dot-circle-o" style="font-size:15px"></i> Exposure to SDG problems</p>
                <p><i class="fa fa-dot-circle-o" style="font-size:15px"></i> Nam vitae nibh risus.s</p>
            </center>
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
                    <li><a class="nodeHover" href="#home">Home</a></li>
                    <li><a class="nodeHover" href="#about">About</a></li>
                    <li><a class="nodeHover" href="">Guidelines</a></li>
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
<script type="text/javascript">
    (function() {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        //I'm adding this section so I don't have to keep updating this pen every year :-)
        //remove this if you don't need it
        let today = new Date(),
            dd = String(today.getDate()).padStart(2, "0"),
            mm = String(today.getMonth() + 1).padStart(2, "0"),
            yyyy = today.getFullYear(),
            nextYear = yyyy + 1,
            dayMonth = "09/30/",
            birthday = dayMonth + yyyy;

        today = mm + "/" + dd + "/" + yyyy;
        if (today > birthday) {
            birthday = dayMonth + nextYear;
        }
        //end

        const countDown = new Date(birthday).getTime(),
            x = setInterval(function() {

                const now = new Date().getTime(),
                    distance = countDown - now;

                document.getElementById("days").innerText = Math.floor(distance / (day)),
                    document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                    document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                    document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                //do something later when date is reached
                if (distance < 0) {
                    document.getElementById("headline").innerText = "Hurray! Event Have been Started!";
                    document.getElementById("countdown").style.display = "none";
                    document.getElementById("content").style.display = "block";
                    clearInterval(x);
                }
                //seconds
            }, 0)
    }());
</script>