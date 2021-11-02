      <?php
      include ('header1.php');
       ?>
      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <title></title>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
          /* Add a black background color to the top navigation bar */
          /* .image img{
            opacity: 70%;
            padding-top: 40;
            background-image: url('images/bg.jpg');
            width: 100%;
            background-size:cover;
            background-attachment: fixed;
            } */
      .image-box {

      /* Here's the trick */
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.4)) , var(--image-url) center center;
      background-size: cover;

      /* Here's the same styles we applied to our content-div earlier */
      color: white;
      min-height: 50vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
      .image-box  .container {
          margin-left: 30px;
               padding-top:none;
               display:inline-block;

          }
          .container ul{

          float:none;
          list-style-type: none;
          }

            .container ul li{
           display:inline-block;
              padding: 10px;
              margin: 10px;
            }
            .container ul li img{
              border-radius: 50%;
              border: 4px solid #ccc;
            }
            .container ul li img{
              -webkit-transform: scale(1);
            	transform: scale(1);
            	-webkit-transition: .3s ease-in-out;
            	transition: .3s ease-in-out;
            }
            .container ul li:hover img {
            	-webkit-transform: scale(1.3);
            	transform: scale(1.3);
            }

            }

            </style>
        </head>
        <body>
          <div class="image-box" style="--image-url: url(images/bg.jpg)">
          <div class="container">
        <ul align="center">
              <li><a href="sofa.php" style="text-decoration:none"><img src="images/office.jfif" ><p>Office Furniture</p></li>
          <li><a href="cabinet.php" style="text-decoration:none"><img src="images/bedroom.jfif"><p>Bed Room Furniture</p></li>
            <li><a href="cabinet.php" style="text-decoration:none"><img src="images/kit.jpg"><p>Kitchen Furniture</p></li>
          <li><a href="dining.php" style="text-decoration:none"><img src="images/living.jfif"><p>Living Room Furniture</p></a></li>
          <li><a href="wardrobe.php" style="text-decoration:none"><img src="images/bath.jfif"><p>Bathroom Furniture</p></a></li>
          </ul>
        </div>


       <!-- <div class="cat">
        <form action="/action_page.php">
        <label for="categories">Featured Categories:</label>
        <select id="cat" name="cat">
          <option value="1">Office Furniture</option>
          <option value="2">Bed Room Furniture</option>
          <option value="3">Living Room Furniture</option>
          <option value="4">Bathroom Furniture</option>
          <option value="5">Accent Furniture</option>
          <option value="6">Kitchen Furniture</option>
        </select>
        <input type="submit">
      </form>
      </div>
      <div class="id">
         <h1> UP TO 50% OFF!<h1>
          <div class="opt">
         <input type="button" value="Shop sale now">
       </div>
      </div> -->
          </div>
      <?php
      include ('footer.php');
       ?>
        </body>
      </html>
