<?php
 require_once('confiq.php');
 $query = "select * from siswa";
 $result = mysqli_query($conn,$query);
 

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
                    <a class="navbar-brand" href="index.html"></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
						<li><a href="home.php"> Home </a></li>
						<li><a href="rapot.php"> Rapot </a></li> 
						<li><a href="siswa.php"> Siswa </a></li>
                        <li><a href="logout.php"> Log Out </a></li>
						
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-5 text-center"> Data Siswa </h2>
                    </div>
                    <div class="table-responsive">
					<a href="tambah_siswa.php" class="btn btn-primary">Tambah Data Siswa</a>
                        <table class="table table-bordered text-left">
                            <tr class="bg-dark text-white" align="center" >
                                <td> ID </td>
                                <td> Nama </td>
                                <td> NISN </td>
                                <td> Tempat dan Tanggal Lahir </td>
								<td> Aksi </td>

							
                            </tr>

                            <tr class="table">
							<tbody align="center">
                            <?php
                            

                                while($row = mysqli_fetch_assoc($result))
                                {
                            ?>

                                <td><?php echo $row['ID']; ?></td>
                                <td><?php echo $row['nama']  ?> </td>
                                <td><?php echo $row['nisn']; ?></td>
                                <td><?php echo $row['ttl']; ?></td>
                                <td><a href="editsiswa.php?ID=<?php echo $row['ID']; ?>" class="btn btn-primary">Edit </a>
								    <a href="hapus_siswa.php?ID=<?php echo $row['ID']; ?>" class="btn btn-danger"> Hapus</a></td>
                            </tr>
                            <?php
                                }
                            ?>
							</tbody>
                        </table>
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
</body>
</html>

<?php

if(isset($_POST['simpan'])){
	$nama = $_POST['nama'];
	$nisn = $_POST['nisn'];
	$ttl = $_POST['ttl'];

	mysqli_query($conn,"UPDATE Daftar Siswa
	SET nama='$nama', nisn='$nisn', ttl='$ttl'
	WHERE ID='$id'
	") OR die(mysqli_error($conn));

	echo "<div align='center'><h5> Silahkan Tunggu Data sedang diupdate... </h5></div>";
	echo "<meta http-equiv='refresh' content='1;url=http://localhost/remik/editrapot.php'>";

}  if(isset($_POST['batal'])){
	echo "<meta http-equiv='refresh' content='1;url=http://localhost/remik/siswa.php'>";
}


?>