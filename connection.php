<?php
	$servername = "localhost" ;
	$username = "u232194151_king" ;
	$password = "khoa1245" ;
	$dbname = "u232194151_king" ;
	
	$connection = mysqli_connect ($servername, $username, $password, $dbname );
	if($connection -> connect_error) {
		die ("Connection failed : ". $connection -> connect_error);
	}
	
?>