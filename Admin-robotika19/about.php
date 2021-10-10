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
	 <!-- Favicon -->
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
        <div id="page-wrapper" >
            <div id="page-inner">
			<ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Edit About</a>
            </li>
            <li class=""><a href="#edit" data-toggle="tab">Tutorial Edit</a>
            </li>
        </ul>
		 <div class="tab-content">
			<div class="tab-pane fade active in" id="home">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Edit About Page</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->    
<!-- KODE FORMULIR HTML -->
<?php
	 include('koneksi.php');
	$sql = mysqli_query($db,"SELECT * FROM tb_about where id = 1 ");
	$data = mysqli_fetch_assoc($sql);
	$isi = $data['isi'];
?>
	<form method="post" action="" enctype="multipart/form-data">
		<h3>Edit Isi Halaman About </h3> 
		<label>Isi Utama</label><br>
		
		<textarea rows="7" cols="128" name="txt_isi">
		<?php echo $isi; ?>
		</textarea><br>
		<input type="submit" name="btn_isi" class="btn btn-primary" value="Update Isi">&emsp;<input type="submit" name="aa" value="Refresh" class="btn btn-success" onClick="document.location.reload(true)">
		<br><br>
<?php
	$sql2 = mysqli_query($db,"SELECT * FROM tb_about where id=2 ");
	$data = mysqli_fetch_assoc($sql2);
	$header = $data['header'];
	$isi_tab = $data['isi_tab'];
?>
		<label>Isi Tab Ke-1</label>
		<input class="form-control" value='<?php echo $header; ?>' name="head1"/>
		<input class="form-control" value='<?php echo $isi_tab; ?>' name="isitab1"/>
		<br>
<?php
	$sql2 = mysqli_query($db,"SELECT * FROM tb_about where id=3 ");
	$data = mysqli_fetch_assoc($sql2);
	$header = $data['header'];
	$isi_tab = $data['isi_tab'];
?>
		<label>Isi Tab Ke-2</label>
		<input class="form-control" value='<?php echo $header; ?>' name="head2"/>
		<input class="form-control" value='<?php echo $isi_tab; ?>' name="isitab2"/>
		<br>
<?php
	$sql2 = mysqli_query($db,"SELECT * FROM tb_about where id=4 ");
	$data = mysqli_fetch_assoc($sql2);
	$header = $data['header'];
	$isi_tab = $data['isi_tab'];
?>
		<label>Isi Tab Ke-3</label>
		<input class="form-control" value='<?php echo $header; ?>' name="head3"/>
		<input class="form-control" value='<?php echo $isi_tab; ?>' name="isitab3"/>
		<br>
<?php
	$sql3 = mysqli_query($db,"SELECT * FROM tb_about where id=5");
	$data = mysqli_fetch_assoc($sql3);
	$header = $data['header'];
	$isi_tab = $data['isi_tab'];
?>
		<label>Isi Tab Ke-4</label>
		<input class="form-control" value='<?php echo $header; ?>' name="head4"/>
		<input class="form-control" value='<?php echo $isi_tab; ?>' name="isitab4"/>
		<input type="submit" name="tab" class="btn btn-primary" value="Update Konten Tab">&emsp;<input type="submit" class="btn btn-success" name="aa" value="Refresh" onClick="document.location.reload(true)">
		<br><br>
		<h3>Upload Gambar Halaman About: (Ukuran Proporsional 550 x 350) </h3> 
		<input type="file" name="gambar"><br>
		<input type="submit" name="unggah" value="Gambar 1 " class="btn btn-warning">&emsp;<input type="submit" name="unggah2" value="Gambar 2" class="btn btn-warning">&emsp;<input type="submit" name="unggah3" value="Gambar 3" class="btn btn-warning">
		&emsp;<input type="submit" name="unggah4" value="Gambar 4" class="btn btn-warning">&emsp;<input type="submit" name="unggah5" value="Gambar 5" class="btn btn-warning"> 
		<br><br><br>
	</form>

<!-- KODE FORMULIR HTML -->

<!-- KODE PHP UPLOAD GAMBAR-- >
<?php

	 include('koneksi.php'); // Koneksi ke database
	$txt_isi = $_POST['txt_isi'];
	$head1 = $_POST['head1'];
	$isitab1 = $_POST['isitab1'];
	$head2 = $_POST['head2'];
	$isitab2 = $_POST['isitab2'];
	$head3 = $_POST['head3'];
	$isitab3 = $_POST['isitab3'];
	$head4 = $_POST['head4'];
	$isitab4 = $_POST['isitab4'];
	
	if (isset($_POST['btn_isi'])) { 
		mysqli_query($db, "UPDATE tb_about SET isi='$txt_isi' WHERE id=1")or die (mysql_error());
	}
	
	if (isset($_POST['tab'])) { 
		mysqli_query($db, "UPDATE tb_about SET header='$head1', isi_tab='$isitab1' WHERE id=2")or die (mysql_error());

		mysqli_query($db, "UPDATE tb_about SET header='$head2', isi_tab='$isitab2' WHERE id=3")or die (mysql_error());

		mysqli_query($db, "UPDATE tb_about SET header='$head3', isi_tab='$isitab3' WHERE id=4")or die (mysql_error());
		
		mysqli_query($db, "UPDATE tb_about SET header='$head4', isi_tab='$isitab4' WHERE id=5")or die (mysql_error());
	}

	if (isset($_POST['unggah'])) { //Jika tombol unggah di klik

		$gambar = $_FILES['gambar']['tmp_name']; //Mengambil file gambar pada input type="file" name="gambar"

		$alamat = $_FILES['gambar']['name']; //Mengambil alamat/url gambar pada input type="file" name="gambar"

		$folder = "gambar/";



		$pindah = move_uploaded_file($gambar, $folder.$alamat); //Memindahkan gambar ke file gambar/ yang sudah dibuat tadi

		if ($pindah) { //Jika gambar berhasil dipindah
		
			mysqli_query($db, "UPDATE tb_about SET gambar='$alamat' WHERE id=1")or die (mysql_error());

			//mysqli_query($db, "INSERT INTO tb_about VALUES('','$alamat')"); //Masukan alamat gambar ke database

			echo "<div>Berhasil Upload Gambar!</div>";

		}

		else{//Jika gambar gagal dipindah

			echo "<div>Gambar gagal diunggah</div>"; //Tampilkan peringatan

		}

	}		

