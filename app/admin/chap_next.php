<?php
		$c = $b + 1;
		$sql = "SELECT * FROM `$dbname`.`$tbnamechapter` WHERE `ID` = '$c'";
		$result = $connection -> query ($sql);
		if($result -> num_rows > 0)
		{
			while ($row = $result -> fetch_assoc ())
			{
				if($row['ID_manga_name'] == $a){
					?>
					<li><a href="<?php echo $row["link"]; ?>">Chap Trước</a></li>
					<?php
				}
			}
		}
	
?>