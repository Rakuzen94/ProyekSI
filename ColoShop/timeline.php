<?php
include('header.php');
require_once("auth.php");
require_once("connect.php");

// if (isset($_POST['timeline'])) {
// 	//memfilter data inputan yang masuk
// 	$nama_panggilan = filter_input(INPUT_POST, 'nama_panggilan', FILTER_SANITIZE_STRING);
// 	$alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
// 	$profesi = filter_input(INPUT_POST, 'profesi', FILTER_SANITIZE_STRING);

// 	//menyiapkan queery
// 	$sql = "INSERT INTO identitas (nama_panggilan, alamat, profesi)
// 	VALUES (:nama_panggilan, :alamat, :profesi)";
// 	$stmt = $db->prepare($sql);

// 	//bind parameter ke query
// 	$params = array(
// 		":nama_panggilan" => $nama_panggilan, 
// 		":alamat" => $alamat,
// 		":profesi" => $password,
		
// 	);	

// $saved = $stmt->execute($params);

// 	//jika query simpan, maka user sudah terdaftar
// 	//maka alihkan ke halaman login

// 	if ($saved) header("Location: timeline.php"); 
// 	}
$username = $_SESSION["user"]["username"];
$query = $db->prepare("select * from users where username='$username' ");
$query->execute();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>BusanTshirt</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sablon Shop">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet"  href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet"  href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet"  href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet"  href="styles/main_styles.css">
	<link rel="stylesheet"  href="styles/responsive.css">
	<link rel="stylesheet"  href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
	<link rel="stylesheet"  href="styles/categories_styles.css">
	<link rel="stylesheet"  href="styles/categories_responsive.css">
	<link rel="stylesheet"  href="styles/single_styles.css">
	<link rel="stylesheet"  href="styles/single_responsive.css">
	<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
</head>


<body class="container product_section_container">

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-4">

				<div class="card">
					<div class="card-body text-center">
						
						<img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo']?>" />

						<h3><?php echo $_SESSION["user"]["name"]?></h3>
						<p><?php echo $_SESSION["user"]["email"]?></p>

						<p><a href="logout.php">Logout</a></p>
					</div>
				</div>
				
			</div>
			<div class="col-md-8">
				
	                <div class="box-body">
						<table  class="table table-bordered table-striped">
							<thead>
								<tr>
									
									<th>Nama Lengkap</th>
									<th>Username</th>
									<th>Email</th>
								</tr>
								<?php while($siswa = $query->fetch()){?>
								<tr>
									<td><?php echo $siswa['name']?></td>
									<td><?php echo $siswa['username']?></td>
									<td><?php echo $siswa['email']?></td>
							
								</tr>
								<?php }?>
							</thead>
						</table>
	                </div><!-- /.box-body -->
					<!-- /view data -->
				</div>
				
			</div>
		</div>

	</div>

	<?php
	include('footer.php');
	?>


</body>
</html>