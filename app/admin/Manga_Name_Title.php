<?php
	
    for($i=1; $i<25; $i++)
    {
        $sql = "SELECT * FROM `$dbname`.`$tbname` WHERE ID = '$i'";
        $result = $connection -> query($sql);
        if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
						if($row['ID'] == $a)
						{
							echo $row["name"];
						}
			}
        }
    }
?>