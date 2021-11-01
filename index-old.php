<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ISSRA</title>



    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <!-- <link rel="stylesheet" href="css/style.min.css"> -->
    <link rel="stylesheet" href="css/style.sm.min.css">
    <link rel="stylesheet" href="css/style.right-box.css">
    <link rel="stylesheet" href="css/slider-style.css">
    <link rel="stylesheet" href="css/glow-text.css">
    <link rel="stylesheet" href="css/vartical-text.css">
    <link rel="stylesheet" href="css/animate-line.css">

    <link rel="stylesheet" href="css/style.all.css">

    <!-- <link rel="stylesheet" href="css/developer.css"> -->



    <link rel="stylesheet" href="css/text-slide.css">
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  


   

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <?php include_once('partial/ads-data.php');   ?>
    <script>
        $(document).ready(function () {
            $('#icon').click(function () {
                $('ul').toggleClass('show');
            })
        })
    </script>
</head>

<body>
 <?php include_once('partial/header.html')  ?>


<?php include_once('partial/nav.html') ?>

    <section>
        <div class="container">

            <div class="left">
                <div class="box1">
                    <div class="head1">
                        <input type="button" onclick="window.location.href='join-form.php';" value="Join as Editor">
                        <input type="button" onclick="window.location.href='for-reviewer.php';" value="Join as Reviewer">
                        <input type="button" value="Join Membership">
                    </div>
                   





                    <div class="head1-part1">
                    <div class="head_board">
                            <span>Resources </span>
                        </div>
                        <input type="button" onclick="window.location.href='resources/Manuscript-Preparation-Guidelines.php';" value="Manuscript Preparation Guidelines">

                        <input type="button" onclick="window.location.href='resources/Manuscript-Processing.php';" value="Manuscript Processing and Withdrawal Policy">

                        <input type="button" onclick="window.location.href='resources/APA-Style-(6th Edition).php';" value="APA Style (6th Edition)">

                        <input type="button" onclick="window.location.href='resources/Writing-a-good-research-paper.php';" value="Writing a good research paper">

                        <input type="button" onclick="window.location.href='resources/Google-Language-Translator.php';" value="Google Language Translator">

                        <input type="button" onclick="window.location.href='resources/Research-Guidelines.php';" value="Research Guidelines">

                        <input type="button" onclick="window.location.href='resources/Publication-Ethics-and-Malpractice-Statement(PEMS).php';"  value="Publication Ethics and Malpractice Statement">
                    </div>



                </div>

                <div class="box2">
                    <div class="name-journal">Journals</div>

                    <div class="main">
                        <div class="slider">
                            <ul class="slider-parent">
                                <li class="images-list" data-slider="1">
                                   <a href="journals-list.php"> <img src="images/Applied Medical.jpg">  </a>
        
                                   <a href="journals-list.php"><img src="images/Gynecology_page-0001.jpg">
                                </a>


                                <a href="journals-list.php"><img src="images/ISSRA Journal of  Biosciences (IJB).jpg">
                            </a>
                                   
                            <a href="journals-list.php"><img src="images/ISSRA Journal of  Medicine And Pharmacology (IJMP).jpg">
                        </a>
                                </li>

                                <li class="images-list" data-slider="2">
                                <a href="journals-list.php"> <img src="images/ISSRA Journal of Agriculture & Life Science (IJALS).jpg">
                            </a>
                                    
                            
                            <a href="journals-list.php"><img src="images/ISSRA JOURNAL OF ARTS, HUMANITIES AND SOCIAL STUDIES.jpg"></a>

                                 <a href="journals-list.php">    <img
                                        src="images/ISSRA Journal of Education, Linguistics and Literature (IJELL).jpg">
                                    </a>
     
                                    <a href="journals-list.php"><img src="images/bulletin.jpg"></a>

                                </li>

                                <li class="images-list" data-slider="6">
                                <a href="journals-list.php"><img src="images/Applied Medical.jpg">
                            </a>
                            
                            
                            <a href="journals-list.php"><img src="images/Gynecology_page-0001.jpg"></a>

                            <a href="journals-list.php"><img src="images/ISSRA Journal of  Biosciences (IJB).jpg"></a>

                            <a href="journals-list.php"><img src="images/ISSRA Journal of  Medicine And Pharmacology (IJMP).jpg"></a>
                                </li>
                            </ul>
                            <ol class="buttom-circles">
                                <li class="buttom-circles-list slider-active" data-slider="1"><i
                                        class="fa fa-circle-thin"></i></li>
                                <li class="buttom-circles-list" data-slider="2"><i class="fa fa-circle-thin"></i></li>
                          
                                <li class="buttom-circles-list" data-slider="6"></li>
                            </ol>
                            <i class="fa fa-chevron-right fa-5x"></i>
                            <i class="fa fa-chevron-left fa-5x"></i>
                        </div>
                    </div>



    <div class="linearea">

    <div class="line1"></div>

    </div>
    <br/>

<?php include_once('partial/glow-words.php')  ?>



<br/>
     <div class="linearea">

<div class="line1"></div>


</div>
<br/>


<?php include_once('partial/ads.html')  ?>


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
                
                <div class="box3-part2"><button onclick="window.location.href='payment/razorpay/checkout.php';" style="font-size:24px"> <i class="fa fa-credit-card"></i> Pay Online</button></div>




                <div class="track">
                        <input type="button" value="Track Your Article">
                        
                        <input type="text" name="search_article" placeholder="Enter  Manuscript Number">
                        <input type="submit" value="Track" name="submit_manu-id">


                    </div>


            </div>

        </div>

    </section>






 <?php  include_once('partial/footer.html')  ?>





    <script type="text/javascript">
        window.addEventListener("scroll", function () {
            var nav = document.querySelector("nav");
            var header = document.querySelector("header");
            nav.classList.toggle("sticky", window.scrollY > 220);
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



    <script>
        const root = document.documentElement;
        const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
        const marqueeContent = document.querySelector("ul.marquee-content");

        root.style.setProperty("--marquee-elements", marqueeContent.children.length);

        for (let i = 0; i < marqueeElementsDisplayed; i++) {
            marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
        }
    </script>






    <!-- for slider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/slider-function.js"></script>








</body>

</html>