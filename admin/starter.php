<?php include('header.php'); 
	require_once('auth.php');
?>
<br><br>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		
		<div class="container content box box-info" id="pemesanan" style="height:600px"></a>
            <div class="box-header with-border">
              <h3>Daftar Pemesanan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Order ID</th>
					<th>Nama pemesan</th>
                    <th>Jenis Pesanan</th>
                    <th>Status</th>
                    <th>Total harga</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
					<td>Nana</td>
                    <td>Call of Duty IV</td>
                    <td><span class="label label-success">sudah bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">150.000</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
					<td>Nana</td>
                    <td>Samsung Smart TV</td>
                    <td><span class="label label-danger">belum bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">150.000</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
					<td>Nana</td>
                    <td>iPhone 6 Plus</td>
                    <td><span class="label label-success">sudah bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">150.000</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
					<td>Nana</td>
                    <td>Samsung Smart TV</td>
                    <td><span class="label label-success">sudah bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00c0ef" data-height="20">150.000</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
					<td>Nana</td>
                    <td>Samsung Smart TV</td>
                    <td><span class="label label-success">sudah bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">150.000</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
					<td>Nana</td>
                    <td>iPhone 6 Plus</td>
                    <td><span class="label label-danger">belum bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">150.000</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
					<td>Nana</td>
                    <td>Call of Duty IV</td>
                    <td><span class="label label-success">sudah bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">150.000</div>
                    </td>
                  </tr>
				  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
					<td>Nana</td>
                    <td>Call of Duty IV</td>
                    <td><span class="label label-success">sudah bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">150.000</div>
                    </td>
                  </tr>
				  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
					<td>Nana</td>
                    <td>Call of Duty IV</td>
                    <td><span class="label label-success">sudah bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">150.000</div>
                    </td>
                  </tr>
				  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
					<td>Nana</td>
                    <td>Call of Duty IV</td>
                    <td><span class="label label-danger">belum bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">150.000</div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
			</div>
		</div>
		<br>
		<!---
		<div class="container content box box-info" style="margin-top:10px; height:600px" id="user">
            <div class="box-header with-border" >
              <h3>User</h3>
            </div>
            <!-- /.box-header
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Order ID</th>
					<th>Nama pemesan</th>
                    <th>Jenis Pesanan</th>
                    <th>Status</th>
                    <th>Total harga</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
					<td>Nana</td>
                    <td>Call of Duty IV</td>
                    <td><span class="label label-danger">belum bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">150.000</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
					<td>Nana</td>
                    <td>Samsung Smart TV</td>
                    <td><span class="label label-danger">belum bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">150.000</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
					<td>Nana</td>
                    <td>iPhone 6 Plus</td>
                    <td><span class="label label-success">sudah bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">150.000</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
					<td>Nana</td>
                    <td>Samsung Smart TV</td>
                    <td><span class="label label-success">sudah bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00c0ef" data-height="20">150.000</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
					<td>Nana</td>
                    <td>Samsung Smart TV</td>
                    <td><span class="label label-success">sudah bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">150.000</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
					<td>Nana</td>
                    <td>iPhone 6 Plus</td>
                    <td><span class="label label-danger">belum bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">150.000</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
					<td>Nana</td>
                    <td>Call of Duty IV</td>
                    <td><span class="label label-success">sudah bayar</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">150.000</div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
			</div>
		</div>
      -->
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include('footer.php'); ?>