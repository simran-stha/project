<?php
include('C:\xampp\htdocs\project\header.php');

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="sofa.css">
    <title></title>
  </head>
  <body>
    <br>
      <div class="description-container">
<table cellspacing="10"  border="0">
  <tr>
    <td align="center">
    <h1 align="center">Sofa Sets</h1>
    <p style="font-style:italic; font-size:20px">" Your sofa set is the centre of attention in your living room and
        the perfect spot to spend time with family or entertain guests. When shopping for sofa set designs online,
        look for the right material, colour, and size, especially because sofa set prices vary by material and design."</p>
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
  let pictures = ['sofadesign1.jpg','sofadesign2.jpg','sofadesign3.jfif','sofadesign4.jpg']
setInterval(function(){
  let random = Math.floor(Math.random() * 4);
  image.src = pictures[random];
}, 800);
</script>
</td>
</tr>
</table>
</div>

<div class="images">
  <ul align="center">
    <li><img src="sofa1.jfif" height="240" width="300" alt=""> <p>Fabric Sofa <br> Price:</p> </li>
    <li><img src="sofa9.jfif" height="240" width="300"  alt=""> <p>Leather Sofa sets <br> Price:</p></li>
    <li><img src="sofa8.jpeg" height="240" width="300"  alt=""> <p>Sigmund Sofas <br> Price: </p></li>
    <li><img src="sofa3.jfif" height="250" width="300" alt=""> <p>L Shaped Sfa Sets <br> Price:</p></li>
    <li><img src="sofa5.jfif" height="250" width="300" alt=""> <p>Leatherette Sofa Sets <br> Price:</p></li>
    <li><img src="sofa6.jpg" height="250" width="300" alt=""> <p>Single Wooden Sofa <br> Price:</p></li>
    <li><img src="sofa10.jpg" height="250" width="300"  alt=""> <p>Loveseats <br> Price:</p></li>
  </ul>

</div>
  </body>
</html>
