<!DOCTYPE html>
<html>
<head>
<title>Processing Fees</title>
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/style.sm.min.css">
    <link rel="stylesheet" href="css/style.right-box.css">
    <link rel="stylesheet" href="css/slider-style.css">
    <link rel="stylesheet" href="css/glow-text.css">
    <link rel="stylesheet" href="css/vartical-text.css">

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
<style>
table {
  border-collapse: collapse;
  width: 90%;
  margin: 40px;
  background-color: white;

}
th{
background-color : black;
color: white;
height: 20px;

}

th, td {
  padding: 8px;
  text-align: left;
  border: 1px solid #DDD;
}

tr:hover {background-color: #D6EEEE;}
</style>
</head>
<body>

<?php include_once('partial/header.html')  ?>


<?php include_once('partial/nav.html') ?>


<section>
<div class="processing-fees">
<p style="margin-top: 100px; font-size: x-large; font-weight: bold; color: brown; text-align:center;">Processing Fees</p> 


<table>
  <tr>
    <th rowspan="2">Journal Name</th>
    <th colspan="2"><center>Normal Publications Fees<center></th>

    <th colspan="2"><center>Fast Track Publications Fees<center></th>
   
  </tr>


  <tr>
    <th>Foreign (USD)</th>
    <th>
    Indian (Rupees)
  </th>

    <th>Foreign (USD)</th>
    <th>Indian (Rupees)</th>
  
  </tr>






  <tr>
    <td>ISSRA Journal of Applied Medical Sciences (IJAMS) </td>
    <td>30 USD</td>
    <td>2000 INR</td>
    <td>50 USD</td>
    <td>3500 INR</td>
  </tr>
  <tr>
    <td>ISSRA Journal of Agriculture & Life Sciences (IJALS)</td>
    <td>30 USD</td>
    <td>2000 INR</td>
    <td>50 USD</td>
    <td>3500 INR</td>
  </tr>
  <tr>
    <td>ISSRA Journal of Arts, Humanities And Social Studies (IJAHSS)</td>
    <td>30 USD</td>
    <td>2000 INR</td>
    <td>50 USD</td>
    <td>3500 INR</td>
  </tr>
  <tr>
    <td>ISSRA Journal of Education, Linguistics and Literature (IJELL)</td>
    <td>30 USD</td>
    <td>2000 INR</td>
    <td>50 USD</td>
    <td>3500 INR</td>
  </tr>
  <tr>
    <td>ISSRA Journal of Biosciences (IJB)</td>
    <td>30 USD</td>
    <td>2000 INR</td>
    <td>50 USD</td>
    <td>3500 INR</td>
  </tr>
  <tr>
    <td>ISSRA Journal of Multidisciplinary Bulletin (IJMB)</td>
    <td>30 USD</td>
    <td>2000 INR</td>
    <td>50 USD</td>
    <td>3500 INR</td>
  </tr>
  <tr>
    <td>ISSRA Journal of Medicine And Pharmacology (IJMP)</td>
    <td>30 USD</td>
    <td>2000 INR</td>
    <td>50 USD</td>
    <td>3500 INR</td>
  </tr>
  <tr>
    <td>ISSRA Journal of Nursing And Healthcare (IJNH)</td>
    <td>30 USD</td>
    <td>2000 INR</td>
    <td>50 USD</td>
    <td>3500 INR</td>
  </tr>
  <tr>
    <td>ISSRA Journal of Veterinary Medical Sciences (IJVMS</td>
    <td>25 USD</td>
    <td>1500 INR</td>
    <td>50 USD</td>
    <td>3500 INR</td>
  </tr>
  <tr>
    <td>ISSRA Journal of Obstetrics And Gynecology (IJOG)</td>
    <td>25 USD</td>
    <td>1500 INR</td>
    <td>50 USD</td>
    <td>3500 INR</td>
  </tr>
</table>





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
