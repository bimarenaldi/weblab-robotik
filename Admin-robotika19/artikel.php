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
	<div class="tab-content">
        <div id="page-wrapper" >
            <div id="page-inner">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#Artikel" data-toggle="tab">Daftar Artikel</a>
            </li>
            <li class=""><a href="#home" data-toggle="tab">Insert Data Artikel</a>
            </li>
            <li class=""><a href="#edit" data-toggle="tab">Edit Data Artikel</a>
            </li>
			<li class=""><a href="#tutor" data-toggle="tab">Tutorial Insert & Edit</a>
            </li>
        </ul>
		 <div class="tab-content">
		 
			<div class="tab-pane fade active in" id="Artikel">
					<div class="row">
                    <div class="col-md-12">
                     <center><h2>Daftar Artikel Page</h2></center>   
                    </div>
                </div>
				<hr />
				<input type="submit" name="btn_isi"  value="Refresh Page" class="btn btn-success" onClick="window.location.reload();">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
										<th>Tanggal</th>
										<th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Tag</th>
										<th>Penulis</th>
										<th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
			<?php
				 include('koneksi.php'); // Koneksi ke database
				$sql = mysqli_query($db,"SELECT * FROM tb_artikel order by id ASC");
				
				while ($data = mysqli_fetch_array ($sql)){
				echo "
			
                                    <tr class='warning'>
                                         <td>".$data['id']."</td>
										  <td>".$data['tgl']."</td>
										<td><img src='gambar/".$data['gambar']."' width='50px' height='50px'/></td>
										<td>".$data['judul']."</td>
										<td>".$data['tag']."</td>
										<td>".$data['penulis']."</td>
										<td><a href='delete_artikel.php?id=".$data['id']."'>HAPUS</a></td>
                                    </tr>";
					
				}
				    mysqli_close($db);		
				?>
                                </tbody>
                            </table>
                        </div>
			</div>
			
			<div class="tab-pane fade" id="home">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Insert Data Artikel Page</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->    
<!-- KODE FORMULIR HTML -->

	<form method="post" action="" enctype="multipart/form-data">
		<label>Upload Gambar Artikel </label>
		<input type="file"  name="gambar" ><br>
		<label>Judul Artikel :</label>
		<input class="form-control" name="txt_judul"/><br>
		<label>Tag Artikel :</label><br>&emsp;
			<tr><input type="radio" name="txt_tag" value="Teknologi"> Teknologi &emsp;
			<input type="radio" name="txt_tag" value="Life Style"> Life Style &emsp;
			<input type="radio" name="txt_tag" value="Ekonomi"> Ekonomi  &emsp;
			<input type="radio" name="txt_tag" value="Pendidikan"> Pendidikan &emsp;<br><br>
		<label>Penulis :</label>
		<input class="form-control" name="txt_penulis"/><br>
		<label>Isi Artikel :</label>
		<textarea rows="7" cols="128" name="txt_isi">
		</textarea><br>
		<input type="submit" name="unggah" class="btn btn-primary" value="Simpan" onClick="ManualRefresh();">

	</form>

<!-- KODE FORMULIR HTML -->



<!-- KODE PHP UPLOAD GAMBAR-- >
//Script Banner 1
<?php
	if (isset($_POST['unggah'])) { //Jika tombol unggah di klik
	date_default_timezone_set('Asia/Jakarta');
	$date = date("d-m-Y");
	$time = date("H:i:s");
	
	
	 include('koneksi.php'); // Koneksi ke database
	$txt_judul = $_POST['txt_judul'];
	$txt_tag= $_POST['txt_tag'];
	$txt_kata = $_POST['txt_kata'];
	$txt_penulis = $_POST['txt_penulis'];
	$txt_isi = $_POST['txt_isi'];

		$gambar = $_FILES['gambar']['tmp_name']; //Mengambil file gambar pada input type="file" name="gambar"

		$alamat = $_FILES['gambar']['name']; //Mengambil alamat/url gambar pada input type="file" name="gambar"

		$folder = "gambar/";

		$pindah = move_uploaded_file($gambar, $folder.$alamat); //Memindahkan gambar ke file gambar/ yang sudah dibuat tadi

		if ($pindah) { //Jika gambar berhasil dipindah
		
			mysqli_query($db, "INSERT into tb_artikel VALUES ('','$date','$txt_judul','$txt_tag','$txt_penulis','$txt_isi','$alamat')");
			//mysqli_query($db, "INSERT into tb_Artikel VALUES ('','$alamat','$txt_nama','$txt_jabatan','$st','$txt_kata','$txt_facebook','$txt_instagram')");
			

			//mysqli_query($db, "INSERT INTO tb_banner VALUES('','$alamat')"); //Masukan alamat gambar ke database
		}

		else{//Jika gambar gagal dipindah

			echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>"; //Tampilkan peringatan

		}



	}		

?>


<!-- KODE HTML & PHP UNTUK TAB EDIT-->				 
		</div>
		<div class="tab-pane fade" id="edit">
			<div class="row">
                    <div class="col-md-12">
                     <h2>Edit Data Artikel Page</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->    
<!-- KODE FORMULIR HTML -->
<?php
		 include('koneksi.php'); // Koneksi ke database
		$sql1 = mysqli_query($db,"SELECT * FROM tb_about where id = 2 ");
		$d = mysqli_fetch_assoc($sql1);
		$isi = $d['isi'];
