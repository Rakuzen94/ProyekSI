<?php
error_reporting(0);
//membuat koneksi ke database
include "process.php";
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
	<div class="navbar-fixed-top">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Halaman Admin</b></span>
    </a></div>

    <!-- Header Navbar -->
    <nav class="navbar navbar-fixed-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Admin
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar fixed-top">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel navbar-fixed-top"">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class=""><a href="http://localhost/admin/starter.php"><i class="fa fa-link"></i> <span>Pemesanan</span></a></li>
		<li><a href="http://localhost/admin/tambah.php"><i class="fa fa-link"></i> <span>Tambah Barang</span></a></li>
        <li><a href="http://localhost/admin/user.php"><i class="fa fa-link"></i> <span>User</span></a></li>
		<li><a href="http://localhost/admin/statistik.php"><i class="fa fa-link"></i> <span>Statistik</span></a></li>
    <!--    <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Statistik</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>  -->
		
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header)
    <section class="content-header"> -->
	
		<div class="container content box box-info" id="pemesanan" style="height:900px"></a>
            <div class="box-header with-border">
              <h3>Tambah Barang</h3>
            </div>
              
			<form method="post" action="process.php">
			  
				  <div class="form-group row">
					<label for="id" class="col-sm-2 col-form-label">ID Barang</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="id" nama="id" placeholder="masukkan ID Barang">
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="nama" class="col-sm-2 col-form-label">Tipe Kaos</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="nama" nama="nama" placeholder="masukkan tipe kaos">
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="ukuran" class="col-sm-2 col-form-label">Ukuran</label>
					<div class="col-sm-5">
					  <select class="form-control" name="ukuran">
						  <option>---------- Pilih ukuran kaos -----------</option>
						  <option value="s">S</option>
						  <option value="m">M</option>
						  <option value="l">L</option>
						  <option value="xl">XL</option>
						  <option value="xxl">XXL</option>
					  </select>
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="jenis" class="col-sm-2 col-form-label">Jenis kaos</label>
					<div class="col-sm-5">
					  <select class="form-control" name="jenis">
						  <option>---------- Pilih jenis kaos -----------</option>
						  <option value="man">Man</option>
						  <option value="women">Women</option>
						  <option value="couple">Couple</option>
					  </select>
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="jumlah" class="col-sm-2 col-form-label">Lengan</label>
					<div class="col-sm-5">
					  <select class="form-control" name="lengan">
						  <option>---------- Pilih jenis lengan -----------</option>
						  <option value="tanpa_lengan">Tanpa Lengan</option>
						  <option value="pendek">Pendek</option>
						  <option value="panjang">Panjang</option>
					  </select>
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="stok" class="col-sm-2 col-form-label">Stok</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="stok" nama="stok" placeholder="masukkan stok kaos">
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="nama" class="col-sm-2 col-form-label">Design</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="design_kaos" nama="design_kaos" placeholder="masukkan design kaos">
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="harga" class="col-sm-2 col-form-label">Harga</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="harga" nama="harga" placeholder="masukkan harga kaos">
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="status" class="col-sm-2 col-form-label">Status</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="status" nama="status" placeholder="masukkan status kaos">
					</div>
				  </div>
				  
				  <div class="form-group row">
					<label for="diskon" class="col-sm-2 col-form-label">Diskon</label>
					<div class="col-sm-5">
					  <input type="text" class="form-control" id="diskon" nama="diskon" placeholder="masukkan jumlah diskon">
					</div>
				  </div>
				  
				  <button type="button" class="btn btn-primary">Simpan</button>
				
			</form>
		</div>
	</div>
 <!--   </section> -->

  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="#">Proyek SI</a>.</strong> All rights reserved.
  </footer>

 
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>