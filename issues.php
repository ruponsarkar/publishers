
<?php

include_once('database/dbcon.php');
$id = $_GET['j_id'];


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

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.all.css">
    <link rel="stylesheet" href="css/style.sm.min.css">
    <link rel="stylesheet" href="css/main-editorial-board.css">

    
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    

    <title>Journal Details</title>


    <style>
        .volume{
            margin: 40px;
    display: flex;
        }
        .volume-name{
            margin: 5px;
    width: 180px;
    height: 30px;
    border: 1px solid;
    display: flex;
    align-items: center;
    justify-content: center;
        }
    </style>




  </head>
  <body>


  <?php include_once('partial/header.html') ?>
  <?php include_once('partial/nav.html') ?>

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




        <button onclick="window.location.href='journal-details/journal-details.php?id=<?php echo $id; ?>';" class="btn btn-danger edii" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          Editorial board |
        </button>

        <button onclick="window.location.href='../archive.php?j_id=<?php  echo $result['j_id'];  ?>';" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Archives |
        </button>

        <button onclick="window.location.href='journal-details/journal-details.php?id=<?php echo $id; ?>';" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Indexing |
        </button>

        
        <button onclick="window.location.href='journal-details/journal-details.php?id=<?php echo $id; ?>';" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          Impact Factor |
        </button>
      </h5>

      


      
    </div>


<span style="font-size: 20px; margin:10px; font-weight: bold; color: blue;"> <?php echo $_GET['volume'];   ?> </span>

<div class="volume">



    <?php    

include_once('database/dbcon.php');
$id = $_GET['id'];

$sql = "SELECT * FROM issues WHERE v_id = $id";
$qry = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($qry)){

?>




<a href="issues_list.php?id=<?php echo $row['id'];?>&j_id=<?php echo $_GET['j_id']; ?>&v_id=<?php echo $id;  ?>&volume=<?php echo $row['name'];  ?>">
    <div class="volume-name">
        <span><?php echo $row['name'] ; ?></span> 
    </div>
</a>





<?php
}
?>
</div>
    </div>
</div>
</section>

<?php include_once('partial/footer.html')  ?>

</body>


</html>