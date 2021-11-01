
<?php

include_once('../database/dbcon.php');
$id = $_GET['id'];

$sql ="SELECT * FROM journals WHERE `j_id` = $id";
$qry = mysqli_query($con,$sql);

$result = mysqli_fetch_assoc($qry);

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/style.all.css">
    <link rel="stylesheet" href="../css/style.sm.min.css">
    <link rel="stylesheet" href="../css/main-editorial-board.css">

    
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    

    <title>Journal Details</title>
  </head>
  <body>


  <?php include_once('header.html') ?>
  <?php include_once('nav.html') ?>

<section>
<div id="accordion" style="width:80%;">
  <div class="card">
      <h1><?php  echo $result['j_name'];  ?></h1>
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <!-- <button class="btn btn-danger" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> -->

        




        <button class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Details |
        </button>

        <button class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Aims and Scope |
        </button>






        <!-- <button class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> -->




        <button class="btn btn-danger edii" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          Editorial board |
        </button>

        <button onclick="window.location.href='../archive.php?j_id=<?php  echo $result['j_id'];  ?>';" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Archives |
        </button>

        <button class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Indexing |
        </button>

        
        <button class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          Impact Factor |
        </button>
      </h5>

      


      
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <h3>Details</h3>
 


<table style="width:75%">
<tr>
<th>Journal Name:</th>
<td><?php  echo $result['j_name'];  ?></td>
</tr>

<tr>
<th>Abbr. Title:</th>
<td> <?php  echo $result['abbr_title'];  ?></td>
</tr>

<tr>
<th>ISSN(Online):</th>
<td> <?php  echo $result['issn'];  ?></td>
</tr>

<tr>
<th>Frequency:</th>
<td><?php  echo $result['frequency'];  ?></td>
</tr>

<tr>
<th>Language:	</th>
<td><?php  echo $result['language'];  ?></td>
</tr>

<tr>
<th>Chief Editor:</th>
<td><?php  echo $result['chief_editor'];  ?></td>
</tr>

<tr>
<th>Publisher:</th>
<td> <?php  echo $result['publisher'];  ?></td>
</tr>

<tr>
<th>Country of Origin: </th>
<td> <?php  echo $result['country_of_origin'];  ?></td>
</tr>

<tr>
</table>









      </div>
    </div>
  </div>
  <div class="card">
    <!-- <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div> -->
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <h3>Aim And Scope</h3>
     <p> <?php echo $result['aim_and_scope'];  ?>
</p>
      </div>
    </div>
  </div>


  <div class="card">
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">








      
    <?php 
include_once('../database/dbcon.php');
$sql = "SELECT * FROM editors_data WHERE `type`='chief' AND `j_id`= $id";
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

$sql = "SELECT * FROM editors_data WHERE `type`='ass' AND `j_id` = $id";
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

      
      







      </div>
    </div>
  </div>



  <div class="card">
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
      


<!-- archive start -->




















<!-- archive end  -->



      </div>
    </div>
  </div>




  <div class="card">
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body">
      Update Soon.....
      </div>
    </div>
  </div>

  

  <div class="card">
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body">
       
      



      
      <h3>Details</h3>

<table border="1" style="width:75%; ">
<tr>
<th><center>2021</center></th>
<td><center><a href="">CITATION (Working)</a></center></td>
</tr>

<tr>
<th><center>2021</center></th>
<td><center><a href="">h-Index (Working)</a></center></td>
</tr>

<tr>
<th><center>2021</center></th>
<td><center><a href=""> IPI Value (Working)</a> </center></td>
</tr>



<tr>
</table>




      </div>
    </div>
  </div>
</div>






</section>



<?php include_once('../partial/footer.html')  ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>










