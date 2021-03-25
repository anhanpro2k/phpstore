<!DOCTYPE html>
<html>
    <?php
    //To catch session
    include("adminpartials/session.php");
    include("adminpartials/head.php");
    ?>
<body class="hold-transition skin-blue sidebar-mini ">
<div class="wrapper">

<?php 
include("adminpartials/header.php");
include("adminpartials/aside.php");
?>  


  <!-- Left side column. contains the logo and sidebar -->
  <?php 
  include("adminpartials/aside")
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content">
        
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php 
  include("adminpartials/footer.php");
  ?>
</body>
</html>
