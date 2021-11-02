<?php
include "header1.php";
?>
<?php
if(isset($_POST['btn-send']))
{
  $firstname =  $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $Email =  $_POST['Email'];
  $Msg = $_POST['msg'];
  if(empty($firstname) || empty($lastname) || empty($Email) || empty($Msg))
  {
    header('location:contact.php?error');
  }
}
?>
<!-- // else {
// $to = "shresthasimran62@gmail.com";
// if(mail($to,$Msg,$Email))
// {
//   header("location:contact.php?success");
// }
// }
// }
// else {
//     header("location:contact.php");
// }
?> -->


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="contactpage.css">
    <style type='text/css'>
/* body{
  background-color:#E6D5D2;
} */
fieldset {
color:"black";
  width:500px;
  line-height:1.6;
}
  border:4px solid ;

label:hover {cursor:hand;}
</style>
  </head>
  <body>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28255.20463124304!2d85.352677!3d27.7203558!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1589016868374!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<h4 align="center">We'd love to hear from you, please drop us a line if you have any query.</h4>
  <div class="container">
    <div class="contactInfo">
      <div class="box">
        <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
          </div>
        <div class="text">
          <h3>Address</h3>
          <p>Mid-Baneshwor, Kathmandu<br>Opposite of whitehouse College</p>
        </div>
      </div>
      <div class="box">
        <div class="icon">
          <i class="fa fa-phone-square" aria-hidden="true"></i>
                </div>
        <div class="text">
          <h3>Phone</h3>
          <p>+977-4281007</p>
        </div>
      </div>
      <div class="box">
        <div class="icon">
          <i  class="fa fa-envelope" aria-hidden="true"></i>
                </div>
        <div class="text">
          <h3>Email</h3>
          <p>Woodlandfurnish@gmail.com</p>
        </div>
      </div>
    </div>
    <?php
    $Msg = "";
    if(isset($_GET['error']))
    {
      $Msg = "Please fill in the blanks";
      echo '<div class="alert alert-danger">'.$Msg.'</div>';
    }
    // if(isset($_GET['success']))
    // {
    //   $Msg = "Your message has been sent";
    //   echo '<div class="alert alert-success">'.$Msg.'</div>';
    // }
    //
    ?>
         <form method="post"   action="">
          <fieldset width:200px>
       	<legend><font size="5px" style  color= "red"> Contact Us:</legend></font>
       	<div class="font">
        <font color="#3B1C17">First Name:<br><input type="text" name="firstname" value="" placeholder="First name"/><br>
       	<br>Last Name:<br><input type="text" name="lastname" value="" placeholder="Last Name"/><br>
       	<br>Email Address:<br><input type="email" name="mail" value="" placeholder="Email"/><br><br>
       		Message:<br><textarea rows="8" name="msg" cols="30" placeholder="Type your Message">
       </textarea><br>
       <br><div> <button class="btn btn-success" name="btn-send">Send</button> <br><br>
        </div>
                </div>
       		</fieldset>
	</form><br><hr>
  </body>
</html>
