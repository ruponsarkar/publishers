<!-- for editor -->

<?php


  if(isset($_POST['editor-submit']))
  {
    
    
    include('dbcon.php');
    $name= $_POST['name'];
    $email= $_POST['mail'];  
    $mobile=$_POST['mobile'];
    $country=$_POST['country'];
    $specialization=$_POST['specialization'];
    $affiliation=$_POST['affiliation'];
    $publication=$_POST['publication'];
    $photo = $_FILES['photo']['name'];
    $cv = $_FILES['cv']['name'];
		$tempname1 = $_FILES['photo']['tmp_name'];
    $tempname2 = $_FILES['cv']['tmp_name'];
		
		
			move_uploaded_file($tempname1,"../assets/editors/img/$photo");
      move_uploaded_file($tempname2,"../assets/editors/cv/$cv");





    $qry="INSERT INTO `editors`(`name`, `email`, `mobile`, `country`, `specialization`, `affiliation` , `publication`, `photo`, `cv`) VALUES ('$name','$email', '$mobile','$country','$specialization','$affiliation','$publication','$photo','$cv')";
    
    $run=mysqli_query($con,$qry);
    
    if($run == true)
    {

      $to = "submit.issrapublishers@gmail.com";
      $subject = "Editor Request";
      
      $message = "
      <html>
      <head>
      <title>Editors</title>
      </head>
      <body>
      <h1>Editors request received</h1>
      <table>
      <tr>
      <th>Name:</th>
      <td>$name</td>
      </tr>


      <tr>
      <th>Mobile:</th>
      <td>$mobile</td>
      </tr>
      
      <tr>
      <th>email:</th>
      <td>$email</td>
      </tr>


      <tr>
      <th>Country:</th>
      <td>$country</td>
      </tr>
      


      <tr>
      <th>Affiliation:</th>
      <td>$affiliation</td>
      </tr>

      <tr>
      <th>Publications:</th>
      <td>$publication</td>
      </tr>





      </table>
      <br/>

check all details at: htpps://issrapublishers.com/admin


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
        window.location.href='success.php';
        
        
      </script>
      <?php
    }
    else echo "error";

  }
}
?>






<!-- for reviewers -->


<?php


  if(isset($_POST['reviewer-submit']))
  {
    
    
    include('dbcon.php');
    $name= $_POST['name'];
    $email= $_POST['mail'];  
    $mobile=$_POST['mobile'];
    $country=$_POST['country'];
    $specialization=$_POST['specialization'];
    $affiliation=$_POST['affiliation'];
    $publication=$_POST['publication'];
    $photo = $_FILES['photo']['name'];
    $cv = $_FILES['cv']['name'];
		$tempname1 = $_FILES['photo']['tmp_name'];
    $tempname2 = $_FILES['cv']['tmp_name'];
		
		
			move_uploaded_file($tempname1,"../assets/reviewers/img/$photo");
      move_uploaded_file($tempname2,"../assets/reviewers/cv/$cv");


    $qry="INSERT INTO `reviewers`(`name`, `email`, `mobile`, `country`, `specialization`, `affiliation` , `publication`, `photo`, `cv`) VALUES ('$name','$email', '$mobile','$country','$specialization','$affiliation','$publication','$photo','$cv')";
    
    $run=mysqli_query($con,$qry);
    
    if($run == true)
    {

      $to = "submit.issrapublishers@gmail.com";
      $subject = "Receive Manuscript";
      
      $message = "
      <html>
      <head>
      <title>Reviewers</title>
      </head>
      <body>
      <h1>Reviewer request received</h1>
      <table>
      <tr>
      <th>Name:</th>
      <td>$name</td>
      </tr>


      <tr>
      <th>Mobile:</th>
      <td>$mobile</td>
      </tr>
      
      <tr>
      <th>email:</th>
      <td>$email</td>
      </tr>


      <tr>
      <th>Country:</th>
      <td>$country</td>
      </tr>
      


      <tr>
      <th>Affiliation:</th>
      <td>$affiliation</td>
      </tr>

      <tr>
      <th>Publications:</th>
      <td>$publication</td>
      </tr>





      </table>
      <br/>

check all details at: htpps://issrapublishers.com/admin


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
        window.location.href='success.php';
        
        
      </script>
      <?php
    }
    else echo "error";

  }
}
?>


















<?php


  if(isset($_POST['manuscript-submit']))
  {
    
    
    include('dbcon.php');
    $select= $_POST['select'];
    $type= $_POST['type'];
    $author= $_POST['author'];  
    $email=$_POST['mail'];
    $mobile=$_POST['mobile'];
    $affiliation= $_POST['affiliation'];
    $journal=$_POST['journal'];
    $manuscript=$_POST['manuscript'];
    
    $file = $_FILES['file']['name'];
  	$tempname = $_FILES['file']['tmp_name'];
  		
			move_uploaded_file($tempname,"../assets/manuscript/$file");
      

    $qry="INSERT INTO `manuscript`(`mode`, `author`, `email`, `mobile`, `journal`, `manuscript`, `type`, `affiliation` , `file`) VALUES ('$select','$author', '$email','$mobile','$journal','$manuscript', '$type', '$affiliation','$file')";
    
    $run=mysqli_query($con,$qry);
    
    if($run == true)
    {

      $to = $email .", submit.issrapublishers@gmail.com";
      $subject = "Receive Manuscript";
      
      $message = "
      <html>
      <head>
      <title>Details</title>
      </head>
      <body>
      <h1>One Manuscript received</h1>
      <table>
      <tr>
      <th>Mode Select:</th>
      <td>$select</td>
      </tr>


      <tr>
      <th>Article type:</th>
      <td>$type</td>
      </tr>
      
      <tr>
      <th>Journal:</th>
      <td>$journal</td>
      </tr>


      <tr>
      <th>Author Name:</th>
      <td>$author</td>
      </tr>
      


      <tr>
      <th>Affiliation:</th>
      <td>$affiliation</td>
      </tr>



      <tr>
      <th>Author's Mail:</th>
      <td>$email</td>
      </tr>


      <tr>
      <th>Author's Mobile:</th>
      <td>$mobile</td>
      </tr>





      <tr>
      <th>Title:</th>
      <td>$manuscript</td>
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
        window.location.href='success.php';
        
        
      </script>
      <?php
    }
    else echo "error";

  }
}
?>
















