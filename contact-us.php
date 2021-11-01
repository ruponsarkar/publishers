<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/style.sm.min.css">
    <link rel="stylesheet" href="css/style.right-box.css">
    <link rel="stylesheet" href="css/slider-style.css">
    <link rel="stylesheet" href="css/glow-text.css">
    <link rel="stylesheet" href="css/vartical-text.css">
    <link rel="stylesheet" href="css/contact.css">

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

<?php include_once('partial/header.html')  ?>


<?php include_once('partial/nav.html') ?>

<section>
<div class="resources" style="background-color: white; height: auto; width: 80%; margin: 40px; padding: 50px;">

<br/>



<div class="contact-container">

<div class="contact-us">

<h1>Contact Us</h1>

    <p><i class="fas fa-home"></i> Address : Build No- 34, Uttar Nowabil, Ambari, Hojai (Assam)</p>

    <p> <i class="fas fa-phone"></i> Contact No:   +91&nbsp;<a href="tel:+919101511909">9101511909</a>/&nbsp;+91&nbsp;<a href="tel:+917636929055">7636929055</a> </p>

    <p> <i class="fab fa-whatsapp"></i> Whatsapp:   +91&nbsp;<a href="whatsapp://send?text=Hello!&phone=+919101511909">9101511909</a>/&nbsp;+91&nbsp;<a href="whatsapp://send?text=Hello!&phone=+917636929055">7636929055</a> </p>

    <p><i class="fas fa-envelope"></i> Mail : <a href="mailto:issrapublishers@gmail.com"> issrapublishers@gmail.com</a></p>


</div>






<div class="get-touch">

<h1>Get In Touch</h1>

<form action="database/contact-us-data.php" method="post">
<input type="text" name="fname" id="fname" placeholder="First Name">
<input type="text" name="lname" id="lname" placeholder="Last Name">


<input type="email" name="mail" id="mail" placeholder="Enter email address">

<input type="number" name="phone" id="phone" placeholder="Enter your phone number">

<input type="text" name="msg" id="msg" placeholder="Type your message">

<input type="submit" value="Submit">

    </form>


</div>




</div>























</section>
 
<?php include_once('partial/footer.html');   ?>


</body>
</html>