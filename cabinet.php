<?php
include('header.php'); ?>
<br>
<br>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cabinet.css">
    <title></title>
  </head>
  <body>
  <br>
    <div class="description-container">
<table cellspacing="10" border="0">
<tr>
  <td align="center">
  <h1 align="center">Kitchen Cabinets</h1>
  <p style="font-style:italic; font-size:20px">" Your cabinet is the centre of attention in your kitchen and
      gives the perfect look of the entire room. When shopping for cabinets designs online,
      look for the right material, colour, and size, especially because kitchen cabinets prices vary by material and design."</p>
  </td>
  <td>
    </td>
    <td>
      </td>
  <td>
    </td>
    <td>
<img src="" id="image" class="img-responsive floating-image right">
<script type="text/javascript">
let image = document.getElementById('image');
let pictures = ['kitchen1.jpg','kitchen2.jpg','kitchen3.jpg']
setInterval(function(){
let random = Math.floor(Math.random() * 3);
image.src = pictures[random];
}, 700);
</script>
</td>
</tr>
</table>
</div>

<div class="images">
  <ul align="center">
    <li>  <img src="cb1.jpg" height="250" width="300" alt=""> <p>Alton Display Cabinet</p></li>
      <li><img src="cabinet1.jpg" height="250" width="300"  alt=""> <p> Cabinet </p></li>
        <li><img src="cb3.jfif" height="250" width="300" alt=""> <p>Alpina white kitchen cabinet</p></li>
          <li> <img src="cb4.jfif" height="250" width="300" alt=""> <p>Wooden Kitchen cabinet</p></li>

  </ul>

</div>
  </body>
</html>
