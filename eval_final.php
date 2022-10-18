<style>
    @import url('https://fonts.googleapis.com/css2?family=Saira:wght@600&display=swap');
</style>

<?php
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (!isset($_SESSION["eval_loggedin"]) && $_SESSION["eval_loggedin"] !== true) {
    header("location: evaluators_login.php");
    exit;
}
include 'config.php';
error_reporting(0);

$team = $_POST['team'];
$prob_id = $_POST['prob_id'];
$front_end = $_POST['front_end'];
$back_end = $_POST['back_end'];
$data_base = $_POST['database'];
$ad_tech = $_POST['ad_tech'];
$solution = $_POST['solution'];
$comments = $_POST['comments'];
$training = $_POST['training'];

if (isset($_POST['evaluate'])) {
    $sql = "INSERT INTO evaluation (team, prob_id, front_end, back_end, data_base, ad_tech, solution, comments, training) VALUES ('$team', '$prob_id', '$front_end', '$back_end', '$data_base', '$ad_tech', '$solution', '$comments', '$training');";
    $result = mysqli_query($link, $sql); ?>
    <h3 style="text-align: center; margin-top:49vh;"><?php echo ("Evaluated Successfully!"); ?></h3>
    <form action="eval_brief.php" method="POST">
        <input type="hidden" name='team' value='<?php echo $team; ?>'>
        <input type="hidden" name='prob_id' value='<?php echo $prob_id; ?>'>
    </form>
<?php }
if (isset($_POST['eval_update'])) {
    $sql = "UPDATE evaluation SET front_end = '$front_end', back_end ='$back_end', data_base = '$data_base', ad_tech = '$ad_tech', solution = '$solution', comments = '$comments', training = '$training' WHERE team = '$team' AND prob_id= '$prob_id'";
    $result = mysqli_query($link, $sql); ?>
    <h3 style="text-align: center; margin-top:49vh;"><?php echo ("Updated Successfully!"); ?></h3>
    <form action="eval_brief.php" method="POST">
        <input type="hidden" name='team' value='<?php echo $team; ?>'>
        <input type="hidden" name='prob_id' value='<?php echo $prob_id; ?>'>
    </form>
<?php
}
header("refresh:2;url=eval_brief.php");
?>