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
							<a href="<?php echo $row['link']; ?>">Chap <?php echo $row['chapter-name']; ?></a><br />
							<?php
						}
			}
			
        }
    }
?>