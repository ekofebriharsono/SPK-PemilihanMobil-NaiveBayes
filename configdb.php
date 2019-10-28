<?php
	@session_start();
	$_SESSION['judul'] = 'SPK Mobil';
	$_SESSION['welcome'] = 'APLIKASI PENDUKUNG KEPUTUSAN PEMILIHAN MOBIL';
	$_SESSION['by'] = 'maseko';
	$mysqli = new mysqli('localhost','id2221762_maseko','hacked200613','id2221762_project');
	if($mysqli->connect_errno){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}

	$conn = mysqli_connect("localhost", "id2221762_maseko", "hacked200613", "id2221762_project");
	
?>
