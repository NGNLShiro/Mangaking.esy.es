<?php

		$sql = "SELECT * FROM `DB_NAME`.`$tbname` WHERE `ID` = '$a'";
		$result = $connection -> query ($sql);
		if($result -> num_rows > 0)
		{
			while ($row = $result -> fetch_assoc ())
			{
				echo $row['latest-chap'];
			}
		}
?>