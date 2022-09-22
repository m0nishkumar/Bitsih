<script>
function redirect() {
}
</script>
<?php
include "conn.php";
$a=$_POST["name"];
$q=$_POST["email"];
$d=$_POST["link"];
$g=$_POST["problem"];

$c="SELECT count FROM problems WHERE id='$g'";
$result=$conn->query($c);
if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        $t=$row["count"];
    if($t<15){
        $sql="INSERT INTO register(name,email,problem,link) VALUES('$a','$q','$g','$d')";
        $sqll="UPDATE problems set count=count+1 WHERE id='$g' ";
        $conn->query($sql);
        $conn->query($sqll);?>
        <h3><?php echo("Registered Sucessfully!"); ?></h3>
        <?php header( "refresh:5;registeration.php" );
    }
    else{
        echo("Seat not available!");
        header( "refresh:5;url=registeration.php" );
    }
    }
}

?>
<style>
    h3{
        margin-left: 43vw;
        margin-top:50vh;
    }
</style>
