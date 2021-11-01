<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Editors</title>

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

<p style="margin: 50px;">Reviewers Guidelines</p> 
    
    <div class="text">

    <p style="font-weight: bold; font-size: 1rem;">Reviewers Role and Responsibilities</p>
    <p style="font-weight: normal; font-size: 1rem;">Reviewers provide an objective assessment of a submitted manuscript, and recommend whether a piece of work advances the field sufficiently to warrant authenticated publication.
</p>

<p style="font-weight: normal; font-size: 1rem;">
	Reviewer will be much appreciable in following time lines to give relevant comments on the <br/>
	Assess the relevance of the work to the journal.<br/>
	Check the novelty of original articles.<br/>
	Ensure that all relevant work is cited and discussed as appropriate.<br/>
	Check that the methodology is appropriate and properly described.<br/>
	Verify whether the conclusions are supported by the results reported.<br/>
	Check that any appropriate statistical analyses have been carried out.<br/>
	Ensure that the paper is unambiguous and comprehensible, even if the English is not perfect.<br/>
	Thoroughly go through the paper and indicate if the paper requires any English grammar, punctuation or spelling to be revised.<br/>
	Scientific notations, equations, superscript, subscript, figure, diagrams, references, bibliography etc. are devoid of any errors.<br/>

</p>
<p style="font-weight: normal; font-size: 1rem;">ISSRA Publishers follows ‘Double-blind’ peer reviewing conceals both the authors’ and reviewers’ identities, to avoid potential bias against prestigious authors and influential authors who are judged on the paper rather than their reputation.
Almost all papers submitted to reviewers for consideration will ultimately be accepted for publication or rejection; occasionally an author will withdraw their paper prior to have taken a decision. The best papers are innovative, well-researched, well-written and an asset to the respective journal field as it can set up a milestone in the field of scientific progress.
</p>
<br/>
<p style="font-weight: bold; font-size: 1rem;">Reviewers Opinion</p>

<p style="font-weight: normal; font-size: 1rem;"><b> a.	Major or Minor Revision:</b> Common procedure under reviewing followed considering factors like English comprehension, references editing, results explanation, figure reformatting etc.<br/>
<b>b.	Reviewer Rejection:</b> Reviewers have the capacity to make rejection for the manuscript if it is based on falsehood approach of presentation and scientific concept is not proven.<br/>
<b>c.	Acceptance:</b> These manuscripts are acceptable as submitted if they are well written, easy to understand, if results support the conclusion, and they add to existing published knowledge extensively.
</p>

   

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