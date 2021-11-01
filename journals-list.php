<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <title>All Journals</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">

    <link rel="stylesheet" href="css/style.sm.min.css">


    <link rel="stylesheet" href="css/style.all.css">


  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>





  <script>
    $(document).ready(function () {
      $('#icon').click(function () {
        $('ul').toggleClass('show');
      })
    })
  </script>

</head>

<body>
<?php include_once('partial/header.html') ?>

<?php include_once('partial/nav.html') ?>



  <section>

<div class="container" style="font-family: 'Font Awesome 5 Free';">












    <div class="row row-cols-1 row-cols-md-2 g-4">







    <?php 
include_once('database/dbcon.php');
$sql = "SELECT * FROM journals ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    ?>



      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="assets/journals/<?php echo $row['photo'];   ?>" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><b><?php echo $row['j_name'];   ?></b></h5>
              <p class="card-text"><b>Abbr. Title:</b> <?php echo $row['abbr_title'];   ?></p>
              <p><b>ISSN(Online):</b> XXXX-XXXX</p>
              <p class="card-text"><b>Publisher:</b> ISSRA Publishers</p>
              <p class="card-text"><b>Country of Origin:</b> INDIA</p>

              <a class="card-text" href="journal-details/journal-details.php?id='<?php  echo $row['j_id'];  ?>'"><small class="btn btn-secondary">View More</small></a>
            </div>
          </div>
        </div>
      </div>



      <?php

}
} 
else {
echo "0 results";
}
$con->close();

