
<?php
include_once('database/dbcon.php');

$a = $_POST['name'];
// $a = 78;
$a++;
echo $a;




$sql = "UPDATE `visitors` SET `count`= '$a' WHERE `id`=1 ";
$run = mysqli_query($con,$sql);



?>