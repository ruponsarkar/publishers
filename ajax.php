
<?php
include_once('database/dbcon.php');

$a = $_POST['count'];
// $a = 78;
$id = $_POST['id'];
$a++;
echo $a;




$sql = "UPDATE `article` SET `count`= '$a' WHERE `id`=$id ";
$run = mysqli_query($con,$sql);
$con -> close();



?>