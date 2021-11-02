<?php
session_start();
$con=mysqli_connect("localhost","root","","onlinestore");
if(mysqli_connect_error()){
  echo"<script>
  alert('cannot connect to database');
    window.location.href='mycart.php';
  </script>";
  exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST")    //checking the server method is post or not
{
  if(isset($_POST['purchase']))   //checking make purchse button
  {
$query1 = "INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mod`) VALUES ('$_POST[fullname]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";

if(mysqli_query($con,$query1))
{
  //prepared statement -> creates templates    //preparing query once and executing it multiple times
$Order_Id=mysqli_insert_id($con);
$query2="INSERT INTO `user_orders`(`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
$stmt=mysqli_prepare($con,$query2);
if($stmt)
{
  mysqli_stmt_bind_param($stmt,"isii",$Order_id,$Item_Name,$Price,$Quantity);       //binding the prepare statement with parameters '?''
  foreach($_SESSION['cart'] as $key => $values)
  {
    $Item_Name=$values['Item_name'];   //values = form names
      $Price=$values['price'];
        $Quantity=$values['Quantity'];
        mysqli_stmt_execute($stmt);
  }
  unset($_SESSION['cart']);
  echo"<script>
  alert('Order Placed');
    window.location.href='index.php';
  </script>";

}
else {

    echo"<script>
    alert('SQL query prepared error');
      window.location.href='mycart.php';
    </script>";
  }
}
else {
  {
    echo"<script>
    alert('SQL error');
      window.location.href='mycart.php';
    </script>";
  }
}
  }
}
 ?>
