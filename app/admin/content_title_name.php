<?php
	for($i=1; $i<25; $i++)
    {
        $sql = "SELECT * FROM `manga_club`.`manga_name` WHERE ID = '$i'";
        $result = $connection -> query($sql);
        if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
						if($row['ID'] == $a)
						{
							?>
							<a href = "<?php echo $row['Link']; ?>"><?php echo $row['Name']; ?></a>
							<?php
						}
			}
        }
    }
?>