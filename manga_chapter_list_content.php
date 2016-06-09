<?php
	
    for($i=1; $i<1000; $i++)
    {
        $sql = "SELECT * FROM `u684134739_ace`.`chapter` WHERE ID = '$i'";
        $result = $connection -> query($sql);
        if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
						if($row['ID_manga_name'] == $a)
						{
							?>
							<tr>
								<td><a href="<?php echo $row['Link']; ?>"><?php echo $row['Chapter_Name']; ?></a></td>
								<td><?php echo $row['Update_Date']; ?></td>
								<td><?php echo $row['Views']; ?></td>
							</tr>
							<?php
						}
			}
			
        }
    }
?>