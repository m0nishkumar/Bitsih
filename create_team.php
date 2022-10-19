<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .text {
            transition: 0.3s;
            color: white;
        }
    </style>
    <title>BIT'S HACK'22 | TEAM CREATE</title>
    <link rel="stylesheet" href="./css/team-reg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/bubble.css">
    <link rel="icon" type="image/x-icon" href="/assets/icon.png">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>

    <center>
        <div class="contentt">
            <div class="box">
                <span style="font-family: 'Saira';font-size:30px;">
                    <div class="title">Team Registration Form</div>
                </span>
                <form action="" method="POST">
                    <label for="cars">Choose Team size:</label>
                    <select id="cars" name="cars">
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                    <input type="submit" id="jk">
                </form>
                <?php
                $s = "5";
                if (isset($_POST["cars"])) {
                    $s = $_POST["cars"];
                } ?>
                <h3>Team of <?php echo $s ?></h3>
                <form name="forms" action="team.php" method="POST">
                    <i class="fa fa-user"></i>
                    <input type="text" id="inp" placeholder="Team Name" name="teamname" required>
                    <br>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Leader Email" name="leader" required>
                    <br>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder=" Member 1's Email..." name="member1" required>
                    <br>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder=" Member 2's Email..." name="member2" required>
                    <input type="hidden" value=<?php echo $s ?> name="number">
                    <?php

                    switch ($s) {
                        case "6":
                    ?>
                            <br>
                            <i class="fa fa-user"></i>
                            <input type="text" placeholder=" Member 3's Email..." name="member3" required>
                        <?php
                        case "5":
                        ?>
                            <br>
                            <i class="fa fa-user"></i>
                            <input type="text" placeholder=" Member 4's Email..." name="member4" required>
                        <?php
                        case "4":
                        ?>
                            <br><i class="fa fa-user"></i>
                            <input type="text" placeholder=" Member 5's Email..." name="member5" required><?php
                                                                                                            break;
                                                                                                    }
                                                                                                            ?>
                    <div class="hover">
                        <button>
                            <div class="text" style="color:white;">Register</div>
                        </button>
                    </div>
                    <p style="color: red;">**Note: Before creating team, Team mates should have created & updated their profile!</p>
            </div>
            </form>

        </div>
    </center>
    <script src="./js/bubble.js"></script>
</body>

</html>