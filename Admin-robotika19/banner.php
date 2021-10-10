 <?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:../login_aslab.php?pesan=belum_login"); 
}
  ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<script>
	function reloadpage()
	{
		location.reload()
	}
	</script>
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon1.png"/>
</head>
<body>
    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;ADMIN PAGE</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="assets/img/bayi.png" class="img-responsive" />
                     
                    </li>


                    <li>
                        <a href="index.php"><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Edit Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="banner.php">Banner</a>
                            </li>
                            <li>
                                <a href="about.php">About</a>
                            </li>
                            <li>
                                <a href="artikel.php">Artikel</a>
                            </li>
							<li>
                                <a href="aslab.php">Daftar Aslab</a>
                            </li>
							<li>
                                <a href="dosen.php">Dosen</a>
                            </li>
							<li>
                                <a href="kontak.php">Kontak Dari User</a>
                            </li>
							<li>
                                <a href="subscribe.php">Daftar Subscriber</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="list_daftar.php"><i class="fa fa-table "></i>Data Pendaftar Aslab</a>
                    </li>
                    <li>
                        <a href="komponen.html"><i class="fa fa-qrcode "></i>Komponen Admin</a>
                    </li>
                </ul>

            </div>

        </nav>
		
        <!-- /. NAV SIDE  -->
	<div class="tab-content">
        <div id="page-wrapper" >
            <div id="page-inner">
		<ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Edit Banner</a>
            </li>
            <li class=""><a href="#edit" data-toggle="tab">Tutorial Edit</a>
            </li>
        </ul>
		 <div class="tab-content">
			<div class="tab-pane fade active in" id="home">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Edit Banner Page</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->    
<!-- KODE FORMULIR HTML -->
<?php
	 include('koneksi.php');
	$sql = mysqli_query($db,"SELECT * FROM tb_banner order by id ");
	$data = mysqli_fetch_assoc($sql);
	$besar = $data['txt_besar'];
	$kecil = $data['txt_kecil'];
?>
	<form method="post" action="" enctype="multipart/form-data">
		<h3>Edit Kata Pada halaman Utama (Terdiri dari Text Besar dan Kecil) </h3> 
		<label>Banner 1</label>
		<input class="form-control" value='<?php echo $besar; ?>' name="besar"/>
		<input class="form-control" value='<?php echo $kecil; ?>' name="kecil"/>
		<br>
<?php
	$sql2 = mysqli_query($db,"SELECT * FROM tb_banner where id=2 ");
	$data = mysqli_fetch_assoc($sql2);
	$besar = $data['txt_besar'];
	$kecil = $data['txt_kecil'];
?>
		<label>Banner 2</label>
		<input class="form-control" value='<?php echo $besar; ?>' name="besar2"/>
		<input class="form-control" value='<?php echo $kecil; ?>' name="kecil2"/>
		<br>
<?php
	$sql3 = mysqli_query($db,"SELECT * FROM tb_banner where id=3");
	$data = mysqli_fetch_assoc($sql3);
	$besar = $data['txt_besar'];
	$kecil = $data['txt_kecil'];
?>
		<label>Banner 3</label>
		<input class="form-control" value='<?php echo $besar; ?>' name="besar3"/>
		<input class="form-control" value='<?php echo $kecil; ?>' name="kecil3"/>
		<input type="submit" name="banner" value="Update Banner" class="btn btn-primary">&emsp;<input type="submit" name="aa" value="Refresh" class="btn btn-success" onClick="document.location.reload(true)">
		<br><br>
		<h3>Upload Gambar Halaman Utama: (Ukuran Proporsional 1000 x 792) </h3> 
		<input type="file" name="gambar"><br>
		<input type="submit" name="unggah" value="Banner 1" class="btn btn-warning">&emsp;<input type="submit" name="unggah2" value="Banner 2" class="btn btn-warning">&emsp;<input type="submit" name="unggah3" value="Banner 3" class="btn btn-warning">
		<br><br><br>
	</form>

<!-- KODE FORMULIR HTML -->