?>





      <!-- <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/ISSRA Journal of  Medicine And Pharmacology (IJMP).jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><b>ISSRA Journal of  Medicine And Pharmacology (IJMP)</b></h5>
              <p class="card-text"><b>Abbr. Title:</b> Issra J Med Pharma</p>
              <p><b>ISSN(Online):</b> XXXX-XXXX</p>
              <p class="card-text"><b>Publisher:</b> ISSRA Publishers</p>
              <p class="card-text"><b>Country of Origin:</b> INDIA</p>

              <a class="card-text" href="journal-details/ISSRA-Journal-of-Medicine-And-Pharmacology.php"><small class="btn btn-secondary">View More</small></a>
            </div>
          </div>
        </div>
      </div> -->

      <!-- <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/ISSRA Journal of Agriculture & Life Science (IJALS).jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><b>ISSRA Journal of Agriculture & Life Science (IJALS) </b></h5>
              <p class="card-text"><b>Abbr. Title:</b>Issra J Agri li sci</p>
              <p><b>ISSN(Online):</b> XXXX-XXXX</p>
              <p class="card-text"><b>Publisher:</b> ISSRA Publishers</p>
              <p class="card-text"><b>Country of Origin:</b> INDIA</p>

              <a class="card-text" href="journal-details/ISSRA-Journal-of-Agriculture-&-Life-Science.php"><small class="btn btn-secondary">View More</small></a>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/Applied Medical.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><b>ISSRA Journal of Applied Medical Sciences (IJAMS)</b></h5>
              <p class="card-text"><b>Abbr. Title:</b> Issra J App Med Sci</p>
              <p><b>ISSN(Online):</b> XXXX-XXXX</p>
              <p class="card-text"><b>Publisher:</b> ISSRA Publishers</p>
              <p class="card-text"><b>Country of Origin:</b> INDIA</p>

              <a class="card-text" href="journal-details/ISSRA-Journal-of-Applied-Medical-Sciences.php"><small class="btn btn-secondary">View More</small></a>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/ISSRA JOURNAL OF ARTS, HUMANITIES AND SOCIAL STUDIES.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><b>ISSRA Journal of Arts, Humanities and Social Studies (IJAHSS)</b></h5>
              <p class="card-text"><b>Abbr. Title:</b> Issra J Art Hum Soci Stu</p>
              <p><b>ISSN(Online):</b> XXXX-XXXX</p>
              <p class="card-text"><b>Publisher:</b> ISSRA Publishers</p>
              <p class="card-text"><b>Country of Origin:</b> INDIA</p>

              <a class="card-text" href="journal-details/ISSRA-Journal-of-Arts,-Humanities-and-Social-Studies.php"><small class="btn btn-secondary">View More</small></a>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/ISSRA Journal of Education, Linguistics and Literature (IJELL).jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><b>ISSRA Journal of Education, Linguistics and Literature (IJELL)</b></h5>
              <p class="card-text"><b>Abbr. Title:</b> Issra J Edu Lingu Lit</p>
              <p><b>ISSN(Online):</b> XXXX-XXXX</p>
              <p class="card-text"><b>Publisher:</b> ISSRA Publishers</p>
              <p class="card-text"><b>Country of Origin:</b> INDIA</p>

              <a class="card-text" href="journal-details/ISSRA-Journal-of-Education,-Linguistics-and-Literature.php"><small class="btn btn-secondary">View More</small></a>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/Bulletin.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><b>ISSRA Journal of Multidisciplinary Bulletin (IJMB) </b></h5>
              <p class="card-text"><b>Abbr. Title:</b> Issra J Mul Bull</p>
              <p><b>ISSN(Online):</b> XXXX-XXXX</p>
              <p class="card-text"><b>Publisher:</b> ISSRA Publishers</p>
              <p class="card-text"><b>Country of Origin:</b> INDIA</p>

              <a class="card-text" href="journal-details/ISSRA-Journal-of-Multidisciplinary-Bulletin.php"><small class="btn btn-secondary">View More</small></a>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/Nursing Cover.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><b>ISSRA Journal of  Nursing and Healthcare (IJNH)</b></h5>
              <p class="card-text"><b>Abbr. Title:</b>  Issra J Nur Hea</p>
              <p><b>ISSN(Online):</b> XXXX-XXXX</p>
              <p class="card-text"><b>Publisher:</b> ISSRA Publishers</p>
              <p class="card-text"><b>Country of Origin:</b> INDIA</p>

              <a class="card-text" href="journal-details/ISSRA-Journal-of-Nursing-and-Healthcare.php"><small class="btn btn-secondary">View More</small></a>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/Gynecology_page-0001.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><b>ISSRA Journal of Obstetrics and Gynecology (IJOG)</b></h5>
              <p class="card-text"><b>Abbr. Title:</b> Issra J Obs Gyne</p>
              <p><b>ISSN(Online):</b> XXXX-XXXX</p>
              <p class="card-text"><b>Publisher:</b> ISSRA Publishers</p>
              <p class="card-text"><b>Country of Origin:</b> INDIA</p>

              <a class="card-text" href="journal-details/ISSRA-Journal-of-Obstetrics-and-Gynecology.php"><small class="btn btn-secondary">View More</small></a>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="images/Veterinary Medical science.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><b>ISSRA Journal of  Veterinary Medical Science (IJVMS)</b></h5>
              <p class="card-text"><b>Abbr. Title:</b>Issra J Vet Med Sci</p>
              <p><b>ISSN(Online):</b> XXXX-XXXX</p>
              <p class="card-text"><b>Publisher:</b> ISSRA Publishers</p>
              <p class="card-text"><b>Country of Origin:</b> INDIA</p>

              <a class="card-text" href="journal-details/ISSRA-Journal-of-Veterinary-Medical-Science.php"><small class="btn btn-secondary">View More</small></a>
            </div>
          </div>
        </div>
      </div> -->

    </div>

  </div>

  </section>



  <?php include_once('partial/footer.html') ?>


  <script type="text/javascript">
    window.addEventListener("scroll", function () {
      var nav = document.querySelector("nav");
      var header = document.querySelector("header");
      nav.classList.toggle("sticky", window.scrollY > 180);
      // header.classList.toggle("hide", window.scrollY > 0);

    })
  </script>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>














</html>