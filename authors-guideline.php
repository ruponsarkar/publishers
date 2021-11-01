<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authors Guideline</title>

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

    <link rel="stylesheet" href="css/text-slide.css">
    
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
<?php  include_once('partial/nav.html') ?>


<section>
        <div class="container">

            <div class="left">
                
               
            <div class="guideline" style="height:auto;">

            <p style="margin: 50px;">Authors Guidelines</p>
                
                <div class="text">

               <p> 1. Title/Heading </p>
<p style="font-weight: normal; font-size: 15px;">Suitable to the subject and not irrelevant to its detail work.</p>
<p> 2. Author Affiliation </p>

<p style="font-weight: normal; font-size: 15px;">
Respective Author Full Name, Department/Institution/University, City should be drafted with the article.
</p>

<p> 3. Corresponding Author </p>

<p style="font-weight: normal; font-size: 15px;">
Full Name, Department/Institution/University, City, State, Country, Telephone, Fax and Email.
<p> 4. Abstract </p>

<p style="font-weight: normal; font-size: 15px;">
Should be relevant, self?explanatory, comprehensive and brief in nature correlating to the total subject matter and give a notion as summary to the detailed script portrayed by the author while getting the experiment findings in exhaustive manner. It should also relate to significant outcome and further scope to continue in the field.
</p>

<p> 5. Keywords </p>

<p style="font-weight: normal; font-size: 15px;">
In alphabetical order, separated with semicolons and exhibit catchy nature with respect to the subject.
</p>

<p>6. Textincludes the following</p>

<p style="font-weight: normal; font-size: 15px;">o	 Introduction: states the reason for the research: identifies and discusses findings of others, includes a review of the literature.</p>
<p style="font-weight: normal; font-size: 15px;">o	Materials and Methods: describes the research population or study sample, describes the method used to gather information or data collection and describes the means used for measuring or measures.</p>
<p style="font-weight: normal; font-size: 15px;">o	Results: summarizes the results and present findings using text, charts, graphs and tables, Legends for tables, charts, graphs and figures.</p>
<p style="font-weight: normal; font-size: 15px;">o	Discussion: analyzes findings, explains the significance of the research, and suggests future projects</p>
<p style="font-weight: normal; font-size: 15px;">o	References: an alphabetical listing of works that were cited and used to support the research</p>

</p>

<p>7. Acknowledgement</p>
<p style="font-weight: normal; font-size: 15px;">
Includes affirmation of individuals, grant details, funds, and conflict of interest.
Format preferably in Word?Processing i.e. Microsoft word (DOC, DOCX).</p>

                


            </div>
            </div>



            </div>



            <div class="right">


                <div class="box3">
                    <div class="head3">
                        <div class="head_board">
                            <span>Editorial Board </span>
                        </div>
                        <div class="editor">                    

 <?php include_once("partial/slide-editorial-board.php")  ?>

                   </div>
               </div>
                </div>
                
                <div class="box3-part2"><button style="font-size:24px"> <i class="fa fa-credit-card"></i> Pay Online</button></div>
            </div>








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


  <!-- for marqure -->
  <script>
        var myMarquee = document.getElementById('myMarquee');
        run();
        function run() {
            setTimeout(function () {
                myMarquee.stop();
                setTimeout(function () {
                    myMarquee.start();
                    run();
                }, 2600);
            }, 2600);
        }
    </script>
    
</body>
</html>