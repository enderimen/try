<?php 

	$localhost	=	"localhost";
	$username	=	"root";
	$password	=	"";
	$DBname	 	=	"tanitim";

	$connect = mysqli_connect($localhost, $username, $password, $DBname);

	if (!$connect) {
		echo "Bağlantı Sağlanamadı.";	
	}

 ?>