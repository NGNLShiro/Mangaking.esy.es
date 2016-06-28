<?php
	
	$connection = mysqli_connect (DB_HOST, DB_NAME, DB_USER, DB_PASSWORD );
	if($connection -> connect_error) {
		die ("Connection failed : ". $connection -> connect_error);
	}
	
?>