<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">


    <link rel="stylesheet" href="css/style.sm.min.css">

    <link rel="stylesheet" href="css/style.all.css">
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <script>
        $(document).ready(function () {
            $('#icon').click(function () {
                $('ul').toggleClass('show');
            })
        })
    </script>

<style>

.col-75 input, textarea{
  width: 90%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

select{
  width: 93.5%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  
}



.col-75 label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container-form {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 60%;
}

.container-form h2{
    text-align: center;
    margin: 60px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
    font-size: 15px;
  }

  .container-form {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 90%;
  font-size: 10px;
}



input, select, textarea {
  width: 95%;
  font-size: 15px;

}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}


section .row {
    display: flex;
    justify-content: space-around;
    flex-direction: column;
    padding: 10px;
}




}
</style>
</head>
<body>
<?php include_once('partial/header.html')  ?>


<?php include_once('partial/nav.html') ?>

<section>


<?php  
include_once('database/dbcon.php');


$sql = "SELECT * FROM journals";
$qry = mysqli_query($con,$sql);

?>


<div class="container-form">
<h2>Manuscript Submission</h2>
  <form method="POST" action="database/editor-join.php" enctype="multipart/form-data">

  <div class="row">
      <div class="col-25">
        <label for="select">Select Mode</label>
      </div>
      <div class="col-75">
        <select id="select" name="select">
        <option value="">Select</option>
<option value="Normal">Normal Mode</option>
<option value="Fast">Fast Track Mode</option>

        </select>
      </div>
    </div>






    <div class="row">
      <div class="col-25">
        <label for="type">Article Type</label>
      </div>
      <div class="col-75">
        <select id="type" name="type">
        <option value="">Select</option>
<option value="Research article">Research article</option>
<option value="Review article">Review article</option>
<option value="Short Communication">Short Communication</option>
<option value="Case Report">Case Report</option>
<option value="Letter to editor">Letter to editor</option>

        </select>
      </div>
    </div>



    
    <div class="row">
      <div class="col-25">
        <label for="journal">Select Journal</label>
      </div>
      <div class="col-75">
        <select id="journal" name="journal" required>
        <option value="">Select</option>
        <?php
        
while($row = mysqli_fetch_assoc($qry)){
    ?>
    <option value="<?php echo $row["j_id"];  ?>"><?php echo $row["j_name"];   ?></option>
<?php
}
?>
        </select>
      </div>
    </div>



    <div class="row">
      <div class="col-25">
        <label for="author">Corresponding Author</label>
      </div>
      <div class="col-75">
        <input type="text" id="author" name="author" placeholder="Full name..">
      </div>
    </div>




    <div class="row">
      <div class="col-25">
        <label for="subject">Full Affiliation</label>
      </div>
      <div class="col-75">
        <textarea id="affiliation" name="affiliation" placeholder="Affiliation.." style="height:100px"></textarea>
      </div>
    </div>



    
    <div class="row">
      <div class="col-25">
        <label for="mail">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="mail" name="mail" placeholder="Email">
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="mobile">Mobile</label>
      </div>
      <div class="col-75">
        <input type="number" id="mobile" name="mobile" placeholder="Mobile Number (Country code mandatory)">
      </div>
    </div>







    <div class="row">
      <div class="col-25">
        <label for="manuscript">Manuscript Title</label>
      </div>
      <div class="col-75">
        <input type="text" id="manuscript" name="manuscript" placeholder="Manuscript Title">
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="name">Choose a file to upload</label>
      </div>
      <div class="col-75">
        <input type="file" accept=".docx, .doc, .pdf" id="file" name="file">
      </div>
    </div>






    <div class="row">
      <input type="submit" name="manuscript-submit" value="Submit Manuscript">
    </div>
  </form>
</div>






</section>





<?php  include_once('partial/footer.html')  ?>











   <script type="text/javascript">
       window.addEventListener("scroll", function () {
           var nav = document.querySelector("nav");
           var header = document.querySelector("header");
           nav.classList.toggle("sticky", window.scrollY > 180);
           // header.classList.toggle("hide", window.scrollY > 0);

       })
   </script>






</body>
</html>
