<?php
	

        $sql = "SELECT * FROM `$dbname`.`$tbnamechaptercontent` WHERE `ID_manga_name_chapter` = '$b'";
        $result = $connection -> query($sql);
        if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
							?>
							<img src = "<?php echo $row['link']; ?>" />
							<?php
			}
        }
?>