//---------------------------------------------------------------------------------------------------------------------
	if (isset($_POST['unggah2'])) { //Jika tombol unggah di klik

		$gambar = $_FILES['gambar']['tmp_name']; //Mengambil file gambar pada input type="file" name="gambar"

		$alamat = $_FILES['gambar']['name']; //Mengambil alamat/url gambar pada input type="file" name="gambar"

		$folder = "gambar/";



		$pindah = move_uploaded_file($gambar, $folder.$alamat); //Memindahkan gambar ke file gambar/ yang sudah dibuat tadi

		if ($pindah) { //Jika gambar berhasil dipindah
		
			mysqli_query($db, "UPDATE tb_about SET gambar='$alamat' WHERE id=2")or die (mysql_error());

			//mysqli_query($db, "INSERT INTO tb_about VALUES('','$alamat')"); //Masukan alamat gambar ke database

			echo "<div>Berhasil Upload Gambar!</div>";

		}

		else{//Jika gambar gagal dipindah

			echo "<div>Gambar gagal diunggah</div>"; //Tampilkan peringatan

		}

	}		
	
//---------------------------------------------------------------------------------------------------------------------

	if (isset($_POST['unggah3'])) { //Jika tombol unggah di klik

		$gambar = $_FILES['gambar']['tmp_name']; //Mengambil file gambar pada input type="file" name="gambar"

		$alamat = $_FILES['gambar']['name']; //Mengambil alamat/url gambar pada input type="file" name="gambar"

		$folder = "gambar/";



		$pindah = move_uploaded_file($gambar, $folder.$alamat); //Memindahkan gambar ke file gambar/ yang sudah dibuat tadi

		if ($pindah) { //Jika gambar berhasil dipindah
		
			mysqli_query($db, "UPDATE tb_about SET gambar='$alamat' WHERE id=3")or die (mysql_error());

			//mysqli_query($db, "INSERT INTO tb_about VALUES('','$alamat')"); //Masukan alamat gambar ke database

			echo "<div>Berhasil Upload Gambar!</div>";

		}

		else{//Jika gambar gagal dipindah

			echo "<div>Gambar gagal diunggah</div>"; //Tampilkan peringatan

		}

	}		
	
	//---------------------------------------------------------------------------------------------------------------------
	if (isset($_POST['unggah4'])) { //Jika tombol unggah di klik

		$gambar = $_FILES['gambar']['tmp_name']; //Mengambil file gambar pada input type="file" name="gambar"

		$alamat = $_FILES['gambar']['name']; //Mengambil alamat/url gambar pada input type="file" name="gambar"

		$folder = "gambar/";



		$pindah = move_uploaded_file($gambar, $folder.$alamat); //Memindahkan gambar ke file gambar/ yang sudah dibuat tadi

		if ($pindah) { //Jika gambar berhasil dipindah
		
			mysqli_query($db, "UPDATE tb_about SET gambar='$alamat' WHERE id=4")or die (mysql_error());

			//mysqli_query($db, "INSERT INTO tb_about VALUES('','$alamat')"); //Masukan alamat gambar ke database

			echo "<div>Berhasil Upload Gambar!</div>";

		}

		else{//Jika gambar gagal dipindah

			echo "<div>Gambar gagal diunggah</div>"; //Tampilkan peringatan

		}

	}		
	
//---------------------------------------------------------------------------------------------------------------------

	if (isset($_POST['unggah5'])) { //Jika tombol unggah di klik

		$gambar = $_FILES['gambar']['tmp_name']; //Mengambil file gambar pada input type="file" name="gambar"

		$alamat = $_FILES['gambar']['name']; //Mengambil alamat/url gambar pada input type="file" name="gambar"

		$folder = "gambar/";



		$pindah = move_uploaded_file($gambar, $folder.$alamat); //Memindahkan gambar ke file gambar/ yang sudah dibuat tadi

		if ($pindah) { //Jika gambar berhasil dipindah
		
			mysqli_query($db, "UPDATE tb_about SET gambar='$alamat' WHERE id=5")or die (mysql_error());

			//mysqli_query($db, "INSERT INTO tb_about VALUES('','$alamat')"); //Masukan alamat gambar ke database

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

	$q = mysqli_query($db, "SELECT * FROM tb_about");

	while ($d = mysqli_fetch_array($q)) {

?>

	<img src="gambar/<?php echo $d['gambar'];?>" style="width:290px;height:250px;"> &ensp;

<?php

}
 

?>

<!-- Tab Tutorial-->				 
    </div>
		<div class="tab-pane fade" id="edit">
	
		</div>
	</div>         <!-- /. PAGE INNER  -->
			 
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
