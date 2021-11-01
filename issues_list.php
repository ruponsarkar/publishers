
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


    .accordion{
      width: 80%;
    }





    .legend{
        margin: 0;

    }

    .cover-legend{
        border: 1px solid;
    margin: 10px;
    background: aliceblue;
    width: 80%;
    border-radius: 5px;
    }

    .small{
        /* width: 200px; */
    margin-top: 10px;
    margin-left: 25px;
    display: flex;
    align-items: center;
    font-size: initial;
    font-weight: bold;
    font-family: serif;
    }

    .file-arr{
        border: 1px solid;
    width: 85px;
    height: 28px;
    margin: 25px;
    background: chartreuse;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: small;
    color: blue;
    font-weight: bold;
    }



    
.download{
      display: flex;
    align-items: center;
    justify-content: space-between;
    }
    
    .count{

      margin-right: 10px;
    border: 1px solid;
    padding: 0px 15px 0px 15px;
    font-size: small;
    color: brown;
    border-radius: 5px;
}


    @media (max-width: 600px){
      .cover-legend {
    border: 1px solid;
    margin: 0px;
    margin-top: 5px;
    background: aliceblue;
    width: 93%;
    border-radius: 5px;
}



.file-arr {
    border: 1px solid;
    width: 63px;
    height: 19px;
    margin: 10px;
    background: chartreuse;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: small;
    color: blue;
    font-weight: bold;
}

 .accordion{
  width: 100%;
}

.small {
    width: 100%;
    margin-top: 10px;
    /* border: 1px solid; */
    font-size: small;
    margin-left: 8px;
    padding-right: 8px;
    /* padding: 31px; */
    font-size: 10px;
    display: flex;
    /* font-weight: bold; */
    font-family: serif;
    align-items: baseline;
}

.legend {
    margin: 0;
    display: flex;
    justify-content: center;
    flex-direction: column;
}



    }

    @media (max-width: 1000px){
      .accordion{
  width: 100%;
}

  .cover-legend {
    border: 1px solid;
    margin: 10px;
    margin-top: 5px;
    background: aliceblue;
    width: 98%;
    border-radius: 5px;
}

    }






    </style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script>


$(document).ready(function(){
  $("#click").click(function(){
    $.post("ajax.php",
    {
      name: <?php echo $row['count'];  ?>,
      id: <?php echo $row['id'];  ?>
    },
    function(data,status){
    //   alert("Data: " + data + "\nStatus: " + status);
      $(".add").text(data);
    });
  });
});
</script> -->


  </head>
  <body>


  <?php include_once('partial/header.html') ?>
  <?php include_once('partial/nav.html') ?>

<section>
<div id="accordion" class="accordion">
  <div class="card">
      <h1><?php  echo $result['j_name'];  ?></h1>
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <!-- <button class="btn btn-danger" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> -->

        




        <button onclick="window.location.href='journal-details/journal-details.php?id=<?php echo $id; ?>';" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Details |
        </button>

        <button onclick="window.location.href='journal-details/journal-details.php?id=<?php echo $id; ?>';" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Aims and Scope |
        </button>


        <button onclick="window.location.href='journal-details/journal-details.php?id=<?php echo $id; ?>';" class="btn btn-danger edii" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          Editorial board |
        </button>

        <button onclick="window.location.href='';" class="btn btn-danger collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
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

<!-- <div class="volume"> -->



    <?php    

include_once('database/dbcon.php');
$i_id = $_GET['id'];
$v_id = $_GET['v_id'];

$sql = "SELECT * FROM article WHERE i_id = $i_id AND v_id = $v_id";
$qry = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($qry)){

?>





   

    <div class="legend">
    <div class="cover-legend">
        <div class="small" style="color:blue;">
        <?php echo $row['name'] ; ?>
        </div>
        <div class="small" style="font-style: italic;">
        <i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp; <?php echo $row['aname'] ; ?>
        </div>
        <div class="small" style="font-style: italic">
        <i class="fa fa-tag" aria-hidden="true">&nbsp;</i><?php echo $row['designation'] ; ?>
        </div>
        
         <div class="small" style="font-style: italic">
        <i class="fa fa-tag" aria-hidden="true">&nbsp;</i>DOI : <?php echo $row['doi'] ; ?>
        </div>

        <div class="small" style="font-style: italic">
        <i class="fa fa-file" aria-hidden="true">&nbsp;</i>Page No : <?php echo $row['page'] ; ?>
        </div>
        
<div class="download">
  <?php $click ="click". $row['id']; ?>
      <a href="assets/finalsubmit/<?php echo $row['file'];  ?>" attributes-list download ="issra-journal" class="<?php echo $click; ?>">  <div class="file-arr">
            PDF
        </div></a>

        <div class="count">Downloads: <?php echo $row['count'];  ?> </span></div>

        </div>

    </div>

<!-- </div> -->



<script> 
$(document).ready(function(){
  $(".<?php echo $click; ?>").click(function(){

    $.post("ajax.php",
    {
      count: <?php echo $row['count'];  ?>,
      id: <?php echo $row['id'];  ?>
    },
    function(data,status){
      // alert("Data: " + data + "\nStatus: " + status);
      // $(".add").text(data);
    });
  });
});
</script>









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