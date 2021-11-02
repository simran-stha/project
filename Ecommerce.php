  <?php include('header.php'); ?>
  <html>
    <head>
      <title>Ecommerce website</title>
      <style media="screen">
      h4{
        margin-top: 45px;
        margin-left: 17px;
        text-align: left;
      }
      .image{
        margin-left: 20px;
        margin-right: 20px;
      }

          .container{
          display: flex;
          width: 100%;
          padding: 1% 1%;
          box-sizing: border-box;
          height: 50vh;

        }
        .box {
          flex: 1;
          overflow: hidden;
          transition: .5s;
          margin: 0 2%;
          box-shadow: 0 20px  rgba(0,0,0,.1);
        }

        .box > img {
          width: 100%;
          height: calc(100% - 5vh);
          transition: .5s;
        }

        .box:hover { flex: 1 1 20%; }
        .box:hover > img {
          width: 50%;
          height: 100%;
        }
        </style>
    </head>
    <body>
      <br>
          <h4>STYLE COMFORT AND<br>  AFFORDABLE</h4>

            <div class="image">
              <script>
              function imagechange(){
              document.getElementById("image").src = "images/chair.jpg";
              }
              function change(){
              document.getElementById("image").src= "images/furniture.jpg";
              }
                </script>
                <img id="image" onmouseover = "imagechange()" onmouseout="change()" height="800px" width="100%" src="chair.jpg" alt="image">
                </div>
                <br>
           <p><b> Find a bright ideal to suit your taste with our great selection.</b></p>
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
      <?php include('footer.php'); ?>
    </body>
  </html>
