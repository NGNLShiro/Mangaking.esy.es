<?php
	$servername = "localhost" ;
	$username = "root" ;
	$password = "" ;
	$databasename = "manga_club" ;
	
	$connection = mysqli_connect ($servername, $username, $password, $databasename );
	if($connection -> connect_error) {
		die ("Connection failed : ". $connection -> connect_error);
	}
	
?>