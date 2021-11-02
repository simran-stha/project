<?php
include("header1.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
  <body>
      <div class="container mt-5">
      <div class="row">
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
            <div class="card">
            <img src="images/sofadesign1.jpg" class="card-img-center">
            <div class="card-body text-center">
              <h5 class="card-title">Sofa</h5>
              <p class="card-text">Price: Rs.450</p>
              <button type="submit" name="Add_To_cart" class="btn btn-info">Add To Cart</button>
<input type="hidden" name="Item_name" value="sofadesign1">
<input type="hidden" name="price" value="450">
            </div>
          </div>
        </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="images/sofa10.jpg" class="card-img-center">
            <div class="card-body text-center">
              <h5 class="card-title">Sofa</h5>
              <p class="card-text">Price: Rs.450</p>
              <button type="submit"  name="Add_To_cart" class="btn btn-info">Add To Cart</button>
<input type="hidden" name="Item_name" value="sofa10">
<input type="hidden" name="price" value="500">
            </div>
          </div>
          </form>
        </div>
        <div class="col-lg-3">
          <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="images/sofadesign1.jpg" class="card-img-center">
            <div class="card-body text-center">
              <h5 class="card-title">Sofa</h5>
              <p class="card-text">Price: Rs.450</p>
              <button type="submit" name="Add_To_cart" class="btn btn-info">Add To Cart</button>
<input type="hidden" name="Item_name" value="sofadesign1">
<input type="hidden" name="price" value="450">

            </div>
          </div>
          </form>
        </div>
      </div>

    </div>
  </body>
</html>
