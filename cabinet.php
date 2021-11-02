<?php
include('header1.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="cabinet.css"> -->
    <title></title>
  </head>
  <body>
    <div class="container mt-5" >
        <div class="card">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." id="image" class="img-fluid rounded-start" alt="...">
      <script>
      let image = document.getElementById('image');
      let pictures = ['images/kitchen1.jpg','images/kitchen2.jpg','images/kitchen3.jpg']
      setInterval(function(){
      let random = Math.floor(Math.random() * 3);
      image.src = pictures[random];
    }, 600);
      </script>
    </div>
    <div class="col-md-7">
      <div class="card-body mt-5">
        <h3 class="card-title">Kitchen Cabinets</h3>
        <p class="card-text" style="font-style:italic; font-size:20px">Your cabinet is the centre of attention in your kitchen and
            gives the perfect look of the entire room. When shopping for cabinets designs online,
            look for the right material, colour, and size, especially because kitchen cabinets prices vary by material and design.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container  mt-5">
<div class="row">
  <div class="col-lg-3">
    <form action="manage_cart.php" method="POST">
      <div class="card">
      <img src="images/cab8.jpg" class="card-img-center">
      <div class="card-body text-center">
        <h5 class="card-title">Wooden Kitchen cabinet</h5>
        <p class="card-text" style="color:#807c7c;">Price: Rs.85000</p>
        <button type="submit" name="Add_To_cart" class="btn btn-info">Add To Cart</button>
<input type="hidden" name="Item_name" value="Wooden Kitchen Cabinet">
<input type="hidden" name="price" value="6500">
      </div>
    </div>
  </form>
  </div>

  <div class="col-lg-3">
    <form action="manage_cart.php" method="POST">
      <div class="card">
      <img src="images/cabinet2.jpg" class="card-img-center">
      <div class="card-body text-center">
        <h5 class="card-title">Cabinet</h5>
        <p class="card-text"  style="color:#807c7c;">Price: Rs.15000</p>
        <button type="submit" name="Add_To_cart" class="btn btn-info">Add To Cart</button>
<input type="hidden" name="Item_name" value="Cabinet">
<input type="hidden" name="price" value="15000">
      </div>
    </div>
  </form>
  </div>
  <div class="col-lg-3">
    <form action="manage_cart.php" method="POST">
      <div class="card">
      <img src="images/cab3.jpg" class="card-img-center">
      <div class="card-body text-center">
        <h5 class="card-title">Alpina white kitchen cabinet</h5>
        <p class="card-text" style="color:#807c7c;">Price: Rs.10000</p>
        <button type="submit" name="Add_To_cart" class="btn btn-info">Add To Cart</button>
<input type="hidden" name="Item_name" value="Alpina white kitchen cabinet">
<input type="hidden" name="price" value="10000">
      </div>
    </div>
  </form>
  </div>

  <div class="col-lg-3">
    <form action="manage_cart.php" method="POST">
      <div class="card">
      <img src="images/cab4.jpg" class="card-img-center">
      <div class="card-body text-center">
        <h5 class="card-title">Wooden Kitchen cabinet</h5>
        <p class="card-text" style="color:#807c7c;">Price: Rs.25000</p>
        <button type="submit" name="Add_To_cart" class="btn btn-info">Add To Cart</button>
<input type="hidden" name="Item_name" value="Wooden Kitchen cabinet">
<input type="hidden" name="price" value="25000">
      </div>
    </div>
  </form>
  </div>

  <div class="container  mt-5 mb-5">
    <div class="row">
  <div class="col-lg-3">
    <form action="manage_cart.php" method="POST">
      <div class="card mt-10">
      <img src="images/cab5.jpg" class="card-img-center">
      <div class="card-body text-center">
        <h5 class="card-title">Wooden Kitchen cabinet</h5>
        <p class="card-text" style="color:#807c7c;">Price: Rs.30000</p>
        <button type="submit" name="Add_To_cart" class="btn btn-info">Add To Cart</button>
<input type="hidden" name="Item_name" value="Cabinet">
<input type="hidden" name="price" value="6500">
      </div>
    </div>
  </form>
  </div>
  <div class="col-lg-3">
    <form action="manage_cart.php" method="POST">
      <div class="card">
      <img src="images/cab6.jpg" class="card-img-center">
      <div class="card-body text-center">
        <h5 class="card-title">Wooden Kitchen cabinet</h5>
        <p class="card-text" style="color:#807c7c;">Price: Rs.50000</p>
        <button type="submit" name="Add_To_cart" class="btn btn-info">Add To Cart</button>
<input type="hidden" name="Item_name" value="Cabinet">
<input type="hidden" name="price" value="6500">
      </div>
    </div>
  </form>
  </div>
  <div class="col-lg-3">
    <form action="manage_cart.php" method="POST">
      <div class="card">
      <img src="images/cab7.jpg" class="card-img-center">
      <div class="card-body text-center">
        <h5 class="card-title">Wooden Kitchen cabinet</h5>
        <p class="card-text" style="color:#807c7c;">Price: Rs.120000</p>
        <button type="submit" name="Add_To_cart" class="btn btn-info btn-color">Add To Cart</button>
<input type="hidden" name="Item_name" value="Cabinet">
<input type="hidden" name="price" value="6500">
      </div>
    </div>
  </form>
  </div>
  <div class="col-lg-3">
    <form action="manage_cart.php" method="POST">
      <div class="card">
      <img src="images/cab1.jpg" class="card-img-center">
      <div class="card-body text-center">
        <h5 class="card-title">Alton Display Cabinet</h5>
        <p class="card-text" style="color:#807c7c;">Price: Rs.6500</p>
        <button type="submit" name="Add_To_cart" class="btn btn-info">Add To Cart</button>
  <input type="hidden" name="Item_name" value="Cabinet">
  <input type="hidden" name="price" value="6500">
      </div>
    </div>
  </form>
  </div>


</div>
</div>
</div>
</div>
<?php include('footer.php') ?>
  </body>
</html>
