<?php
	include "confiq.php";
	$id=$_GET['ID'];
    $hapus= mysqli_query ($conn, "DELETE FROM rapot WHERE ID ='$id'");
	
	
	
	if($hapus){
		echo "<script> alert('Hapus Data Berhasil') </script>";
		header ("refresh:0;rapot.php");		
	}else{
        echo "<script>alert('Simpan Data Gagal') </script>";
        header ("refresh:0;rapot.php");		
	}
	
?>