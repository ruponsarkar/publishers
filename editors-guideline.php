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

<p style="margin: 50px;">Editors Guidelines</p> 
    
    <div class="text">

    <p style="font-weight: bold; font-size: 1rem;">Editorial Board Members Role and Responsibilities</p>
    <p style="font-weight: normal; font-size: 1rem;">The editorial board, sometimes known as the (editorial) advisory committee, is a team of individuals in the journal’s field. Some individuals may also belong to the editorial boards of other journals.</p>

    <p style="font-weight: normal; font-size: 1rem;">o	Expertise in subject matter.<br/>
o	Reviewing submitted manuscripts. <br/>
o	Advising on journal policy and scope.<br/>
o	Identifying subjects and conferences for special issues which they might also help to organize and/or guest edit.<br/>
o	Attracting new authors and submissions.<br/>
o	Ideally submitting some of their own work for consideration.<br/>
o	To ensure a supply of high-quality manuscripts to the Publishing House (ISSRA) in quantities that can maintain the publishing schedule of the journal; if insufficient manuscripts are being submitted, then you should discuss how to address this with your publishing contact.<br/>
o	To keep vision that the subject matter of the manuscripts reflects any changes of direction in the field of study to incorporate newly-emerging work; this may necessitate inviting articles or special issues.<br/>
o	Give suggestion in selection of the editorial board, in co-operation with your publishing contact.<br/>
o	Continually engage the editorial board on the progress of the journal and update and include them on ideas for editorial development. The editorial board should be involved formally through an annual editorial board meeting or informally in ad hoc meetings and discussions.<br/>
o	To provide strategic input into the journal’s development. The publishing contact will be in touch regularly to report on the journal’s performance and suggest possible strategies for development, as well as discuss your suggestions.<br/>
o	Encouragement in highlighting commercial advertising, supplement, and reprint opportunities, if these forms act as important sources of revenue generation for the journal.<br/>
o	Promotion of the journal among peers and colleagues.
</p>
<p style="font-weight: normal; font-size: 1rem;">Due to enormous number of submissions and the scope of the journal being broad it might not possible for one editor to make informed decisions about submissions in all subject areas. So categorically referred </p>

<p style="font-weight: normal; font-size: 1rem;">1.	Editor-in-chief.<br/>
2.	Co-Editors.<br/>
3.	Associate Editors.<br/>
4.	Section Editors.<br/>
5.	Editorial Advisor.<br/>
6.	External Editors.<br/>
7.	Guest Editors.<br/>
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