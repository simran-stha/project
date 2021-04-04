<?php
include ('header.php');
 ?>
 
<html>
<head>
	<title> Account </title>
<link rel="stylesheet" type="text/css" href="Accountdesign.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
<body>
<!-- <p><h4>If you have an account with us , Please login.</h4></p>


<form class="" action="index.html" method="post">
<table>
	<tr>
		<td>Email Address:</td>
		<td><input type="email" name="mail" value="" placeholder="email"/><br></td>
	</tr>
<tr>
	<td>Password:</td>
	<td><input type="Password" name="" value="" placeholder="password"/><br></td>
</tr>
	<tr>
		<td><input type="button" name=""  value="Login"></td>
	</tr>
		</table>
		</form> -->
		<script>
		function Create(){
			document.getElementById("input1").innerHTML;
			}
		</script>

		<p><h2>New Customers:</h2></p>
		<p>By creating an account , you will be able to move through the checkout process faster, store multiple shipping addresses,
			view faster and tract your orders in your account and more.</p>
<form   action="create.html" >
	<input type="button" id= "input1" name="" onclick="Create()" value="Create an Account">
		</form>

		<form class="hello" action="index.html" method="post">
			<fieldset style="width:400px">
				<legend><font size="5px" color= "black"> Login Information</legend></font>
		<table>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="psw" value="" placeholder="email" width="100px"/><br></td>
			</tr>
		<tr>
			<td>Confirm Password:</td>
			<td><input type="Password" name="" value="" placeholder="password"/><br></td>
		</tr>
			<tr>
				<td><input type="button" name=""  value="Login"></td>
			</tr>
				</table>
				</form>
				</fieldset><br>
<input type="submit" name=""  value="Submit">
	</form>

	</p><a href="https://www.facebook.com/" class="fa fa-facebook"></a>
   <a href="#" class="fa fa-twitter"></a>
</body>
</html>
