<?php
 include "confiq.php";
 $id = $_GET['ID'];
 $ambilData = mysqli_query($conn,"SELECT * FROM siswa WHERE ID='$id'");
 $data = mysqli_fetch_array($ambilData);


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
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="home.php"> Home </a></li>
                        <li><a href="rapot.php"> Rapot </a></li> 
						<li><a href="siswa.php"> Siswa </a></li>
                        <li><a href="logout.php"> Log Out </i></a></li>
                        
						
                    </ul>
                </div>
            </div>
        </div>
        
	</header><!-- end header -->
	<div class="container col-md-7">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tambah Siswa
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">
                    <div class="form-group">
                        <label for="judul"> Nama </label>
                        <input type="text" name="nama" class="form-control col-md-9" placeholder="Masukkan Nama"></input>
                    </div>
                    <div class="form-group">
                        <label for="link"> NISN </label>
                        <input type="text" name="nisn" class="form-control col-md-9" placeholder="Masukkan NISN"></input>
                    </div>
                    <div class="form-group">
                        <label for="isi"> Tempat Tanggal Lahir </label>
                        <input type="text" name="ttl" class="form-control col-md-9" placeholder="Masukkan TTL"></input>
                    </div>
                    <button type="submit" class="btn btn-primary" name="simpan"> SAVE </button>
                    <button type="submit" class="btn btn-danger" name="batal"> BATAL </button>

                </form>

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
</body>
</html>

<?php

   // if(isset($_POST['simpan'])){

      //  $product_name = $_POST['product_name'];
      //  $product_price = $_POST['product_price'];
      //  $product_image = $_FILES['product_image']['name'];
      //  $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
     //   $product_image_folder = 'uploaded_img/'.$product_image;
 
      //  if(empty($product_name) || empty($product_price) || empty($product_image)){
      //      $message[] = 'Silakan isi semua';
      //  }else{
      //      $insert = "INSERT INTO produk (judul, deskripsi, foto) VALUES('$product_name', '$product_price', '$product_image')";
      //      $upload = mysqli_query($db,$insert);
      //      if($upload){
      //          move_uploaded_file($product_image_tmp_name, $product_image_folder);
      //          $message[] = 'Produk baru berhasil ditambahkan';
      //      }else{
     //           $message[] = 'tidak dapat menambahkan produk';
      //      }
     //   }
 
  // };


    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $nisn = $_POST['nisn'];
        $ttl = $_POST['ttl'];

        mysqli_query($conn,"INSERT INTO siswa VALUES('','$nama','$nisn', '$ttl')
        ") OR die(mysqli_error($conn));

        echo "<div align='center'><h5> Silahkan Tunggu Data sedang Ditambahkan... </h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=siswa.php'>";

    }  if(isset($_POST['batal'])){
        echo "<meta http-equiv='refresh' content='1;url=siswa.php'>";
    }

?>

 