<?php

		$sql = "SELECT * FROM `DB_NAME`.`$tbnamechapter` WHERE `ID` = '$b'";
		$result = $connection -> query ($sql);
		if($result -> num_rows > 0)
		{
			while ($row = $result -> fetch_assoc ())
			{
				echo $row['chapter-name'];
			}
		}
?>