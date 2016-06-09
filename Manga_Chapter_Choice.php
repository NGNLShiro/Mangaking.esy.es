<?php
	
    for($i=1; $i<25; $i++)
    {
        $sql = "SELECT * FROM `manga_club`.`chapter` WHERE ID = '$i'";
        $result = $connection -> query($sql);
        if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
						if($row['ID_manga_name'] == $a)
						{
							?>
							<li><a href="<?php echo $row["Link"]; ?>"><?php echo $row["Chapter_Name"]; ?></a></li>
							<?php
						}
			}
        }
    }
?>