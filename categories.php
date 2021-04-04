<?php
include ('header.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /* Add a black background color to the top navigation bar */
    header{
      background-image: url("bg.jpg");
      height: 600px;
      padding-top: 40;
      background-size:cover;
      background-position:center;
    }
    .topnav {
      overflow: hidden;

    }

    /* Style the links inside the navigation bar */
    .topnav a {
      float: left;
      display: block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    /* Change the color of links on hover */
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    /* Style the "active" element to highlight the current page */
    .topnav a.active {
      background-color: #ddd;
      color: black;
    }

    /* Style the search box inside the navigation bar */
    .topnav .search{
      float: right;
    }

    .topnav input[type=text] {
      padding: 6px;
      margin-top: 8px;
      font-size: 17px;
      border: none;
    }

    .topnav .search button {
      float: right;
      padding: 6px 10px;
      margin-top: 8px;
      margin-right: 16px;
      background: #ddd;
      font-size: 17px;
      border: none;
      cursor: pointer;
    }

    .topnav .search button:hover {
      background: #ccc;
    }

    /* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
    @media screen and (max-width: 600px) {
      .topnav .search {
        float: none;
      }
      .topnav a, .topnav input[type=text], .topnav .search button {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;
        padding: 14px;
      }
      .topnav input[type=text] {
        border: 1px solid #ccc;
      }
      }
      .id{
        color: white;
        width: 200px;
        height: 200px;
        background-color: black;
        opacity: 0.9;
        padding:55px;
        top:50%;
        right:50%;
        display: block;
        float: right;
        animation: id 5s linear;
            }
       @keyframes id{
      0%{opacity: 0;};
      40%{opacity:0.5;};
      }

        .id h1{
        text-align: center;
          font-weight: 100px;
        }
      .opt form , input[type="button"]{
        background-color: Red;
        color: white;
        padding: 10px;

        padding-left: 50px;
        padding-right: 50px;
        text-align: center;
      }
      input[type="button"]:hover{

      }
    }
      .cat{
          float: left;
      }
      .container {
            padding-top: 50px;
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
</style>
  </head>
  <body>

<div class="id">
   <h1> UP TO 50% OFF!<h1>
    <div class="opt">
   <input type="button" value="Shop sale now">
 </div>
</div>

 <div class="cat">
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
<header>
<div class="container">
<ul align="center">
  <li><a href="sofa.html" style="text-decoration:none"><img src="office.jfif" ><p>Office Furniture</p></li>
  <li><a href="cabinet.html" style="text-decoration:none"><img src="bedroom.jfif"><p>Bed Room Furniture</p></li>
    <li><a href="tv.html" style="text-decoration:none"><img src="kitchen.jfif"><p>Kitchen Furniture</p></li>
  <li><a href="dining.html" style="text-decoration:none"><img src="living.jfif"><p>Living Room Furniture</p></a></li>
  <li><a href="wardrobe.html" style="text-decoration:none"><img src="bath.jfif"><p>Bathroom Furniture</p></a></li>



</ul>
</div>
<?php
include ('footer.php');
 ?>
  </body>
</html>
