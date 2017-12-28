<?php include('connect.php'); 
	include('header.php');
	require_once("auth.php");

	$query = $db->prepare("SELECT * FROM kaos, warna  WHERE kaos.kodewarna = warna.kode");
	
	$query->execute();

?>
<br><br>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		
		<div class="container content box box-info" id="pemesanan" style="height:600px"></a>
            <div class="box-header with-border">
              <h3>Daftar Barang (KAOS)</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>			
							<th>ID</th>
							<th>Nama</th>
							<th>Ukuran</th>
							<th>Jenis</th>
							<th>Warna</th>
							<th>Lengan</th>
							<th>Stok</th>
							<th>Desain Kaos</th>
							<th>Harga</th>
							<th>Status</th>
							<th>Diskon</th>
						</tr>
						<?php while($kaos = $query->fetch()){?>
						<tr>
							<td><?php echo $kaos['id']?></td>
							<td><?php echo $kaos['nama']?></td>
							<td><?php echo $kaos['ukuran']?></td>
							<td><?php echo $kaos['jenis']?></td>
							<td><?php echo $kaos['warna']?></td>
							<td><?php echo $kaos['lengan']?></td>
							<td><?php echo $kaos['stok']?></td>
							<td><?php echo $kaos['design_kaos']?></td>
							<td><?php echo $kaos['harga']?></td>
							<td><?php echo $kaos['status']?></td>
							<td><?php echo $kaos['diskon']?></td>
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