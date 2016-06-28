<?php
	
	for($i=1; $i<1000; $i++)
    {
        $sql = "SELECT * FROM `DB_NAME`.`$tbnamechapter` WHERE ID = '$i'";
        $result = $connection -> query($sql);
        if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
						if($row['ID_manga_name'] == $a)
						{
							?>
							<p><?php echo $row['views']; ?></p>
							<?php
						}
			}
			
        }
    }
?>