<!-- KODE PHP UPLOAD GAMBAR-- >
//Script Banner 1
<?php

	 include('koneksi.php'); // Koneksi ke database
	$txt_b = $_POST['besar'];
	$txt_k = $_POST['kecil'];
	$txt_b2 = $_POST['besar2'];
	$txt_k2 = $_POST['kecil2'];
	$txt_b3 = $_POST['besar3'];
	$txt_k3 = $_POST['kecil3'];
	
	if (isset($_POST['banner'])) { 
		mysqli_query($db, "UPDATE tb_banner SET txt_besar='$txt_b', txt_kecil='$txt_k' WHERE id=1")or die (mysql_error());

		mysqli_query($db, "UPDATE tb_banner SET txt_besar='$txt_b2', txt_kecil='$txt_k2' WHERE id=2")or die (mysql_error());

		mysqli_query($db, "UPDATE tb_banner SET txt_besar='$txt_b3', txt_kecil='$txt_k3' WHERE id=3")or die (mysql_error());
	}

	if (isset($_POST['unggah'])) { //Jika tombol unggah di klik

		$gambar = $_FILES['gambar']['tmp_name']; //Mengambil file gambar pada input type="file" name="gambar"

		$alamat = $_FILES['gambar']['name']; //Mengambil alamat/url gambar pada input type="file" name="gambar"

		$folder = "gambar/";



		$pindah = move_uploaded_file($gambar, $folder.$alamat); //Memindahkan gambar ke file gambar/ yang sudah dibuat tadi

		if ($pindah) { //Jika gambar berhasil dipindah
		
			mysqli_query($db, "UPDATE tb_banner SET gambar='$alamat' WHERE id=1")or die (mysql_error());

			//mysqli_query($db, "INSERT INTO tb_banner VALUES('','$alamat')"); //Masukan alamat gambar ke database

			echo "<div>Berhasil Upload Gambar!</div>";

		}

		else{//Jika gambar gagal dipindah

			echo "<div>Gambar gagal diunggah</div>"; //Tampilkan peringatan

		}



	}		

?>
//Script Banner 2
<?php

	if (isset($_POST['unggah2'])) { //Jika tombol unggah di klik

		$gambar = $_FILES['gambar']['tmp_name']; //Mengambil file gambar pada input type="file" name="gambar"

		$alamat = $_FILES['gambar']['name']; //Mengambil alamat/url gambar pada input type="file" name="gambar"

		$folder = "gambar/";



		$pindah = move_uploaded_file($gambar, $folder.$alamat); //Memindahkan gambar ke file gambar/ yang sudah dibuat tadi

		if ($pindah) { //Jika gambar berhasil dipindah
		
			mysqli_query($db, "UPDATE tb_banner SET gambar='$alamat' WHERE id=2")or die (mysql_error());

			//mysqli_query($db, "INSERT INTO tb_banner VALUES('','$alamat')"); //Masukan alamat gambar ke database

			echo "<div>Berhasil Upload Gambar!</div>";

		}

		else{//Jika gambar gagal dipindah

			echo "<div>Gambar gagal diunggah</div>"; //Tampilkan peringatan

		}



	}		

?>
//Script Banner 3
<?php

	if (isset($_POST['unggah3'])) { //Jika tombol unggah di klik

		$gambar = $_FILES['gambar']['tmp_name']; //Mengambil file gambar pada input type="file" name="gambar"

		$alamat = $_FILES['gambar']['name']; //Mengambil alamat/url gambar pada input type="file" name="gambar"

		$folder = "gambar/";



		$pindah = move_uploaded_file($gambar, $folder.$alamat); //Memindahkan gambar ke file gambar/ yang sudah dibuat tadi

		if ($pindah) { //Jika gambar berhasil dipindah
		
			mysqli_query($db, "UPDATE tb_banner SET gambar='$alamat' WHERE id=3")or die (mysql_error());

			//mysqli_query($db, "INSERT INTO tb_banner VALUES('','$alamat')"); //Masukan alamat gambar ke database

			echo "<div>Berhasil Upload Gambar!</div>";

		}

		else{//Jika gambar gagal dipindah

			echo "<div>Gambar gagal diunggah</div>"; //Tampilkan peringatan

		}



	}		

?>

<!-- KODE PHP UPLOAD GAMBAR-->



<!-- KODE HTML & PHP UNTUK MENAMPILKAN GAMBAR-->

<?php

	$q = mysqli_query($db, "SELECT * FROM tb_banner");

	while ($d = mysqli_fetch_array($q)) {

?>

	<img src="gambar/<?php echo $d['gambar'];?>" style="width:290px;height:250px;"> &ensp;

<?php

}
 

?>

<!-- KODE HTML & PHP UNTUK MENAMPILKAN GAMBAR-->				 
		</div>
		<div class="tab-pane fade" id="edit">
	
		</div>
	</div>

             <!-- /. PAGE INNER  -->
			 
            </div>
         <!-- /. PAGE WRAPPER  -->
        
		</div>
	
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