?>
	<form method="post" action="" enctype="multipart/form-data">
	<label>Isi Utama</label>
		
		<textarea rows="5" cols="128" name="txt_isi1">
		<?php echo $isi; ?>
		</textarea><br>
		<input type="submit" name="btn_isi" class="btn btn-primary" value="Update Isi">&emsp;
		<br><br>
	<?php	
			if (isset($_POST['btn_isi'])) { 
				$txt_isi1 =$_POST['txt_isi1'];
				mysqli_query($db, "UPDATE tb_about SET isi='$txt_isi1' WHERE id=2")or die (mysql_error());
			}
		$sql = mysqli_query($db,"SELECT * FROM tb_Artikel order by id ASC");
		$data = mysqli_fetch_assoc($sql);
	?>	
		<label>Masukkan ID Anggota yang Akan Diedit : </label>
		<input class="form-control" name="rec_id"/>
		<input type="submit" name="edit" class="btn btn-primary" value="Cari"><br><br><br><hr>
		<?php

		if (isset($_POST['edit'])) {
			$rec_id= $_POST['rec_id'];
			 include('koneksi.php'); // Koneksi ke database
			$sql = mysqli_query($db,"SELECT * FROM tb_artikel where id ='$rec_id'");
			$data = mysqli_fetch_assoc($sql);
			$judul = $data['judul'];
			$tag= $data['tag'];
			$penulis = $data['penulis'];
			$id = $data['id'];
			$gambar = $data['gambar'];
			$isi = $data['isi_artikel'];
			if ($rec_id = $id) {

		?>
		<table style="width:100%">
		 <tr>
		<label>Gambar Artikel :</label><br>
		<input type='hidden' value="<?php echo $id; ?>" name='txt_id'>
		<th><img src="gambar/<?php echo $data['gambar'];?>" style="width:130px;height:130px;"> &ensp; </th>
		<th><h3>Edit Foto :</h3> <br><input type="file" name="gambar"></th><br>
		</tr></table><hr>
		<br>
		<input type="submit" name="foto" class="btn btn-primary" value="Simpan">
		<br><br>
		<input type='hidden' value="<?php echo $id; ?>" name='txt_id2'>
		<label>Judul Artikel :</label><br>
		<input class="form-control" value='<?php echo $judul; ?>' name="txt_judul"/><br><br>
		<label>Tag :</label><br>
		<tr><input type="radio" name="txt_tag" value="Teknologi" <?php if($tag=='Teknologi'){echo 'checked';}?>/> Teknologi &emsp;
			<input type="radio" name="txt_tag" value="Life Style" <?php if($tag=='Life Style'){echo 'checked';}?>/> Life Style &emsp;
			<input type="radio" name="txt_tag" value="Ekonomi" <?php if($tag=='Ekonomi'){echo 'checked';}?>/> Ekonomi  &emsp;
			<input type="radio" name="txt_tag" value="Pendidikan" <?php if($tag=='Pendidikan'){echo 'checked';}?>/> Pendidikan &emsp;<br><br>
		<label>Penulis :</label><br>
		<input class="form-control" value='<?php echo $penulis; ?>' name="txt_penulis"/><br><br>
		<label>Isi Artikel :</label>
		<textarea rows="7" cols="128" name="txt_isi">
			<?php echo $isi; ?>
		</textarea><br>
		<input type="submit" name="unggah" class="btn btn-primary" value="Simpan">
	

<!-- KODE PHP UPLOAD GAMBAR-- >
<?php
		}
		else {
			echo "<script>alert('ID Tidak Ditemukan');</script>";
				
		}
	}
		
	if (isset($_POST['foto'])) {
	
		$txt_id = $_POST['txt_id'];
		
		$gambar = $_FILES['gambar']['tmp_name']; //Mengambil file gambar pada input type="file" name="gambar"

		$alamat = $_FILES['gambar']['name']; //Mengambil alamat/url gambar pada input type="file" name="gambar"

		$folder = "gambar/";


		$pindah = move_uploaded_file($gambar, $folder.$alamat); //Memindahkan gambar ke file gambar/ yang sudah dibuat tadi

		if ($pindah) { //Jika gambar berhasil dipindah
		
			mysqli_query($db, "UPDATE tb_artikel SET gambar='$alamat' WHERE id=$txt_id")or die (mysql_error());

			//mysqli_query($db, "INSERT INTO tb_banner VALUES('','$alamat')"); //Masukan alamat gambar ke database
		}
	}
	
	if (isset($_POST['unggah'])) { //Jika tombol unggah di klik
	
	// include('koneksi.php'); // Koneksi ke database
	$txt_judul = $_POST['txt_judul'];
	$txt_tag = $_POST['txt_tag'];
	$txt_penulis = $_POST['txt_penulis'];
	$txt_id = $_POST['txt_id2'];
	$txt_isi = $_POST['txt_isi'];
	
	mysqli_query($db, "UPDATE tb_artikel SET judul='$txt_judul', tag='$txt_tag', penulis='$txt_penulis', isi_artikel='$txt_isi' WHERE id='$txt_id'")or die (mysql_error());
	//mysqli_query($db, "UPDATE tb_about SET gambar='$alamat' WHERE id=1")or die (mysql_error());

	}		
		
?>
  <!-- /. PAGE INNER  -->
  </form>
  
		</div>

		<div class="tab-pane fade" id="tutor">
			
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
	<script>
			if ( window.history.replaceState ) {
			window.history.replaceState( null, null, window.location.href );
	}
	</script>
    
   
</body>
</html>
