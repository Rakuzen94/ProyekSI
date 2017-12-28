<?php
include('header.php');
require_once("connect.php");

if (isset($_POST["login"])) {
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, 'password',FILTER_SANITIZE_STRING);
	
	//select data yang rolenya 2 yakni user, jadi admin (role=1) gak bisa login
	$sql = "SELECT * FROM users WHERE role=2 AND username=:username OR email=:email";
	$stmt = $db->prepare($sql);

	//bind parameter ke query
	$params =array(
		":username" => $username,
		":email" => $username
		 );

	$stmt->execute($params);

	$user = $stmt->fetch(PDO::FETCH_ASSOC);

	//jika user sudah terdaftar
	if ($user) {
		//verivikasi password
		if (password_verify($password, $user["password"])) {
			//buat session
			session_start();
			$_SESSION["user"] = $user;
			//login success,alihkan ke halaman timeline
			header("Location: timeline.php");
		}
	}
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
		<div class="col-md-6">

			<!-- <p>&larr; <a href="index.php">Home<a/></p> -->
			<h4>Masuk Ke Busan Tshirt</h4>
			<p>Belom punya akun?&nbsp;<a href="register.php">Daftar di sini</a></p>

		<form action="" method="POST">

			<div class="form-group">
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" placeholder="Username or Email"/>
			</div>


			<div class="form-group">
				<label for="username">Password</label>
				<input class="form-control" type="password" name="password" placeholder="Password"/>
			</div>

			<input  type="submit" class="btn btn-success btn-block" name="login" value="Masuk"/>
		</form>

		</div>

	<div class="col-md-6">
		<img class="img img-responsive" src="img/p1.png"/>	
	</div>

	</div>
</div>

<?php
include('footer.php');
?>

</body>
</html>