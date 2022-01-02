<?php
  session_start();
  if(!isset($_SESSION['hoten'])){
    header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?php
    include('components/linkcss.php');
    
  ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
    include('components/header.php');
    include('components/sidebar.php');
    include('ketnoi.php');

    $sql = "SELECT * FROM loaitin";
    $ketqua = mysqli_query($ketnoi, $sql);
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
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
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Quản lý loại tin</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
        <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Tên loại</th>
                  <th>Ghi chú</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    while($row = mysqli_fetch_array($ketqua)){
                   echo "<tr>";
                   echo "<td>".$row[0]."</td>";
                   echo "<td>".$row[1]."</td>";
                   echo "<td> ".$row[2]."</td>";
                   echo "<td> <a href=\"xoaloaitin.php\" class=\"btn btn-danger\">Xóa</a> <a href=\"capnhatloaitin.php\" class=\"btn btn-primary\">Cập nhật</a></td>";
                   echo "</tr>";
                    }
                  ?>
               
                </tbody>
                <tfoot>
                <tr>
                <th>id</th>
                  <th>Tên loại</th>
                  <th>Ghi chú</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
          <br>
          <a href="themloaitin.php" class="btn btn-primary"> Thêm loại tin</a>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    include('components/footer.php');
  ?>

  <!-- Control Sidebar -->
   <?php
    include('components/controlsidebar.php');
   ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<?php
  include('components/linkjs.php');
?>
</body>
</html>
