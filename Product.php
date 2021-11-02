<?php include('header1.php'); ?>
  <!--         header portion -->
<!DOCTYPE html>
<html>
  <head>
        <title>our Products</title>
        <style media="screen">
        .container{
          background-color: #e8e7e3;
        }

        .container .products ul{
        float:none;
        list-style-type: none;
        margin-left: 18%;
        margin-right: 15%;
        }
        .products li{
          background-color: black;
        }
         .products ul li{
          border: 15px;
         display:inline-block;
          }
        .products ul li {
          padding: 10px;
          margin: 20px;
        }
        .products ul li a img{
          background-color: black;
        }
         .products ul li p{
          background-color: black;
          color: white;
        }
        </style>
        </head>
  <body><br>
          <div class="container mt-10">
          <h1 align="center">Explore Our Furniture Range!</h1>
          <div class="products">
            <ul align="center">
              <li><a href="sofa.php" style="text-decoration:none"><img src="images/sofa.png"  height="100" width="120"><p>Sofa</p></li>
              <li><a href="cabinet.php" style="text-decoration:none"><img src="images/cabinet.jpg"  height="100" width="120"><p>Kitchen cabinet</p></li>
              <li><a href="dining.php" style="text-decoration:none"><img src="images/dining.jfif" alt="" height="100" width="120"><p>Dining Table</p></a></li>
              <li><a href="wardrobe.php" style="text-decoration:none"><img src="images/cupboard.jpg" height="100" width="120"><p>Wardrobe</p></a></li>
              <li><a href="dressing.php" style="text-decoration:none"><img src="images/dressing.png"  height="100" width="120"><p>Dressing Table</p></li>
              <li><a href="tv.php" style="text-decoration:none"><img src="images/tv.jpg"  height="100" width="120"><p>TV stand</p></li>
               <li><a href="chair.php" style="text-decoration:none"><img src="images/chairr.jpg"  height="100" width="120"><p>Chair</p></li>
              <li><a href="bed.php" style="text-decoration:none"><img src="images/bed.jpg" height="100" width="120" alt=""><p>Bed</p></li>
              <li><a href="bookshelf.php" style="text-decoration:none"><img src="images/shelf.png"  height="100" width="120"><p>Bookshelves</p></li>
              <li><a href="shoerack.php" style="text-decoration:none"><img src="images/shoerack.jpg"  height="100" width="120"><p>Shoe Racks</p></a></li>
            </ul>
          </div>
        </div>
          <?php
          include ('footer.php');
           ?>
  </body>
</html>
