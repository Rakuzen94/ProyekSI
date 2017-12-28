<?php 
	include('header.php');
	require_once("auth.php");
	require_once('connect.php');
	
	$query = $db->prepare("SELECT * FROM users WHERE role=2");
	
	$query->execute();
?>
<br><br>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		
		<div class="container content box box-info" id="pemesanan" style="height:600px"></a>
            <div class="box-header with-border">
              <h3>Daftar Pengguna</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>			
							<th>Nama Lengkap</th>
							<th>Username</th>
							<th>Email</th>
						</tr>
						<?php while($user = $query->fetch()){?>
						<tr>
							<td><?php echo $user['name']?></td>
							<td><?php echo $user['username']?></td>
							<td><?php echo $user['email']?></td>
						</tr>
						<?php }?>
					</thead>
				</table>
			</div>
		</div>
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