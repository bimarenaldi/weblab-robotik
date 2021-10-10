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
	  <link rel="stylesheet" href="css/paging.css">
   
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
              <li class="active"><a href="#">All aslab</a></li>
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
            
			  
			<?php
				 include('admin-robotika19/koneksi.php');			  
				$batas   = 6;
				$halaman = @$_GET['halaman'];
				if(empty($halaman)){
					 $posisi  = 0;
					 $halaman = 1;
				}
				else{ 
					$posisi  = ($halaman-1) * $batas; 
				}
				
				
				$sql = "SELECT * FROM tb_aslab ORDER BY s LIMIT $posisi,$batas";
				$result = mysqli_query($db, $sql);
				$no = $posisi+1;
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
				?>
				
                
                <!-- BEGAIN SINGLE TEAM SLIDE#7 -->                             
              
            </div>
          </div>
		  <?php
				$sql1 = "SELECT * FROM tb_aslab";
			$result1 = mysqli_query($db, $sql1);
			$jmldata = mysqli_num_rows($result1);
			$jmlhalaman = ceil($jmldata/$batas);
				
			?>
             <div class="pagination-wrapper">
				<div class="pagination">
					<?php
						for($i=1;$i<=$jmlhalaman;$i++)
						if ($i != $halaman){
							
							echo "<a class='page-numbers ' href=\"all_aslab.php?halaman=$i\">$i</a> ";
						}
						else{ 
							 echo "<a class='page-numbers current' >$i</a> "; 
						}
					?>
        </div>
      </div>
    </section>
    <!--=========== END TEAM SECTION ================-->

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
