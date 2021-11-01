<?php
include_once('dbcon.php');



$fname = $_POST["fname"];
$lname = $_POST["lname"];
$mail = $_POST["mail"];
$phone = $_POST["phone"];
$msg = $_POST["msg"];


$qry = "INSERT INTO `get-in-touch`(`fname`, `lname`, `email`, `phone`, `msg`) VALUES ('$fname','$lname','$mail','$phone','$msg')";

$run=mysqli_query($con,$qry);
    
if($run == true)
{

    $to = "submit.issrapublishers@gmail.com";
    $subject = "Get In Touch";
    
    $message = "
    <html>
    <head>
    <title>Details</title>
    </head>
    <body>
    <h1>Get in touch Request</h1>
    <table>
    <tr>
    <th>Name:</th>
    <td>$fname , $lname</td>
    </tr>


    <tr>
    <th>mail id:</th>
    <td>$mail</td>
    </tr>
    
    <tr>
    <th>Phone No:</th>
    <td>$phone</td>
    </tr>


    <tr>
    <th>Message:</th>
    <td>$msg</td>
    </tr>
    




    </table>
    <br/>




    Thank You...
    </body>
    </html>
    ";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    // More headers
    $headers .= 'From: <official@issrapublishers.com>' . "\r\n";
    
    
    if(mail($to,$subject,$message,$headers)){
         ?>
          <script>
      alert('Successfully submitted ');
      window.location.href='../index.php';
      
      
    </script>
    <?php
  }
  else echo "error";

}






?>