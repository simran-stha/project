<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
      <a class="navbar-brand" href="Ecommerce.php">WoodLand Furniture</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
         </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li>
        <a class="nav-link"  style="font-size:18px; margin-right:20px;" href="Ecommerce.php">Home</a>
      </li>
      <li>
        <a class="nav-link" style="font-size:18px; margin-right:20px;"" href="Product.php">Product</a>
      </li>
         <li>
          <a class="nav-link" style="font-size:18px; margin-right:20px;"" href="categories.php">Categories</a>
        </li>
        <li>
          <a class="nav-link" style="font-size:18px; margin-right:20px;"" href="contact.php">Contact</a>
        </li>
        <li>
          <a class="nav-link" style="font-size:18px; margin-right:20px;"" href="Account.php">Account</a>
        </li>
          </ul>
  </div>
  <div>
<?php
$count=0;
if(isset($_SESSION['cart']))
{
  $count=count($_SESSION['cart']);
} ?>
<a href="mycart.php" class="btn  btn-success"><span style=font-size:30px;"><i class="fa fa-shopping-cart"  aria-hidden="true"></i></span>(<?php echo $count; ?>)</a>
<!-- <a href="mycart.php" class="btn btn-outline-success">My Cart (<?php echo $count; ?>)</a> -->
  </div>
    </div>
     </nav>
  </body>
</html>
