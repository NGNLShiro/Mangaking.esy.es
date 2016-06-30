<?php
	

        $sql = "SELECT * FROM `$dbname`.`$tbnamechapter` WHERE ID_manga_name = '$a'";
        $result = $connection -> query($sql);
        if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
							?>
							<a href="<?php echo DOMAIN.$row['link']; ?>">Chap <?php echo $row['chapter-name']; ?></a><br />
							<?php
			}
			
        }
?>