<?php
	include('configdb.php');
	$alternatif = $_POST['alternatif'];
	$k1 = $_POST['k1'];
	$k2 = $_POST['k2'];
	$k3 = $_POST['k3'];
//	$k4 = $_POST['k4'];
//	$k5 = $_POST['k5'];

	// $result = $mysqli->query("INSERT INTO 'alternatif'
	// 							VALUES ("2", '".$alternatif."', '".$k1."', '".$k2."', '".$k3."', '".$k4."', '".$k5."');");
	// if(!$result){
	// 	echo $mysqli->connect_errno." - ".$mysqli->connect_error;
	// 	exit();
	// }
	// else{
	// 	header('Location: alternatif.php');
	// }

$result =  mysqli_query($conn,"INSERT INTO alternatif VALUES (NULL, '$alternatif', '$k1', '$k2', '$k3')");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: alternatif.php');
	}
?>
