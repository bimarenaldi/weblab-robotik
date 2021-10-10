<?php
$id = $_GET['id'];

 include('admin-robotika19/koneksi.php');
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "SELECT * FROM tb_artikel WHERE id = $id"; 

if (mysqli_query($db, $sql)) {
	$sql1 = mysqli_query($db,"SELECT * FROM tb_artikel WHERE id = $id");
		while ($d = mysqli_fetch_array($sql1)) {
?>
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

   
    <!-- END SCROLL TOP BUTTON --> <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"> 
          <div class="container">
          <div class="navbar-header">
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- TEXT BASED LOGO -->
            <a class="navbar-brand" href="#">LAB. <span>ROBOTIKA ITN</span></a>
            
            <!-- IMG BASED LOGO  -->
            <!--  <a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo"></a> --> 
            
                   
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul id="top-menu" class="nav navbar-nav navbar-right main_nav">
              <li class="active"><a href="#">Artikel</a></li>
              <li><a href="index.php">Halaman Utama</a></li>                       
            </ul>           
          </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->

      <!-- BEGIN SLIDER AREA-->
<div class="row">
        <div class="portfolio_area">
          <!-- BEGAIN PORTFOLIO HEADER -->
          <div class="row">
            <div class="col-lg-12 col-md-12">
             <div class="container">
                <div class="heading">
				<br><br><br><br>
                </div>
              </div>
            </div>
          </div>

      <!-- END SLIDER AREA -->
    </header>
    <!--=========== End HEADER SECTION ================--> 

 	<!--=========== BEGAIN ABOUT SECTION ================-->
	
    <section id="pricing">
      <div class="container"> 
        <div class="row">
			<div class="col-lg-12 col-md-12">
            <div class="about_area">
              <!-- START ABOUT HEADING -->
              <div class="heading">
                <h2 class="wow fadeInLeftBig"><?php echo $d['judul'] ?></h2>
				 <div class="post_commentbox"><h4>
                      <i class="fa fa-user"></i><?php echo $d['penulis'] ?>&ensp;
                      <span><i class="fa fa-calendar"></i><?php echo $d['tgl'] ?></span>&ensp;
                      <i class="fa fa-tags"></i><?php echo $d['tag'] ?>
                   </h4> </div><br>
				<center><img src="Admin-robotika19/gambar/<?php echo $d['gambar'];?>" style="height:300px;"></center>
                <p align="justify"><?php echo $d['isi_artikel'] ?></p>
              </div>

		<?php
			}
		?>
              <!-- START ABOUT CONTENT -->
              <div class="about_content">

              </div>
            </div>			     
          </div>       
        </div>
      </div>
    </section>
    <!--=========== END ABOUT SECTION ================-->

	
    <!--=========== BEGAIN TEAM SECTION ================-->

		
	

    <!--=========== BEGAIN BLOG SECTION ================-->
    <section id="blog">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <!-- START BLOG HEADING -->
            <div class="heading">
              <h2 class="wow fadeInLeftBig">Artikel Lain</h2>
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <!-- BEGAIN BLOG CONTENT -->
            <div class="blog_content">

              <!-- BEGAIN BLOG SLIDER -->
              <div class="blog_slider">
			  <?php
				$sql = "SELECT * FROM tb_artikel ORDER BY RAND() LIMIT 3";
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
                    <a href="#" class="read_more">Read More <i class="fa fa-angle-double-right">  </i></a>                   
                  </div>
                </div>
			<?php
				}}
				mysqli_close($db);
			?>
                  </div>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END BLOG SECTION ================-->

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
<?php
} else {
	 header('Location: 404.html');
   
}
?>