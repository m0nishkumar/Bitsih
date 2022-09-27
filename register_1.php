<?php
include "conn.php";
$a = $_POST["name"];
$q = $_POST["email"];
$d = $_POST["link"];
$g = $_POST["problem"];
echo $g;

$c = "SELECT email FROM register WHERE team='$a'";
$result = $conn->query($c);
if ($result->num_rows > 2) {
    while ($row = $result->fetch_assoc()) {
        exit("U have already resigerted!");
    }
}

$c = "SELECT email FROM team WHERE team_id='$a'";
$result = $conn->query($c);
$cl = "SELECT count FROM problems WHERE id='$g'";
$resultt = $conn->query($cl);
echo $cl;

if ($resultt->num_rows > 0) {

    while ($row = $resultt->fetch_assoc()) {
        echo 'error';
        $t = $row["count"];
        if ($t < 15) {

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $z = $row["email"];
                    $sqll = "INSERT INTO register (email,problem,link,team) VALUES('$z','$g','$d','$a')";
                    $sql = "UPDATE problems set count=count+1 WHERE id='$g'";
                    $conn->query($sqll);
                    echo ("success");
                }
                $conn->query($sql);
            } else {
                echo ("Your team doesn't exist,create a team in profile!");
            }
        } else {
            echo ("Seat not available");
            header("refresh:5;url=registeration.php");
        }
    }
}
