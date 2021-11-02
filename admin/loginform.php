<?php
require('connection.php')
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login Panel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  </head>
  <body>
    <div class="container">
      <div class="myform">
        <!-- htmlspecialchars -> convert into entitynames which url cannot read -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
          <h2>ADMIN LOGIN</h2>
          <input type="text" placeholder="AdminName" name="AdminName">
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
<button type="submit" name="Login">LOGIN</button>
        </form>
      </div>
      <div class="image">
      <img src="dining1.jpg" alt="">
      </div>
    </div>

    <?php
    function input_filter($data)
    {
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
    }
    if(isset($_POST['Login']))  //login button clicked
    {
      //filtering user input
      $AdminName=input_filter($_POST['AdminName']);
      $AdminPass=input_filter($_POST['AdminPass']);
//escaping special symbols used in sql statement
      $AdminName=mysqli_real_escape_string($con,$AdminName);
      $AdminPass=mysqli_real_escape_string($con,$AdminPass);

//query templates
$query="SELECT Admin_Name, Admin_Password FROM admin_users where Admin_Name='".$AdminName."' and Admin_Password='".$AdminPass."'";
$result=mysqli_query($con,$query);
//prepared statement  -> more secure , prevents sql injection
// if($stmt=mysqli_prepare($con,$query))
// {
// mysqli_stmt_bind_param($stmt,"ss",$AdminName,$AdminPass); //binding values to template
// mysqli_stmt_execute($stmt);   //executing prepare statement
// mysqli_stmt_store_result($stmt); //transferring the result of execution in $stmt variable.
//
// if(mysqli_stmt_num_rows($stmt)==1)
// {
// session_start();
// $_SESSION['AdminLoginId']=$AdminName;
// header("location:Adminpanel.php");
// }
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['AdminName'] = $AdminName;
$_SESSION['AdminPass'] = $AdminPass;
header("location:Adminpanel.php");
}
else{
echo"<script> alert('Inavalid Admin Name and Password'); </script>";
}
// mysqli_stmt_close($stmt);
// }
// else
//   {
//   echo"<script> alert('SQL query cannot be prepared'); </script>";
//   }
}
        ?>
  </body>
</html>
