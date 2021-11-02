<?php
$message="";
  if($_POST) {
$conn = mysqli_connect("localhost","root","","login");
$email=$_POST['email'];  //used to collect form data after submitting an HTML form with method="post"
$psw = $_POST['psw'];
$query = "SELECT * FROM form WHERE Email ='$email' and Password='$psw'";
$result = mysqli_query($conn,$query);
$count  = mysqli_num_rows($result);
if($count==1) {

         header('location:Ecommerce.php');
       }
       else{
          echo '<script type="text/javascript"> window.onload = function(){
      alert("Invalid credentials!");
    }</script>';          //window.onload = function() -> display alert box in same window
  }
  }
  ?>
<html>
<head>
    <style>
 #main{
     width: 100%;
   height: 100%;
   padding-top: 50px;
   left: 0;
   position: fixed;
   display: none;
   text-decoration-color: white;
 }
 #pop-up{
   width: 500px;
   height: 580px;
   box-sizing: border-box;
      padding: 20px;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
 }
 #pop-up .form-popup {
 display: none;
 position: fixed;
 bottom: 0;
 right: 5px;
 border: 3px solid #f1f1f1;
 z-index: 9;


 }
 .form-container {
   max-width: 350px;
   padding: 10px;
   background-color: black;
   /* opacity: 0.7; */
   border-radius: 20px;
 }
 .form-container #close-btn{
   display: inline;
   float:right;
 }
 .form-container #close-btn:hover{
   background-color: #000;;
   color: red;
 }
 .form-container input[type=text], .form-container input[type=password] {
   padding:  16px 20px;
   margin: 14px 0px 20px 0px;
   border: none;
   background: #f1f1f1;
   padding-right: 5px;
   width: 90%;
 }
 .form-container input[type=text], #icon{
       background-image: url('message.png');
       background-size: 22px 22px;
       background-position: 12px 12px;
     padding: 10px,10px;
         background-repeat: no-repeat;
 }
 .form-container input[type=text], #icon1{
       background-image: url('padlock.png');
       background-size: 22px 22px;
       background-position: 12px 12px;
     padding: 10px,10px;
         background-repeat: no-repeat;
 }
 .form-container input[type=text]:focus, .form-container input[type=password]:focus {
   background-color: #ddd;
   outline: none;
 }

 .form-container .btn {
   background-color: red;
     color: white;
     margin-left: 25%;
   padding:16px;
   border-radius: 20%, 20%;
   border-radius: 10px;
      width: 50%;
   margin-bottom:10px;
   opacity: 0.8;

 }
 .form-container .cancel {
   background-color: red;
 }
 .form-container .btn:hover, .open-button:hover {
   opacity: 2.8;
 }
 .footer-bottom p{
  text-align: center;
    background-color: black;
  color: white;
  margin-top: 0px;
  font-size: 12px;
  height: 3%;
  width: 100%;
  margin-top: 0px;
}
  </style>
  <title>Ecommerce website</title>
  <link rel = "stylesheet" type="text/css" href="designing.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
  <body>
    <script type="text/javascript" src="custom.js">
    </script>

    <div id="main">
 <div id="pop-up">
   <form action="" class="form-container" method="post">
         <button type="button" id="close-btn">X</button>
   <h1 style="color:white; text-align:center">Login</h1>
      <label for="email" style="color:white;"><b>Email</b></label>
   <input type="text" id="icon" style="text-indent:17px;" placeholder="  Enter Email" name="email" required>

      <label for="psw" style="color:white;"><b>Password</b></label>
      <input type="password" placeholder="Password" name="AdminPass" required="" id="id_password"><i class="far fa-eye-slash" style="margin-left: -40px; cursor: pointer;" id="togglePassword"></i>
    <script type="text/javascript">
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#id_password');
    togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
    });
    </script>

   <button type="submit" class="btn">Login</button>
   <h2 style="color:white">Don't have an account? <a href="Account.php" style="color:lightBlue; text-decoration:none">Sign Up</a></h2>
   <!-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button> -->
 </form>
 </div>
 </div>
  <p>STYLE COMFORT AND<br>  AFFORDABLE</p>

 <div class="nav">
            <ul>
            <li><a href="Ecommerce.php">Home</a></li>
               <li><a href="Product.php">Products</a></li>
                  <li><a href="categories.php">Categories</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="Account.php">Account</a></li>
                  <li><a href="#">Shop</a></li>
            </ul>
 </div>
           <div class="image">
             <script>
             function imagechange(){
             document.getElementById("image").src = "images/chair.jpg";
             }
             function change(){
             document.getElementById("image").src= "images/furniture.jpg";
             }
               </script>
               <img id="image" onmouseover = "imagechange()" onmouseout="change()" height="800px" width="1400px" src="images/chair.jpg" alt="image">
               </div>

             <p> Find a bright ideal to suit your taste with our great selection</p>
         <div class="container">
           <div class="box">
             <img src="images/f1.jpg">
           </div>
           <div class="box">
             <img src="images/f2.jpg">
           </div>
           <div class="box">
             <img src="images/f3.jpg">
           </div>
         </div>
         <hr>

<!-- footer portion -->
  <?php
  include('footer.php'); ?>
          <div class="footer-bottom">
          <p>copyright &copy; 2021 Samarpan Academy. Designed by <span>Simran</span></p>
      </div>


</body>
</html>
