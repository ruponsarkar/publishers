<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    

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
        overflow:auto;
        height: 290px;

    }

    .cover-legend{
        border: 1px solid;
    margin: 2px;
    background: aliceblue;
    width: 98%;
    border-radius: 5px;
    }

    .small{
        /* width: 200px; */
    margin-top: 3px;
    margin-left: 25px;
    display: flex;
    align-items: center;
    font-size: 11px;
    font-weight: bold;
    font-family: serif;
    }

    .file-arr{
        border: 1px solid;
    width: 60px;
    height: 15px;
    margin: 5px;
    background: blue;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 12px;
    color: white;
    font-weight: bold;
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

</head>
<body>




<div class="legend">

<?php    

include_once('database/dbcon.php');
$i_id = 1;
$v_id = 1;

$sql = "SELECT * FROM `home-article` ORDER by id DESC";
$qry = mysqli_query($con,$sql);

while($row = mysqli_fetch_assoc($qry)){

?>




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
        

      <a href="assets/finalsubmit/<?php echo $row['file'];  ?>">  <div class="file-arr">
            PDF
        </div>
      </a>

    </div>



    

<?php
}
?>


  






 







</div>










</body>