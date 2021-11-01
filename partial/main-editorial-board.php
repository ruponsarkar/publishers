<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editorial Board</title>
    <link rel="stylesheet" href="main-editorial-board.css">
</head>

<body>





    <?php 
include_once('../database/dbcon.php');
$sql = "SELECT * FROM editors_data WHERE `type`='chief' AND `j_id`= 1 ";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    
    ?>


    <div class="main-container">
        <div class="chief-name">
            <h1>EDITOR-IN-CHIEF</h1>
        </div>
        <div class="main-upper">

            <div class="main-img">
                <img src="../assets/all-editors/<?php echo $row["image"]; ?>" alt="">

            </div>

            <div class="main-details">
                <div class="main-name">
                    <?php echo $row["name"];  ?>

                </div>

                <div class="main-univ">
                    <?php echo $row["university"];  ?>

                </div>
            </div>

        </div>


        <?php
}

?>


        <br>
        <br><br><br><br>










        <div class="associate name">
            <h1>ASSOCIATE EDITORIAL BOARD</h1>
        </div>
        <div class="main-lower">



        <?php 

// include_once("../database/dbcon.php");

$sql = "SELECT * FROM editors_data WHERE `type`='ass' AND `j_id` = 1";
// $sql = "SELECT * FROM inventory_receive";
$result = mysqli_query($con, $sql);
mysqli_close($con);

if (isset($result)) {
while ($row = mysqli_fetch_assoc($result)) { 
    ?>





            <div class="main-card">
                <div class="main-img">
                <img src="../assets/all-editors/<?php echo $row["image"]; ?>" alt="">
                </div>

                <div class="main-details">
                    <div class="main-name">
                        <?php echo $row['name']; ?>

                    </div>

                    <div class="main-univ">
                    <?php echo $row["university"];  ?>

                    </div>
                </div>

            </div>

            <?php }}?>



        </div>



    </div>

    
</body>

</html>