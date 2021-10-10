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
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;LIST PENDAFTAR</a>
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
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <center><h2>KONTAK DARI USER</h2></center>
						<hr><br>
                    </div>
                </div>
				<?php
					 include('koneksi.php'); // Koneksi ke database
					$sql1 = mysqli_query($db,"SELECT * FROM tb_about where id = 3 ");
					$d = mysqli_fetch_assoc($sql1);
					$isi = $d['isi'];
				?>
				<form method="post" action="" enctype="multipart/form-data">
				<label>Isi Utama</label>
				<textarea rows="5" cols="128" name="txt_isi1">
					<?php echo $isi; ?>
				</textarea><br>
				<input type="submit" name="btn_isi" class="btn btn-primary" value="Update Isi">&emsp;<input type="submit" name="aa" class="btn btn-success" value="Refresh" onClick="document.location.reload(true)">
				<br><br>
				</form>
			<?php
				if (isset($_POST['btn_isi'])) { 
					$txt_isi1 =$_POST['txt_isi1'];
					mysqli_query($db, "UPDATE tb_about SET isi='$txt_isi1' WHERE id=3")or die (mysql_error());
				}
			
				 include('koneksi.php'); // Koneksi ke database
				$sql = mysqli_query($db,"SELECT * FROM tb_kontak order by subjek ");
				
				while ($data = mysqli_fetch_array ($sql)){
			?>
					<div class="col-md-4">

                        <div class="panel panel-primary">
						
                            <div class="panel-heading">
                                ID : <?php echo $data['id'] ?><br>
								Tanggal : <?php echo $data['tgl'] ?><br>
								Nama : <?php echo $data['nama'] ?><br>
								Email : <?php echo $data['email'] ?><br>
								Subjek: <?php echo $data['subjek'] ?>
                            </div>
                            <div class="panel-body">
                             <center><h4>PESAN</h4></center><br>     
							<?php echo $data['isi'] ?>							 
							</div>
                            <div class="panel-footer">

                                     <center><?php echo "<h4><a href='delete_kontak.php?id=".$data['id']."'>-->HAPUS<--</a></h4>"; ?></center>							 

                            </div>
                        </div>

                    </div>
                			<?php
				}
				    mysqli_close($db);		
				?>
                <!-- /. ROW  -->

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
