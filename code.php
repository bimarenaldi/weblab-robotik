<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register Code</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="img/favicon1.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Enter Register Code
				</span>
		<?php
			session_destroy();
			session_start();
			 include('admin-robotika19/koneksi.php');
			$sql = mysqli_query($db,"SELECT * FROM tb_code where id = 1 ");
			$data = mysqli_fetch_assoc($sql);
			
		?>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="" >

					<div class="wrap-input100 validate-input" data-validate="Enter Code">
						<input class="input100" type="text" name="code1" placeholder="Code">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
					<button class="login100-form-btn" name="a">
							Register
						</button>
					</div>

				</form>
		<?php
		
		if (isset($_POST['a'])) { 	
		$truecode = $data['code'];
			if($truecode == $_POST['code1']){
				$_SESSION['status'] = "aman";
				header("location:register.php");
			}
		
		}
		  if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "belum_login2"){
			echo " 
			<script>
				alert('Anda Harus Memasukkan Code Pendaftaran Yang Benar Untuk mengakses Halaman ini...');
			</script>
			";
			}
		  }
	
	?>
			</div>
		</div>
	
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>