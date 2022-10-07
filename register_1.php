<?php
session_start();
include "conn.php";
$a = $_POST["name"];
$q = $_POST["email"];
$d = $_POST["link"];
$g = $_POST["problem"];
$username = $_SESSION["username"];


$c = "SELECT email,problem FROM register WHERE team='$a'";
$result = $conn->query($c);
if ($result->num_rows > 2) {
    while ($row = $result->fetch_assoc()) { ?><?php
        if($row["problem"]== $g){
    ?>
        <h3 style="text-align: center; margin-top:49vh;"><?php echo ("You have already registered for this problem statement!"); ?></h3>
        <?php
        header("refresh:5;url=main.php");
        exit();
    }
    }
}

$c = "SELECT email FROM team WHERE team_id='$a'";
$result = $conn->query($c);
$cl = "SELECT count FROM problems WHERE id='$g'";
$resultt = $conn->query($cl);

if ($resultt->num_rows > 0) {

    while ($row = $resultt->fetch_assoc()) {
        $t = $row["count"];
        if ($t < 15) {

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $z = $row["email"];
                    $sqll = "INSERT INTO register (email,problem,link,team) VALUES('$z','$g','$d','$a')";
                    $sql = "UPDATE problems set count=count+1 WHERE id='$g'";
                    $conn->query($sqll);
                }
                $command = "SELECT * FROM team Where designation = 'leader'";
                $result = mysqli_query($conn, $command);
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($row['team_id'] == $a) {
                        $eemail  = $row['email'];
                        $sqlll = "INSERT INTO final_participants (email,problem,link,team) VALUES('$eemail','$g','$d','$a')";
                        $conn->query($sqlll);
                    }
                }




        ?>

                <h3 style="text-align: center; margin-top:49vh;"><?php echo ("Successfully Registered !"); ?></h3>

            <?php
                header("refresh:2;url=profile.php");

                $conn->query($sql);
            } else { ?>
                <h3 style="text-align: center; margin-top:49vh;"><?php echo ("Your team doesn't exist,create a team in profile!"); ?></h3>
            <?php
                header("refresh:4;url=profile.php");
            }
        } else { ?>
            <h3 style="text-align: center; margin-top:49vh;"><?php echo ("Registration Limit has been reached for this problem!"); ?></h3>
<?php
            header("refresh:5;url=prob-state.php");
        }
    }
}
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

    h3 {
        font-family: "poppins", sans-serif;

    }
</style>