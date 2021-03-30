<!DOCTYPE html>
<html>
    <?php
    include("adminpartials/head.php");
    ?>
<body class="hold-transition skin-blue sidebar-mini ">
<div class="wrapper">

<?php 
include("adminpartials/session.php");
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
            <div class ="col-sm-9">
  
                <?php
                    include('../partials/connect.php'); //Import connect
                    $sql="SELECT * FROM products";
                    $results = $connect->query($sql);

                    while($final=$results->fetch_assoc()){
                      echo "
                      <a href=\"proshow.php?pro_id={$final['id']}\">
                      <h1> {$final['id']} : {$final['name']} </h1> <br/>
                      </a>

                      <a href=\"proupdate.php?up_id={$final['id']}\">
                        <button>Update</button>
                      </a>

                      <a href=\"prodelete.php?del_id={$final['id']}\">
                        <button style=\"color:red\">Delete</button>
                      </a><br/><hr/>
                      ";
                    }
                ?>
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
