<?php
	$sql = "SELECT * FROM `manga_club`.`chapter` WHERE ID ='$b'";
	$result = $connection -> query ($sql);
	if($result -> num_rows > 0){
		while($row = $result -> fetch_assoc ()){
			echo $row['Chapter_Name'];
		}
	}

?>