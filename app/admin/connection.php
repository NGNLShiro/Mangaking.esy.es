<?php
	
	$connection = mysqli_connect ($servername, $username, $password, $dbname );
	if($connection -> connect_error) {
		die ("Connection failed : ". $connection -> connect_error);
	}
	
?>