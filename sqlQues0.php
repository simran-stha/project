<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?
    $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($servername, $username, $password);
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";

        $sql = "CREATE DATABASE questions";
        if(mysqli_query($conn,$sql)){
          echo "database created successfully";
        }
        else {
          echo "error while creating database" .mysqli_error($conn);
        }
        mysqli_close($conn);
        $conn = mysqli_connect($servername, $username, $password, "questions");


    ?>
  </body>
</html>
