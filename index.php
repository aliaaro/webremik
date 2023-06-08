<?php
     ob_start();
     session_start();
     include "confiq.php";

    // Database Berita

     $query1 = mysqli_query($conn,"SELECT * FROM berita WHERE id = '1'");
     $row_query1 = mysqli_fetch_array($query1);

     $query2 = mysqli_query($conn,"SELECT * FROM berita WHERE id = '2'");
     $row_query2 = mysqli_fetch_array($query2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Remik Akademik</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <h4>Remik Akademik</h4>
                    </a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li> 
						<li><a href="loginpage.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<!-- end header -->
	<section id="featured">
	 
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slides/study.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Study Tour Ke Kampus Unesa</h3> 
					<p>Siswa Sekolah Kejuruan Remik sedang berada di Kampus Unesa Ketintang dalam kegiatan study tour.</p>  
                </div>
              </li>
              <li>
                <img src="img/slides/siswabaru.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Selamat Datang Siswa Baru</h3> 
					<p>Foto bersama para siswa baru Sekolah Kejuruan Remik di Auditorium.</p> 
                </div>
              </li>
              <li>
                <img src="img/slides/kelas.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Hari Pertama di Kelas</h3> 
					<p>Suasana di kelas siswa baru terlihat semangat meskipun waktu siang hari.</p>  
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider -->
 
	</section>
	<section class="callaction">
	<div class="container">
		<div class="row">
		<div class="col-md-4">
		<img src="<?php  echo $row_query1['link'] ?>" alt="" width="100%"/>
		</div>
			<div class="col-md-8">
				<div><h1><?php  echo $row_query1['judul'] ?></h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span>
                <p><?php echo $row_query1['isi']?></p>
				<a href="https://www.ruangguru.com/blog/9-alasan-jadi-guru-itu-keren#:~:text=Menjadi%20guru%2C%20kamu%20bisa%20menyalurkan,apa%20yang%20ada%20di%20dalamnya." class="card-link">Baca Selengkapnya</a>
				</div>
			</div>
		</div>
        <div class="col-md-4">
		<img src="<?php echo $row_query2['link'] ?>" alt="" width="100%"/>
		</div>
			<div class="col-md-8">
				<div><h1><?php echo $row_query2['judul'] ?></h1><span class="clear spacer_responsive_hide_mobile " style="height:13px;display:block;"></span>
                <p><?php echo $row_query2['isi']?></p>
				<a href="https://www.kabarpendidikan.id/2021/10/belajar-online-atau-belajar-offline.html#:~:text=Belajar%20online%20ialah%20kegiatan%20belajar,secara%20tatap%20muka%20di%20kelas." class="card-link">Baca Selengkapnya</a>
				</div>
			</div>
		</div>
		
	</div>
	</section>
	<section id="content">
	
	</section>
	<div class="testimonial-area">
    <div class="testimonial-solid">
        <div class="container"> 
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class="">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class="active">
                        <a href="#"></a>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="3" class="">
                        <a href="#"></a>
                    </li>
                </ol>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/owl-carousel/owl.carousel.js"></script>
</body>
</html>