<html>
<link rel="icon" type="image/x-icon" href="/assets/icon.png">
</html>
<style>@import url('https://fonts.googleapis.com/css2?family=Saira:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
</style>
<?php
session_start();
include "conn.php";
error_reporting(0);
$t = $_POST['teamname'];
$a = $_POST['leader'];
$b = $_POST['member1'];
$c = $_POST['member2'];
$d = $_POST['member3'];
$e = $_POST['member4'];
$f = $_POST['member5'];
$p = $_POST['number'];
$l = "not exists";
$tf = array($a, $b, $c, $f, $e, $d);
$tf = array_filter($tf);
$ar = array();
$arr = array();
$j = rand(10, 1000);
$n = $t . $j;
$jp=0;
$ju=0;
$ww=array();
$ss=array();

if (!in_array($_SESSION["username"], $tf)){ ?>
    <h3 style="text-align: center; margin-top:25vh;font-family:Saira"><?php echo("You mail is not included in team!");?></h3>
    <?php
    header("refresh:5;url=create_team.php");
    exit(); 
}
for ($i = 0; $i < count($tf); $i++) {
    for ($j = $i; $j < count($tf) - 1; $j++) {
        if ($tf[$i] == $tf[$j + 1]) {
            ?><h3 style="text-align: center; margin-top:25vh;font-family:Saira"><?php echo("Duplicate email found!");?></h3><?php
            ?><h3 style="text-align: center; margin-top:25vh;font-family:poppins"><?php echo($tf[$i]);?></h3><?php
            header("refresh:5;url=create_team.php");
            exit();      
            
        }
    }
}

$rw="SELECT id from student_details where email in ('$a','$b','$c','$d','$e','$f')";
$rr=$conn->query($rw);
if($rr->num_rows > 0){
    while($qw=$rr->fetch_assoc()){
        array_push($ss,$qw["id"]);
    }
}

$sq="SELECT email FROM student_details";
$re=$conn->query($sq);
if($re->num_rows >0){
    while($ro=$re->fetch_assoc()){
        for($i=0;$i<count($tf);$i++){   
            if($tf[$i]==$ro["email"]){
               array_push($ww,$tf[$i]);
            }
        }

    }
}
$difference = array_diff($tf, $ww);
if(count($ww)!=count($tf)){
    ?><h3 style="text-align: center; margin-top:25vh;font-family:Saira"><?php echo("Listed Students have to create account / profile to form team!");?></h3><?php
    for($i=0;$i<count($tf);$i++){
        ?><ol style="text-align: center;font-family:poppins"><?php echo("<br>".$difference[$i]); ?></ol><?php

    }
    ?><br><?php
    ?><h3 style="text-align: center; margin-top:25vh;font-family:Saira"><?php header("refresh:10;url=create_team.php"); exit();?></h3><?php
}


$sqlll = "SELECT team_id,email FROM team";
$result = $conn->query($sqlll);
$po = 0;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        for ($i = 0; $i < $p; $i++) {
            if ($row["email"] == $tf[$i]) {
                $po = $po + 1;
                array_push($ar, $tf[$i]);
                array_push($arr, $row["team_id"]);
            }
        }
    }
    if ($po == $p) {
        ?><h3 style="text-align: center; margin-top:15vh;font-family:poppins"><?php echo ("Your team have already registered<br>");?><?php
        $kp = "already";
        header("refresh:10;url=profile.php");
    }
  
    $sqll = "SELECT team_id,email FROM team";
    $result = $conn->query($sqll);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($t == $row["team_id"] && $kp == "already") {
                ?><h3 style="text-align: center; margin-top:10vh;font-family:poppins"><?php echo ("Your team already registered with the same name, checkout your profile!<br>");?><?php
                break;
                $l = "exists";
            } else if ($t == $row["team_id"]) {
                $po = -1;
                ?><h3 style="text-align: center; margin-top:5vh;font-family:poppins"><?php echo ("Team name already exists,try another name!<br>");?></h3><?php
                break;
            }
        }
    }
   
    if ($po > 0) {
        ?><h3 style="text-align: center; margin-top:10vh;font-family:poppins"><?php echo ("Already registered members:<br>");?></h3><?php
        for ($i = 0; $i < count($ar); $i++) {
            ?><p style="margin-left:90vh;margin-top:30px;font-family:poppins;display: inline-block;"><?php echo ($ar[$i] . "-" .'<p style="color:red;font-family:poppins;display: inline-block;">'.$arr[$i].'</p>'.'<br>');?><p><?php
        }
    }
    if ($po == 0) {
        $sql = "INSERT INTO team (email,team_id,designation,parent_id,register_name) VALUES('$a','$t','leader','$ss[0]','$n');";
        $conn->query($sql);

        switch ($p) {
            case "6":
                $sql = "INSERT INTO team (email,team_id,designation,parent_id,register_name) VALUES('$d','$t','members','$ss[3]','$n');";
                $conn->query($sql);
            case "5":
                $sql = "INSERT INTO team (email,team_id,designation,parent_id,register_name) VALUES('$e','$t','members','$ss[4]','$n');";
                $conn->query($sql);
            case "4":
                $sql = "INSERT INTO team (email,team_id,designation,parent_id,register_name) VALUES('$f','$t','members','$ss[5]','$n');";
                $conn->query($sql);
            case "3":
                $sql = "INSERT INTO team (email,team_id,designation,parent_id,register_name) VALUES('$c','$t','members','$ss[2]','$n');";
                $conn->query($sql);

                $sql = "INSERT INTO team (email,team_id,designation,parent_id,register_name) VALUES('$b','$t','members','$ss[1]','$n');";
                $conn->query($sql); ?>

                <h3 style="text-align: center; margin-top:49vh;"><?php echo ("Successfully Registered!"); ?></h3>
<?php }
        header("refresh:2;url=profile.php");
    }
}
?>