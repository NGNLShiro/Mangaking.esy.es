<?php
	
	for ($i = 12; $i <= 22; $i++){
		$sql = "SELECT * FROM `$dbname`.`genre` WHERE `ID` = '$i'";
		$result = $connection -> query ($sql);
		if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
				?>
				<li><a href = "<?php echo DOMAIN.$row['link']; ?>"><?php echo $row['name']; ?></a></li>
				<?php
			}
		}
	}
	
?>