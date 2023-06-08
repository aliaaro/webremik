<?php
 include "confiq.php";
 $id=$_GET['ID'];
 $ambilData = mysqli_query($conn,"SELECT * FROM rapot WHERE ID='$id'");
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
                        <li><a href="logout.php"> Log Out</a></li>
                        
						
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<div class="container col-md-7">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Edit Rapot Siswa
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">
                    <div class="form-group">
                        <label for="judul"> nama </label>
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control col-md-9" placeholder="Masukkan Nama"></input>
                    </div>
                    <div class="form-group">
                        <label for="link"> Nilai MTK </label>
                        <input type="text" name="mtk" value="<?php echo $data['mtk'] ?>" class="form-control col-md-9" placeholder="Masukkan Nilai Matematika"></input>
                    </div>
                    <div class="form-group">
                        <label for="isi"> Nilai Bindo </label>
                        <input type="text" name="bindo" value="<?php echo $data['bindo'] ?>" class="form-control col-md-9" placeholder="Masukkan Nilai Bahasa Indonesia"></input>
                    </div>
                    <div class="form-group">
                        <label for="isi"> Nilai Bing </label>
                        <input type="text" name="bing" value="<?php echo $data['bing'] ?>" class="form-control col-md-9" placeholder="Masukkan Nilai Bahasa Inggris"></input>
                    </div>
                    <div class="form-group">
                        <label for="isi"> Nilai Ipa </label>
                        <input type="text" name="ipa" value="<?php echo $data['ipa'] ?>" class="form-control col-md-9" placeholder="Masukkan Nilai IPA"></input>
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

    
    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $mtk = $_POST['mtk'];
        $bindo = $_POST['bindo'];
        $bing = $_POST['bing'];
        $ipa = $_POST['ipa'];

        mysqli_query($conn,"UPDATE rapot 
        SET nama='$nama', mtk='$mtk', bindo='$bindo', bing='$bing', ipa='$ipa'
        WHERE ID='$id'
        ") OR die(mysqli_error($conn));

        echo "<div align='center'><h5> Silahkan Tunggu Data sedang diupdate... </h5></div>";
        echo "<meta http-equiv='refresh' content='1;url=rapot.php'>";

    }  if(isset($_POST['batal'])){
        echo "<meta http-equiv='refresh' content='1;url=rapot.php'>";
    }

?>

 