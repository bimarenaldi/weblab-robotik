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
		<?php
			 include('koneksi.php');
			$sql = mysqli_query($db,"SELECT * FROM tb_code where id = 1 ");
			$data = mysqli_fetch_assoc($sql);
			$code = $data['code'];
			?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Admin Dashboard</h2><br><hr>
                    </div>
                </div>
					<center><div class="col-md-4"><br>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                               <center> Kode Pendaftaran Aslab</center> 
                            </div>
                            <div class="panel-body">
                                <input class="form-control" value='<?php echo $code; ?>' name="txt_code"/>
                            </div>
                            <div class="panel-footer">
                                <input type="submit" name="edit"  class="btn btn-primary" value="Edit Kode">&emsp;<input type="submit" name="aa"  class="btn btn-success" value="Refresh" onClick="document.location.reload(true)">
                            </div>
                        </div>
                    </div></center>
					<?php
						$sql1 = mysqli_query($db,"SELECT * FROM tb_sosmed where id = 1 ");
						$d = mysqli_fetch_assoc($sql1);
						$face = $d['facebook'];
						$insta = $d['instagram'];
						$email = $d['email'];
					?>
				<form method="post" action="" enctype="multipart/form-data">
					<div class="col-md-8"><br>
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                               <center> Sosial Media Lab.</center> 
                            </div>
                            <div class="panel-body">

                               Facebook 
								<input class="form-control" style="width:60%;" value='<?php echo $face; ?>' name="fb"/>

							<hr>
                                Instagram &emsp;
								<input class="form-control" style="width:450px;" value='<?php echo $insta; ?>' name="insta"/>

							<hr>
                                Email &emsp;
								<input class="form-control" style="width:450px;" value='<?php echo $email; ?>' name="email"/>

                            </div>
                            <div class="panel-footer">
                                <input type="submit" name="edit1"  class="btn btn-primary" value="Edit">&emsp;<input type="submit" name="aa"  class="btn btn-success" value="Refresh" onClick="document.location.reload(true)">
                            </div>
                        </div>
                    </div>
                </form>
			<?php
				if (isset($_POST['edit'])) { 
					$kode = $_POST['txt_code'];
					mysqli_query($db, "UPDATE tb_code SET code='$code' WHERE id=1")or die (mysql_error());
				}
				if (isset($_POST['edit1'])) { 
					$fb = $_POST['fb'];
					$instag = $_POST['insta'];
					$txt_email = $_POST['email'];
					mysqli_query($db, "UPDATE tb_sosmed SET facebook='$fb', instagram='$instag', email='$txt_email' WHERE id=1")or die (mysql_error());
				}
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
