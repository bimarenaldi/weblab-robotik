  <?php 
  session_start();
  if($_SESSION['status']!="aman"){
    header("location:code.php?pesan=belum_login2");
  }
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
	<link rel="icon" type="image/png" href="img/favicon1.png"/>
    <!-- Title Page-->
    <title>Form Pendaftaran Robotika</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main1.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Form Pendaftaran Aslab Robotika</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="" enctype="multipart/form-data">
						<div class="form-row">
                            <div class="name">NIM</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="number" name="nim" placeholder="Contoh : 1618058">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nama">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Tanggal Lahir</div>
                            <div class="value">
                                <input class="input--style-6" type="date" name="tanggal">
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Jenis Kelamin</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="jk" placeholder="Laki-Laki / Perempuan">
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Alamat Asal</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="alamat" placeholder="Alamat Lengkap">
                                </div>
                            </div>
                        </div>						                       
						<div class="form-row">
                            <div class="name">Nomor WA</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="number" name="wa" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Alasan Bergabung</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="alasan" placeholder="Alasan memilih bergabung di Lab. Robotika & Sistem Embedded"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload Foto</div>
                            <div class="value">
                                <div class="input-group js-input-file">
									<input type="file"  name="gambar" >
                                </div>
                                <div class="label--desc">Upload Foto Formal Berjas ITN Berbackground Merah</div>
                            </div>
                        </div>
						<div class="card-footer">
							<button class="btn btn--radius-2 btn--blue-2" type="submit" name="unggah">Daftar</button>
						</div>
                    </form>
	<?php
		if (isset($_POST['unggah'])) { //Jika tombol unggah di klik
			
			 include('admin-robotika19/koneksi.php'); // Koneksi ke database
			$txt_nim = $_POST['nim'];
			$txt_nama = $_POST['nama'];
			$txt_tanggal = $_POST['tanggal'];
			$txt_jk = $_POST['jk'];
			$txt_alamat = $_POST['alamat'];
			$txt_wa = $_POST['wa'];
			$txt_alasan = $_POST['alasan'];
			$gambar = $_FILES['gambar']['tmp_name']; //Mengambil file gambar pada input type="file" name="gambar"
		
		    if(!empty($txt_nim) && !empty($txt_nama) && !empty($txt_tanggal) && !empty($txt_jk) && !empty($txt_alamat) && !empty($txt_wa) && !empty($txt_alasan) && !empty($gambar))
			{
				
				
					$alamat = $_FILES['gambar']['name']; //Mengambil alamat/url gambar pada input type="file" name="gambar"

					$folder = "Admin-robotika19/gambar/";

					$pindah = move_uploaded_file($gambar, $folder.$alamat); //Memindahkan gambar ke file gambar/ yang sudah dibuat tadi

					if ($pindah) { //Jika gambar berhasil dipindah
					
						mysqli_query($db, "INSERT into tb_daftar VALUES ('','$txt_nim','$txt_nama','$txt_tanggal','$txt_jk','$txt_alamat','$txt_wa','$txt_alasan','$alamat')");
						session_destroy();
						$_SESSION['pesan'] = "belum_login";
						//echo "<script>alert('Terima Kasih, Anda Telah Berhasil Mendaftar. Tunggu Info Selanjutnya Melalui WA anda');history.go(-2);</script>";
						echo '<script type="text/javascript">
								window.location = "berhasil.html"
						</script>';
						
					}
					else{

						echo "<script>alert('Gagal di tambahkan!');history.go(-1);</script>"; //Tampilkan peringatan
					}

		
			}else{
				echo "<script>alert('Harap mengisi semua field data');history.go(1);</script>";
			}
	}	
	
?>
                </div>
                
            </div>
        </div>
	
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->