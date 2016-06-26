<?php
	$servername = "localhost" ;
	$username = "root" ;
	$password = "" ;
	$dbname = "mangaking" ;
	
	$connection = mysqli_connect ($servername, $username, $password, $dbname );
	if($connection -> connect_error) {
		die ("Connection failed : ". $connection -> connect_error);
	}
	
?>