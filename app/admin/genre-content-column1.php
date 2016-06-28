<?php
	
	for ($i = 1; $i <= 11; $i++){
		$sql = "SELECT * FROM `DB_NAME`.`genre` WHERE `ID` = '$i'";
		$result = $connection -> query ($sql);
		if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
				?>
				<li><a href = "<?php echo $row['link']; ?>"><?php echo $row['name']; ?></a></li>
				<?php
			}
		}
	}
	
?>