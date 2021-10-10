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
			<li class="active"><a href="#aslab" data-toggle="tab">Daftar Aslab</a>
            </li>
            <li class=""><a href="#home" data-toggle="tab">Insert Data Aslab</a>
            </li>
            <li class=""><a href="#edit" data-toggle="tab">Edit Data Aslab</a>
            </li>
			<li class=""><a href="#tutor" data-toggle="tab">Tutorial Insert & Edit</a>
            </li>
        </ul>
		 <div class="tab-content">
		 
			<div class="tab-pane fade active in" id="aslab">
					<div class="row">
                    <div class="col-md-12">
                     <center><h2>Daftar Aslab Page</h2></center>   
                    </div>
                </div>
				<hr />
				<input type="submit" name="btn_isi"  value="Refresh Page" class="btn btn-success" onClick="window.location.reload();">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
										<th>Foto</th>
                                        <th>Jabatan</th>
										<th>Quote</th>
										<th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
			<?php
				 include('koneksi.php'); // Koneksi ke database
				$sql = mysqli_query($db,"SELECT * FROM tb_aslab order by id ASC");
				
				while ($data = mysqli_fetch_array ($sql)){
				echo "
			
                                    <tr class='warning'>
                                        <td>".$data['id']."</td>
										<td>".$data['nama']."</td>
										<td><img src='gambar/".$data['foto']."' width='50px' height='50px'/></td>
										<td>".$data['jabatan']."</td>
										<td>".$data['kata']."</td>
										<td><a href='delete_aslab.php?id=".$data['id']."'>HAPUS</a></td>
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
                     <h2>Insert Data Aslab Page</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->    
<!-- KODE FORMULIR HTML -->

	<form method="post" action="" enctype="multipart/form-data">
		<label>Upload Foto Aslab (Ukuran Optimal 250 x 250 / lebih)</label>
		<input type="file"  name="gambar" ><br>
		<label>Nama Aslab :</label>
		<input class="form-control" name="txt_nama"/>
		<label>Jabatan :</label><br>&emsp;
			<tr><input type="radio" name="txt_jabatan" value="Ketua"> Ketua &emsp;
			<input type="radio" name="txt_jabatan" value="Sekretaris"> Sekretaris &emsp;
			<input type="radio" name="txt_jabatan" value="Bendahara"> Bendahara &emsp;
			<input type="radio" name="txt_jabatan" value="Koordinator Praktikum"> Koordinator Praktikum &emsp;
			<input type="radio" name="txt_jabatan" value="Anggota"> Anggota &emsp;
			<input type="radio" name="txt_jabatan" value="Alumni"> Alumni &emsp;<br><br>
		<label>Kata - kata / Quote :</label>
		<input class="form-control" name="txt_kata"/>
		<label>Link Facebook :</label>
		<input class="form-control" name="txt_facebook"/>
		<label>Link Instagram :</label>
		<input class="form-control" name="txt_instagram"/>
		<label>Link Email :</label>
		<input class="form-control" name="txt_email"/><br>
		<input type="submit" name="unggah" class="btn btn-primary" value="Simpan" onClick="ManualRefresh();">

	</form>

<!-- KODE FORMULIR HTML -->



<!-- KODE PHP UPLOAD GAMBAR-- >
//Script Banner 1
<?php
	if (isset($_POST['unggah'])) { //Jika tombol unggah di klik
	
	 include('koneksi.php'); // Koneksi ke database
	$txt_nama = $_POST['txt_nama'];
	$txt_jabatan= $_POST['txt_jabatan'];
	$txt_kata = $_POST['txt_kata'];
	$txt_facebook = $_POST['txt_facebook'];
	$txt_instagram = $_POST['txt_instagram'];
	$txt_email = $_POST['txt_email'];
	
	if( $txt_jabatan =="Ketua"){
		$st = 1;
	}
	else if($txt_jabatan =="Sekretaris"){
		$st = 2;
	}
	else if($txt_jabatan =="Bendahara"){
		$st = 3;
	}
	else if($txt_jabatan =="Koordinator Praktikum"){
		$st = 4;
	}
	else if($txt_jabatan =="Anggota"){
		$st = 5;
	}
	else {
		$st = 6;
	}

		$gambar = $_FILES['gambar']['tmp_name']; //Mengambil file gambar pada input type="file" name="gambar"

		$alamat = $_FILES['gambar']['name']; //Mengambil alamat/url gambar pada input type="file" name="gambar"

		$folder = "gambar/";

		$pindah = move_uploaded_file($gambar, $folder.$alamat); //Memindahkan gambar ke file gambar/ yang sudah dibuat tadi

		if ($pindah) { //Jika gambar berhasil dipindah
		
			mysqli_query($db, "INSERT into tb_aslab VALUES ('','$alamat','$txt_nama','$txt_jabatan','$st','$txt_kata','$txt_facebook','$txt_instagram','$txt_email')");
			

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
                     <h2>Edit Data Aslab Page</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
              
                 <!-- /. ROW  -->    
<!-- KODE FORMULIR HTML -->
<?php
		 include('koneksi.php'); // Koneksi ke database
		$sql = mysqli_query($db,"SELECT * FROM tb_aslab order by id ASC");
		$data = mysqli_fetch_assoc($sql);
		//$isi = $data['id'];
?>
	<form method="post" action="" enctype="multipart/form-data">
		<label>Masukkan ID Anggota yang Akan Diedit : </label>
		<input class="form-control" name="rec_id"/>
		<input type="submit" name="edit" class="btn btn-primary" value="Cari"><br><br><br>
		<?php
		if (isset($_POST['edit'])) {
			$rec_id= $_POST['rec_id'];
			 include('koneksi.php'); // Koneksi ke database
			$sql = mysqli_query($db,"SELECT * FROM tb_aslab where id ='$rec_id'");
			$data = mysqli_fetch_assoc($sql);
			$nama = $data['nama'];
			$jabatan= $data['jabatan'];
			$kata = $data['kata'];
			$email = $data['email'];
			$id = $data['id'];
			$facebook = $data['facebook'];
			$instagram = $data['instagram'];
			if ($rec_id = $id) {

		?>
		<table style="width:100%">
		 <tr>
		<label>Foto Aslab :</label><br>
		<input type='hidden' value="<?php echo $id; ?>" name='txt_id'>
		<th><img src="gambar/<?php echo $data['foto'];?>" style="width:130px;height:130px;"> &ensp; </th>
		<th><h3>Edit Foto :</h3> <br><input type="file" name="gambar"></th><br>
		</tr></table>
		<br>
		<input type="submit" name="foto" class="btn btn-primary" value="Simpan">
		<br><br>
		<input type='hidden' value="<?php echo $id; ?>" name='txt_id2'>
		<label>Nama Aslab :</label>
		<input class="form-control" value='<?php echo $nama; ?>' name="txt_nama"/>
		<label>Jabatan :</label>
		<tr><input type="radio" name="txt_jabatan" value="Ketua"  <?php if($jabatan=='Ketua'){echo 'checked';}?>/> Ketua &emsp;
			<input type="radio" name="txt_jabatan" value="Sekretaris" <?php if($jabatan=='Sekretaris'){echo 'checked';}?>/> Sekretaris &emsp;
			<input type="radio" name="txt_jabatan" value="Bendahara" <?php if($jabatan=='Bendahara'){echo 'checked';}?>/> Bendahara &emsp;
			<input type="radio" name="txt_jabatan" value="Koordinator Praktikum" <?php if($jabatan=='Koordinator Praktikum'){echo 'checked';}?>/> Koordinator Praktikum &emsp;
			<input type="radio" name="txt_jabatan" value="Anggota" <?php if($jabatan=='Anggota'){echo 'checked';}?>/> Anggota &emsp;
			<input type="radio" name="txt_jabatan" value="Alumni" <?php if($jabatan=='Alumni'){echo 'checked';}?>/> Alumni &emsp;<br><br>
		<label>Kata - kata / Quote :</label>
		<input class="form-control" value='<?php echo $kata; ?>' name="txt_kata"/>
		<label>Link Facebook :</label>
		<input class="form-control" value='<?php echo $facebook; ?>' name="txt_facebook"/>
		<label>Link Instagram :</label>
		<input class="form-control" value='<?php echo $instagram; ?>' name="txt_instagram"/><br>
		<label>Alamat Email:</label>
		<input class="form-control" value='<?php echo $email; ?>' name="txt_email"/><br>
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
		
			mysqli_query($db, "UPDATE tb_aslab SET foto='$alamat' WHERE id=$txt_id")or die (mysql_error());

			//mysqli_query($db, "INSERT INTO tb_banner VALUES('','$alamat')"); //Masukan alamat gambar ke database
		}
	}
	
	if (isset($_POST['unggah'])) { //Jika tombol unggah di klik
	
	// include('koneksi.php'); // Koneksi ke database
	$txt_nama = $_POST['txt_nama'];
	$txt_jabatan= $_POST['txt_jabatan'];
	$txt_kata = $_POST['txt_kata'];
	$txt_id = $_POST['txt_id2'];
	$txt_facebook = $_POST['txt_facebook'];
	$txt_instagram = $_POST['txt_instagram'];
	
	if( $txt_jabatan =="Ketua"){
		$st = 1;
	}
	else if($txt_jabatan =="Sekretaris"){
		$st = 2;
	}
	else if($txt_jabatan =="Bendahara"){
		$st = 3;
	}
	else if($txt_jabatan =="Koordinator Praktikum"){
		$st = 4;
	}
	else if($txt_jabatan =="Anggota"){
		$st = 5;
	}
	else {
		$st = 6;
	}
	
	mysqli_query($db, "UPDATE tb_aslab SET nama='$txt_nama',jabatan='$txt_jabatan', s='$st', kata='$txt_kata',facebook='$txt_facebook',instagram='$txt_instagram',email='$txt_email' WHERE id='$txt_id'")or die (mysql_error());
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
