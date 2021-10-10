<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftar Page</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="Admin-robotika19/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="Admin-robotika19/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="Admin-robotika19/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    

                    <li>
                        <a href="../index.php"><i class="fa fa-qrcode "></i>Kembali Ke Home</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <center><h2>PENDAFTAR</h2></center>
						<hr><br>
                    </div>
                </div>
			<?php
				 include('admin-robotika19/koneksi.php'); // Koneksi ke database
				$sql = mysqli_query($db,"SELECT * FROM tb_daftar order by id DESC");
				
				while ($data = mysqli_fetch_array ($sql)){
			?>
					<div class="col-md-4">

                        <div class="panel panel-primary">
						
                            <div class="panel-heading">
                                Nama : <?php echo $data['nama'] ?>
                            </div>
                            <div class="panel-body">
                             <center><img src="Admin-robotika19/gambar/<?php echo $data['foto'];?>" style="width:150px;height:190px;"></center>                            
							
							</div>
                            <div class="panel-footer">
                                                       <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                     NIM 		   : <?php echo $data['nim'] ?> <br>   
									 Tanggal Lahir : <?php echo $data['tanggal'] ?><br>  
									 Jenis Kelamin : <?php echo $data['jk'] ?><br>  
									 Alamat		   : <?php echo $data['alamat'] ?><br>  
									 Nomor WA 	   : <?php echo $data['wa'] ?><br>  
									 Alasan		   : <?php echo $data['alasan'] ?><br>  

                                    </tr>
                                </thead>
                            </table>
                        </div>
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
    <script src="Admin-robotika19/assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="Admin-robotika19/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="Admin-robotika19/assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="Admin-robotika19/assets/js/custom.js"></script>


</body>
</html>
