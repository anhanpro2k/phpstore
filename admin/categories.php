<!DOCTYPE html>
<html>
    <?php
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
        <div class="row">
            <div class ="col-sm-3">
            </div>

            <div class="col-sm-6">
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                        <h1>Product</h1>
                        <div class="box-body">
                        <div class="form-group">
                        <label for="category">Product</label>
                        <input type="txt" class="form-control" id="category" placeholder="Enter category">
                        </div>
                        
                        </div>
                    </div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class ="col-sm-3">
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php 
  include("adminpartials/footer.php");
  ?>
</body>
</html>
