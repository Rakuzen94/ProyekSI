<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "admin";

//bikin koneksi
	$conn = new mysqli($servername, $username, $password, $dbname);
//cek koneksi
	if ($conn->connect_error) {
	  # code...
	  die("Connection failed: " . $conn->connect_error);
	}

	$id =  $_POST['id'];
	
	$nama =  $_POST['nama'];
	
	$ukuran =  $_POST['ukuran'];
		if($ukuran == "s"){
				$this->input->post['ukuran'];
			}elseif($ukuran == "m"){
				$this->input->post['ukuran'];
			}elseif($ukuran == "l"){
				$this->input->post['ukuran'];
			}elseif($ukuran == "xl"){
				$this->input->post['ukuran'];
			}elseif($ukuran == "xxl"){
				$this->input->post['ukuran'];
			}
	
	$jenis =  $_POST['jenis'];
		if($jenis == "men"){
				$this->input->post['jenis'];
			}elseif($jenis == "women"){
				$this->input->post['jenis'];
			}elseif($jenis == "couple"){
				$this->input->post['jenis'];
			}
	
	$lengan =  $_POST['lengan'];
	if($lengan == "tanpa_lengan"){
				$this->input->post['lengan'];
			}elseif($lengan == "pendek"){
				$this->input->post['lengan'];
			}elseif($lengan == "panjang"){
				$this->input->post['lengan'];
			}
	
	$stok =  $_POST['stok'];
	
	$design_kaos =  $_POST['design_kaos'];
	
	$status =  $_POST['status'];
	
	$diskon =  $_POST['diskon'];

//query nya
//	$sql = "INSERT INTO kaos (id,nama,ukuran,jenis,kodewarna,lengan,stok,design_kaos,status,diskon) 
//	VALUES('$id','$nama','$ukuran','$jenis','$kodewarna','$lengan','$stok','$design_kaos','$status','$diskon')";

	$sql= "INSERT INTO kaos VALUES('$id','$nama','$ukuran','$jenis','$kodewarna','$lengan','$stok','$design_kaos','$status','$diskon')";

	if ($conn->query($sql) === TRUE) {
	  # code...
	  echo "Sudah terinsert";
	} else {
	  # code...
	  echo "Error: " . $sql . "<br>" .$conn->error;

	}
	$conn->close();
	
?>