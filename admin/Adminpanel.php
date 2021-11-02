<!DOCTYPE html>
<html>
<?php
include('adminpartials/head.php');
require 'connection.php';
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  include('adminpartials/header.php');
  include('adminpartials/aside.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://localhost/project/Ecommerce.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

<section class="content">
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include('adminpartials/footer.php');
 ?>
</body>
</html>
