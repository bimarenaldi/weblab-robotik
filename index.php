<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Web Robotika & Sistem Embedded</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon1.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css">  
    <!-- Elastic grid css file -->
    <link rel="stylesheet" href="css/elastic_grid.css"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>    
    <!-- Default Theme css file -->
    <link id="orginal" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body> 
     <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
          <div class="container">
          <div class="navbar-header">
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- LOGO -->

            <!-- TEXT BASED LOGO -->
            <a class="navbar-brand" href="#">LAB. <span>ROBOTIKA ITN</span></a>
            
            <!-- IMG BASED LOGO  -->
            <!--  <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a> --> 
            
                   
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#pricing">About</a></li>
			  <li><a href="#team">Aslab</a></li> 
              <li><a href="#testimonial">Dosen</a></li> 
              <li><a href="#blog">Artikel</a></li>               
              <li><a href="#contact">Contacts</a></li>                           
            </ul>           
          </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->

      <!-- BEGIN SLIDER AREA-->
      <div class="slider_area">
        <!-- BEGIN SLIDER-->          
        <div id="slides">
		<?php
			 include('admin-robotika19/koneksi.php');
			$b1 = mysqli_query($db, "SELECT * FROM tb_banner where id=1");
			$b2 = mysqli_query($db, "SELECT * FROM tb_banner where id=2");
			$b3 = mysqli_query($db, "SELECT * FROM tb_banner where id=3");
			while ($d = mysqli_fetch_array($b1)) {
		?>
          <ul class="slides-container">

            <!-- THE FIRST SLIDE-->
            <li>
              <!-- FIRST SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- FIRST SLIDE MAIN IMAGE -->
              <img src="Admin-robotika19/gambar/<?php echo $d['gambar'];?>" style="width:1000px;height:729px;">

              <!-- FIRST SLIDE CAPTION-->
              <div class="slider_caption">
                <h2><?php echo $d['txt_besar'] ?></h2>
                <p><?php echo $d['txt_kecil'] ?></p>
                <a href="code.php" class="slider_btn">Daftar Aslab</a>              
              </div>
            </li>
			  <?php
					}
					while ($d = mysqli_fetch_array($b2)) {
				?>
            <!-- THE SECOND SLIDE-->
            <li>
              <!-- SECOND SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- SECOND SLIDE MAIN IMAGE -->
               <img src="Admin-robotika19/gambar/<?php echo $d['gambar'];?>" style="width:1000px;height:729px;">

              <!-- SECOND SLIDE CAPTION-->
              <div class="slider_caption">
                <h2><?php echo $d['txt_besar'] ?></h2>
                <p><?php echo $d['txt_kecil'] ?></p>
                <a href="#about" class="slider_btn">Kenali Kami</a>
              </div>
            </li>
			  <?php
					}
					while ($d = mysqli_fetch_array($b3)) {
				?>
            <!-- THE THIRD SLIDE-->
            <li>
              <!-- THIRD SLIDE OVERLAY -->
              <div class="slider_overlay"></div> 
              <!-- THIRD SLIDE MAIN IMAGE -->
              <img src="Admin-robotika19/gambar/<?php echo $d['gambar'];?>" style="width:1000px;height:729px;">

              <!-- THIRD SLIDE CAPTION-->
              <div class="slider_caption">
                <h2><?php echo $d['txt_besar'] ?></h2>
                <p><?php echo $d['txt_kecil'] ?></p>
                <a href="#blog" class="slider_btn">Artikel Terbaru</a>                 
              </div>
            </li>
				 <?php
					}
				?>
          </ul>
          <!-- BEGAIN SLIDER NAVIGATION -->
          <nav class="slides-navigation">
            <!-- PREV IN THE SLIDE -->
            <a class="prev" href="#">
              <span class="icon-wrap"></span>
              <h3><strong>Prev</strong></h3>
            </a>
            <!-- NEXT IN THE SLIDE -->
            <a class="next" href="#">
              <span class="icon-wrap"></span>
              <h3><strong>Next</strong></h3>
            </a>
          </nav>       
        </div>
        <!-- END SLIDER-->          
      </div>

      <!-- END SLIDER AREA -->
    </header>
    <!--=========== End HEADER SECTION ================--> 

 	<!--=========== BEGAIN ABOUT SECTION ================-->
	<?php
			 include('admin-robotika19/koneksi.php');
			$a1 = mysqli_query($db, "SELECT * FROM tb_about where id=1");
			$a2 = mysqli_query($db, "SELECT * FROM tb_about where id=2");
			$a3 = mysqli_query($db, "SELECT * FROM tb_about where id=3");
			$a4 = mysqli_query($db, "SELECT * FROM tb_about where id=4");
			$a5 = mysqli_query($db, "SELECT * FROM tb_about where id=5");
			while ($d = mysqli_fetch_array($a1)) {
	?>
	
    <section id="pricing">
      <div class="container"> 
        <div class="row">
			<div class="col-lg-12 col-md-12">
            <div class="about_area">
              <!-- START ABOUT HEADING -->
              <div class="heading">
                <h2 class="wow fadeInLeftBig">About Us</h2>
                <p><?php echo $d['isi'] ?></p>
              </div>

		<?php
			}
			while ($d = mysqli_fetch_array($a2)) {
		?>
              <!-- START ABOUT CONTENT -->
              <div class="about_content">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_featured">
                      <div class="panel-group" id="accordion">
                        <!-- START SINGLE FEATURED ITEAM #1-->
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                 <span class="fa fa-check-square-o"></span><?php echo $d['header'] ?>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                            <?php echo $d['isi_tab'] ?> 
                            </div>
                          </div>
                        </div>
                        <!-- START SINGLE FEATURED ITEAM #2 -->
			<?php
				}
				while ($d = mysqli_fetch_array($a3)) {
			?>
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                 <span class="fa fa-check-square-o"></span><?php echo $d['header'] ?>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                               <?php echo $d['isi_tab'] ?>                         
							</div>
                          </div>
                        </div>
                        <!-- START SINGLE FEATURED ITEAM #3 -->
			<?php
				}
				while ($d = mysqli_fetch_array($a4)) {
			?>			
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                <span class="fa fa-check-square-o"></span><?php echo $d['header'] ?>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                 <?php echo $d['isi_tab'] ?>                        
							</div>
                          </div>
                        </div>
                        <!-- START SINGLE FEATURED ITEAM #4 -->
			<?php
				}
				while ($d = mysqli_fetch_array($a5)) {
			?>			
                        <div class="panel panel-default wow fadeInLeft">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                <span class="fa fa-check-square-o"></span><?php echo $d['header'] ?>
                              </a>
                            </h4>
                          </div>
                          <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                               <?php echo $d['isi_tab'] ?>                          
							</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
			<?php
				}
				
			?>

                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="about_slider">
                      <!-- BEGAIN FEATURED SLIDER -->
                      <div class="featured_slider">
	<?php
		 include('admin-robotika19/koneksi.php');
			$a1 = mysqli_query($db, "SELECT * FROM tb_about where id=1");
			$a2 = mysqli_query($db, "SELECT * FROM tb_about where id=2");
			$a3 = mysqli_query($db, "SELECT * FROM tb_about where id=3");
			$a4 = mysqli_query($db, "SELECT * FROM tb_about where id=4");
			$a5 = mysqli_query($db, "SELECT * FROM tb_about where id=5");
	?>
                        <!-- SINGLE SLIDE IN THE SLIDER -->
                        <div class="single_iteam">
			<?php
				while ($d = mysqli_fetch_array($a1)) {
			?>
                        <img src="Admin-robotika19/gambar/<?php echo $d['gambar'];?>" style="width:550px;height:350px;">                           
			<?php
				}
				while ($d = mysqli_fetch_array($a2)) {		
			?> 
						</div>
  
                        <!-- SINGLE SLIDE IN THE SLIDER -->

                        <div class="single_iteam">
                          <img src="Admin-robotika19/gambar/<?php echo $d['gambar'];?>" style="width:550px;height:350px;">            
			<?php
				}
				while ($d = mysqli_fetch_array($a3)) {
			?> 						  
                        </div>
                        <!-- SINGLE SLIDE IN THE SLIDER -->
		
                        <div class="single_iteam">
                          <img src="Admin-robotika19/gambar/<?php echo $d['gambar'];?>" style="width:550px;height:350px;">
			<?php
				}
				while ($d = mysqli_fetch_array($a4)) {
			?> 			  
                        </div>
                        <!-- SINGLE SLIDE IN THE SLIDER -->
                        <div class="single_iteam">
                          <img src="Admin-robotika19/gambar/<?php echo $d['gambar'];?>" style="width:550px;height:350px;">
            <?php
				}
				while ($d = mysqli_fetch_array($a5)) {
			?>               
                        </div>
                        <!-- SINGLE SLIDE IN THE SLIDER -->
                        <div class="single_iteam">
                          <img src="Admin-robotika19/gambar/<?php echo $d['gambar'];?>" style="width:550px;height:350px;">       
			<?php
				}
			?> 			  
                        </div>
                      </div>

                      <!-- END FEATURED SLIDER -->
                    </div>
                  </div>
                </div>
              </div>
            </div>			     
          </div>       
        </div>
      </div>
    </section>
    <!--=========== END ABOUT SECTION ================-->

	
    <!--=========== BEGAIN TEAM SECTION ================-->

	<section id="team">		
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- BEGAIN ABOUT HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Daftar Asisten Lab</h2>            
            </div>
            <div class="team_area">
              <!-- BEGAIN TEAM SLIDER -->
              <div class="team_slider">  
			  
			<?php
				 include('admin-robotika19/koneksi.php');
				$sql = "SELECT * FROM tb_aslab order by s";
				$result = mysqli_query($db, $sql);
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
			?>
                <!-- BEGAIN SINGLE TEAM SLIDE#1 -->              
                <div class="col-lg-3 col-md-3 col-sm-4">
                  <div class="single_team wow fadeInUp">
			
               
                    <div class="team_img">
                       <img src="Admin-robotika19/gambar/<?php echo $row['foto'];?>">
                    </div>
			     <h5 class=""><?php echo $row['nama'] ?></h5>
                    <span><?php echo $row['jabatan'] ?></span>                        
                    <p><?php echo $row['kata'] ?></p>
                    <div class="team_social">
                      <a href="<?php echo $row['facebook'] ?>" target="_blank"><i class="fa fa-facebook"></i></a>
					  <a href="mailto:<?php echo $row['email'] ?>" ><i class="fa fa-google-plus"></i></a>
                      <a href="<?php echo $row['instagram'] ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
				<?php
				}}
				mysqli_close($db);
				?>
                
                <!-- BEGAIN SINGLE TEAM SLIDE#7 -->                             
              </div>
			   <center><h2><a href="all_aslab.php" class="read_more">Lihat Semua Asisten Lab. <i class="fa fa-angle-double-right">  </i></a></h2></center>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END TEAM SECTION ================-->
	
	
	
	 <!--=========== BEGAIN TESTIMONIAL SECTION ================-->
	<?php
			 include('admin-robotika19/koneksi.php');
			$a1 = mysqli_query($db, "SELECT * FROM tb_dosen where id=1");
			$a2 = mysqli_query($db, "SELECT * FROM tb_dosen where id=2");
			$a3 = mysqli_query($db, "SELECT * FROM tb_dosen where id=3");
			while ($d = mysqli_fetch_array($a1)) {
	?>
	
	<section id="testimonial">
      <div class="container"> 
        <div class="row">
          <div class=" col-lg-7 col-md-7 col-sm-6">
            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Dosen Terkait</h2>
              <p><?php echo $d['kalimat'] ?></p>
            </div>
          </div>
          <div class=" col-lg-5 col-md-5 col-sm-6">
            <div class="testimonial_customer">
              <!-- BEGAIN TESTIMONIAL SLIDER -->
              <ul class="testimonial_slider">
                <!-- BEGAIN SINGLE TESTIMONIAL SLIDE#1 -->
                <li>
                  <div class="media testi_media">
                    <a class="media-left testi_img" href="#">
                      <img src="Admin-robotika19/gambar/<?php echo $d['foto'];?>">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading"><?php echo $d['nama'] ?></h4>
                      <span>KEPALA LABORATORIUM</span>                      
                    </div>
                  </div>
                  <div class="testi_content">
                    <p><?php echo $d['kata'] ?></p>
                  </div>
                </li>
                <!-- BEGAIN SINGLE TESTIMONIAL SLIDE#2 -->
            <?php
				}
					while ($d = mysqli_fetch_array($a2)) {
			?>
				<li>
                  <div class="media testi_media">
                    <a class="media-left testi_img" href="#">
                      <img src="Admin-robotika19/gambar/<?php echo $d['foto'];?>">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading"><?php echo $d['nama'] ?></h4>
                      <span>DOSEN SISTEM ROBOTIKA</span>                      
                    </div>
                  </div>
                  <div class="testi_content">
                    <p><?php echo $d['kata'] ?></p>
                  </div>
                </li>
                <!-- BEGAIN SINGLE TESTIMONIAL SLIDE#3 -->
            <?php
				}
					while ($d = mysqli_fetch_array($a3)) {
			?>
				<li>
                  <div class="media testi_media">
                    <a class="media-left testi_img" href="#">
                      <img src="Admin-robotika19/gambar/<?php echo $d['foto'];?>">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading"><?php echo $d['nama'] ?></h4>
                      <span>DOSEN SISTEM EMBEDDED </span>                      
                    </div>
                  </div>
                  <div class="testi_content">
                    <p><?php echo $d['kata'] ?></p>
                  </div>
                </li>
			<?php
				}
			?>
              </ul>
            </div>
          </div>           
        </div>
      </div>
    </section>
    <!--=========== END TESTIMONIAL SECTION ================-->


    <!--=========== BEGAIN BLOG SECTION ================-->
    <section id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Artikel Terbaru</h2>
			  <?php
				 include('admin-robotika19/koneksi.php'); // Koneksi ke database
				$sql1 = mysqli_query($db,"SELECT * FROM tb_about where id = 2 ");
				$d = mysqli_fetch_assoc($sql1);
			?>
              <p><?php echo $d['isi'] ?></p>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <!-- BEGAIN BLOG CONTENT -->
            <div class="blog_content">

              <!-- BEGAIN BLOG SLIDER -->
              <div class="blog_slider">
			  <?php
				$sql = "SELECT * FROM tb_artikel order by id DESC";
				$result = mysqli_query($db, $sql);
				
				if (mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						$text_lengkap = $row['isi_artikel'];
						$text = substr($text_lengkap, 1, 250);
				?>
                <!-- BEGAIN SINGLE BLOG -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_post wow fadeInUp">
                    <div class="blog_img">
                       <img src="Admin-robotika19/gambar/<?php echo $row['gambar'];?>">
                    </div>
                    <h3><?php echo $row['judul'] ?></h3>
                  <div class="post_commentbox">
                      <i class="fa fa-user"></i><?php echo $row['penulis'] ?>&ensp;
                      <span><i class="fa fa-calendar"></i><?php echo $row['tgl'] ?></span>&ensp;
                      <i class="fa fa-tags"></i><?php echo $row['tag'] ?>
                    </div>
                    <p align="justify"><?php echo $text . ' ......'; ?></p>
                   <a href="artikel.php?id=<?php echo $row['id'] ?>" class="read_more">Read More <i class="fa fa-angle-double-right">  </i></a>                   
                  </div>
                </div>
			<?php
				}}
				mysqli_close($db);
			?>
                  </div>
				    <center><h2><a href="all_artikel.php" class="read_more">Lihat Semua Artikel <i class="fa fa-angle-double-right">  </i></a></h2></center>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END BLOG SECTION ================-->

    <!--=========== BEGAIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- START CONTACT HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Contact Us</h2>
			  <?php
				 include('admin-robotika19/koneksi.php'); // Koneksi ke database
				$sql1 = mysqli_query($db,"SELECT * FROM tb_about where id = 3 ");
				$d = mysqli_fetch_assoc($sql1);
			?>
              <p><?php echo $d['isi'] ?> </p>
            </div>
          </div>
        </div>       
        <div class="row">
          <!-- BEGAIN CONTACT CONTENT -->
          <div class="contact_content">
            <!-- BEGAIN CONTACT FORM -->
            <div class="col-lg-5 col-md-5 col-sm-5">
              <div class="contact_form">

                <!-- FOR CONTACT FORM MESSAGE -->
                <div id="form-messages"></div>

                <form method="post" action="" enctype="multipart/form-data">
                  <input class="form-control" type="text" placeholder="Nama" name="nama">
                  <input class="form-control" type="email" placeholder="Email" name="email">
				  <select class="form-control" name="subjek"> 
						<option value="">Subject</option>
						<option value="Pertanyaan">Pertanyaan</option>
						<option value="Kritik/Saran">Kritik / Saran</option>
					</select><br>
                  <textarea class="form-control" cols="30" rows="10" placeholder="Pesanmu" name="pesan"></textarea>
                   <input class="submit_btn" type="submit" value="Kirim" name="btn_kirim">  
                </form>
				<?php
					if(isset($_POST['btn_kirim'])){
    // Get the submitted form data
     include('admin-robotika19/koneksi.php'); 
	$email = $_POST['email'];
    $nama = $_POST['nama'];
    $subjek = $_POST['subjek'];
    $pesan = $_POST['pesan'];
	date_default_timezone_set('Asia/Jakarta');
	$date = date("d-m-Y");
    
    // Cek apakah ada data yang belum diisi
    if(!empty($nama) && !empty($email) && !empty($subjek) && !empty($pesan)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
			echo "<script>alert('Isi Email Dengan Benar');history.go(1);</script>";
        }else{
            // Pengaturan penerima email dan subjek email
           mysqli_query($db, "INSERT into tb_kontak VALUES ('','$date','$nama','$email','$subjek','$pesan')");
		   $a=1;
            
            // Send email
            if($a=1){
				echo "<script>alert('Pesan Anda sudah terkirim dengan sukses !');history.go(1);</script>";
            }else{
				echo "<script>alert('Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.');history.go(1);</script>";
            }
        }
    }else{
		echo "<script>alert('Harap mengisi semua field data');history.go(1);</script>";
    }
}
				?>
              </div>
            </div>
            <!-- BEGAIN CONTACT MAP -->
            <div class="col-lg-7 col-md-7 col-sm-7">
              <div class="contact_map">
              <!-- BEGAIN GOOGLE MAP -->
              <iframe id="map_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1397.169375352881!2d112.63356639693858!3d-7.916808429897348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd62a279a073467%3A0x69e87084f09ed6c3!2sInstitut%20Teknologi%20Nasional%20-%20Kampus%202!5e0!3m2!1sid!2sid!4v1566897286757!5m2!1sid!2sid" width="650" height="auto" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
            </div>           
          </div>
        </div>      
      </div>             
    </section>
    <!--=========== END CONTACT SECTION ================-->
	
    <!--=========== BEGAIN SUBSCRIBE SECTION ================-->
    <section id="subscribe">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- START SUBSCRIBE HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Subscribe Us</h2>
			  <?php
				 include('admin-robotika19/koneksi.php'); // Koneksi ke database
				$sql1 = mysqli_query($db,"SELECT * FROM tb_about where id = 4 ");
				$d = mysqli_fetch_assoc($sql1);
			?>
              <p> <?php echo $d['isi'] ?></p>
            </div>
            <!-- BEGAIN SUBSCRIVE FORM -->
            <form class="subscribe_form" method="post" action="" enctype="multipart/form-data">
              <div class="subscrive_group wow fadeInUp">
                <input class="form-control subscribe_mail" type="email" name="email"  placeholder="Enter your email address">
                <input class="subscr_btn" type="submit" value="Subscribe" name="btn_sub">
              </div>
            </form>
			<?php
					if(isset($_POST['btn_sub'])){
						 include('admin-robotika19/koneksi.php'); 
						$email = $_POST['email'];
						date_default_timezone_set('Asia/Jakarta');
						$date = date("d-m-Y");
						if(!empty($email)){
							 mysqli_query($db, "INSERT into tb_subscribe VALUES ('','$date','$email')");
							$b=1;
            
							if($b=1){
								echo "<script>alert('Terima Kasih SUdah Subscribe, Nantikan Berita Terbaru Dari Kami :D');history.go(1);</script>";
							}else{
								echo "<script>alert('Maaf perintah Anda gagal terkirim, silahkan ulangi lagi.');history.go(1);</script>";
							}
						}
						else{
							echo "<script>alert('Harap mengisi field Email');history.go(1);</script>";
						}
					}
			?>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END SUBSCRIBE SECTION ================-->

     <!--=========== BEGAIN FOOTER ================-->
     <footer id="footer">
       <div class="container">
         <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6">
             <div class="footer_left">
				<!--=========== Designed By WpFreeware Team ================-->
               <p>Copyright &copy; 2019 <a href=#>Lab. Robotika & Sistem Embedded ITN Malang</a>. All Rights Reserved</p>
			   <!--=========== Designed By WpFreeware Team ================-->
             </div>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6">
             <div class="footer_right">
               <ul class="social_nav">
			   <?php
				 include('admin-robotika19/koneksi.php'); // Koneksi ke database
				$sql1 = mysqli_query($db,"SELECT * FROM tb_sosmed where id = 1 ");
				$d = mysqli_fetch_assoc($sql1);
			?>
                 <li><a href="<?php echo $d['facebook'] ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="mailto:<?php echo $d['email'] ?>"><i class="fa fa-google-plus"></i></a></li>
                 <li><a  href="<?php echo $d['instagram'] ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
      </footer>
      <!--=========== END FOOTER ================-->

     <!-- Javascript Files
     ================================================== -->
  
     <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/jquery.ui.map.js"></script>
     <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script> 
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.superslides.min.js" type="text/javascript"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>    
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- for portfolio filter gallery -->
    <script src="js/modernizr.custom.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/elastic_grid.min.js"></script>
    <script src="js/portfolio_slider.js"></script>

    <!-- Custom js-->
    <script src="js/custom.js"></script>
	<script>
			if ( window.history.replaceState ) {
			window.history.replaceState( null, null, window.location.href );
	}
	</script>
  </body>
</html>