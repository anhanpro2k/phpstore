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
                    <div class="col-sm-9">

                        <?php
                    include('../partials/connect.php'); //Import connect
                    $id=$_GET['pro_id'];
                    $sql = "SELECT * FROM products WHERE id = {$id}";
                    $results = $connect -> query($sql);
                    $final=$results->fetch_assoc();
                    echo "You are selected product:
                    <h3>Id : {$final['id']}</h3>
                    <h3>Name : {$final['name']}</h3>
                    <h3>Price : {$final['price']}</h3>
                    <h3>Description : {$final['description']}</h3>
                    <img src=\"../{$final['picture']}\" width=\"100px\" height=\"100px\">
                    ";
                ?>
                    </div>



                    <div class="col-sm-3">
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