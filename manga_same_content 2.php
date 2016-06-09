<?php
	$k = 0;
    for($i=1; $i<5; $i++)
    {
        $sql = "SELECT * FROM `u684134739_ace`.`manga_name` WHERE ID = '$i'";
        $result = $connection -> query($sql);
        if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
				if($row['ID'] != $a && $k < 3)
				{
					?>
					<div class="manga-same-content">
						<a href="<?php echo $row['Link']; ?>"><img src="<?php echo $row['Avatar_img']; ?>" /></a>
						<div class="manga-same-content-text">
							<p style="font-size:25px; font-style:italic;"><?php echo $row['Name']; ?></p>
							<p>Tác giả : <?php echo $row['Artist']; ?></p>
							<p>Nhóm Sub : <?php echo $row['Subteam']; ?></p>
							<p>Thể loại : <?php echo $row['Genre']; ?></p>
						</div>
					</div>
					<?php
					$k++;
				}
			}
        }
    }
?>