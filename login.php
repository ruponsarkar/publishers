<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<!-- <link href="responsive_style.css" type="text/css" rel="stylesheet"/> -->


<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <!-- <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/style.sm.min.css"> -->
    <link rel="stylesheet" href="css/style.right-box.css">
    <link rel="stylesheet" href="css/slider-style.css">
    <link rel="stylesheet" href="css/glow-text.css">
    <link rel="stylesheet" href="css/vartical-text.css">

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
    #wrapper
{
 margin:50px;
 padding:0px;
 text-align:center;
 width:995px;
 height: 400px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#424949;
}
#wrapper h1 p
{
font-size:18px;
}
.form_div
{
width:400px;
height: 300px;
margin-left:320px;
padding:10px;
background-color:#424949;
}
.form_div .form_label
{
margin:15px;
margin-bottom:30px;
font-size:25px;
font-weight:bold;
color:white;
text-decoration:underline;
}
.form_div input[type="text"],input[type="password"]
{
width:230px;
height:40px;
border-radius:2px;
font-size:17px;
padding-left:5px;
border:none;
}
.form_div input[type="submit"]
{
width:230px;
height:40px;
border:none;
border-radius:2px;
font-size:17px;
background-color:#7F8C8D;
border-bottom:3px solid #616A6B;
color:white;
font-weight:bold;
}

@media only screen and (min-width:700px) and (max-width:995px)
{
#wrapper
{
width:100%;

}
#wrapper h1
{
font-size:30px;
}
.form_div
{
width:50%;
margin-left:25%;
padding-left:0px;
padding-right:0px;
}
.form_div input[type="text"],input[type="password"]
{
width:80%;
}
.form_div textarea
{
width:80%;
}
.form_div input[type="submit"]
{
width:80%;
}
}
@media only screen and (min-width:400px) and (max-width:699px)
{
#wrapper
{
width:100%;
}
#wrapper h1
{
font-size:30px;
}
.form_div
{
width:60%;
margin-left:20%;
}
.form_div input[type="text"],input[type="password"]
{
width:80%;
}
.form_div input[type="submit"]
{
width:80%;
}
}
@media only screen and (min-width:100px) and (max-width:399px)
{
#wrapper
{
width:100%;
}
#wrapper h1
{
font-size:25px;
}
.form_div
{
width:90%;
margin-left:5%;
padding-left:0px;
padding-right:0px;
}
.form_div input[type="text"],input[type="password"]
{
width:80%;
}
.form_div input[type="submit"]
{
width:80%;
}
}
</style>



</head>
<body>

<?php include_once('partial/header.html')  ?>


<?php include_once('partial/nav.html') ?>

    <section>
<div id="wrapper">

<div class="form_div">
<p class="form_label">LOGIN FORM</p>
<form method="post" action="">
<p><input type="text" placeholder="Enter Email"></p>
<p><input type="password" placeholder="Enter Password"></p>

<p><input type="submit" value="LOGIN"></p>
</form>
</div>
<br>
<br>


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