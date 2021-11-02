<?php


$con=mysqli_connect("localhost","root","","testing");
if(mysqli_connect_error()){
  echo"cannot connect to database";
  exit();
}?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://getbootstrap.com/docs/5.1/content/tables/">
  </head>
  <body>
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-12">
<table class="table text-center table-dark table-striped table-hover">
  <thead>
<tr>
<th scope="col">Order ID</th>
<th scope="col">Customer Name</th>
<th scope="col">Phone No</th>
<th scope="col">Address</th>
<th scope="col">Pay Mode</th>
<th scope="col">Orders</th>
</tr>
</thead>
<tbody>
  <?php
  $query="SELECT * FROM `order_manager`";
$result=mysqli_query($con,$query);
while($user_fetch=mysqli_fetch_assoc($result))
{
  echo"
  <tr>
  <td>$user_fetch[Order_id]</td>
  <td>$user_fetch[Full_Name]</td>
  <td>$user_fetch[Phone_No]</td>
  <td>$user_fetch[Address]</td>
  <td>$user_fetch[Pay_Mod]</td>
  <td>
  <table class='table table-dark text-center'>
    <thead>
  <tr>
  <th scope='col'>Item Name</th>
  <th scope='col'>Price</th>
  <th scope='col'>Quantity</th>
  </tr>
  </thead>
  <tbody>
  ";
 $order_query="SELECT * FROM `user_orders` WHERE Order_id='$user_fetch[Order_id]'";
 $order_result=mysqli_query($con,$order_query);
 while($order_fetch=mysqli_fetch_assoc($order_result))
 {
   echo"<tr>
   <td>$order_fetch[Item_Name]</td>
   <td>$order_fetch[Price]</td>
   <td>$order_fetch[Quantity]</td>
   ";
 }
    echo"
  </tbody>
  </table>
  </td>
  </tr>"
  ;
}
   ?>

</tbody>
</table>
</div>

</div>

</div>
</body>
</html>
