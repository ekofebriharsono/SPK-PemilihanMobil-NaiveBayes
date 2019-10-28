<?php
	include('configdb.php');
	$kriteria = $_POST['kriteria'];
	$bobot = $_POST['bobot'];
	$kriteria_2 = $_POST['kriteria_2'];
	
	$result = $mysqli->query("UPDATE kriteria SET `kriteria` = '".$kriteria."', `bobot` = '".$bobot."', `kriteria_2` = '".$kriteria_2."' WHERE `id_kriteria` = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: kriteria.php');
	}
?>