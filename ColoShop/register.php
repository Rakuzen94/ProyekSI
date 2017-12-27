<?php
include('header.php');
require_once("connect.php");

if (isset($_POST['register'])) {
	//memfilter data inputan yang masuk
	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);

	//mengenkripsi password
	//bisa menggunakan md5 atau password_hash
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

	//menyiapkan queery
	$sql = "INSERT INTO users (name, username, email, password)
	VALUES (:name, :username, :email, :password)";
	$stmt = $db->prepare($sql);

	//bind parameter ke query
	$params = array(
		":name" => $name, 
		":username" => $username,
		":password" => $password,
		":email" => $email
	);	

	//eksekusi query untuk menyimpan ke database
	$saved = $stmt->execute($params);

	//jika query simpan, maka user sudah terdaftar
	//maka alihkan ke halaman login

	if ($saved) header("Location: login.php"); 
	}

	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>BusanTshirt</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Sablon Shop">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
		<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
		<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/responsive.css">
		<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="styles/categories_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
		<link rel="stylesheet" type="text/css" href="styles/single_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/single_responsive.css">
		<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
	</head>

	<body class="container product_section_container">

		<div class="container mt-5">
			<div class="row">
				<div class="col-md-6">

					<!-- <p>&larr; <a href="index.php">Home</a></p> -->
					<h4 >Bergabunglah dengan Busan Tshirt</h4>
					<p>Sudah punya akun?&nbsp;<a href="login.php">Login Di Sini</a></p>

					<form action="" method="POST">
						<div class="form-group">
							<label for="name">Nama Lengkap</label>
							<input class="form-control" type="text" name="name" placeholder="Nama Anda"/>
						</div>

						<div class="form-group">
							<label for="name">Username</label>
							<input class="form-control" type="text" name="username" placeholder="Username"/>
						</div>

						<div class="form-group">
							<label for="name">Email</label>
							<input class="form-control" type="email" name="email" placeholder="Email"/>
						</div>

						<div class="form-group">
							<label for="name">Password</label>
							<input class="form-control" type="password" name="password" placeholder="Password"/>
						</div>

						<input type="submit" class="btn btn-success btn-block" name="register" value="Daftar"/>
					</form>

				</div>

				<div class="col-md-6">
					<img class="img img-responsive" src="img/p2.png"/>
				</div>

			</div>

		</div>

		<!-- footer -->

		<?php
		include('footer.php');
		?>


	</body>
	</html>