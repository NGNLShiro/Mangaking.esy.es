<?php	
    for($i=1; $i<5; $i++)
    {
        $sql = "SELECT * FROM `manga_club`.`manga_name` WHERE ID = '$i'";
        $result = $connection -> query($sql);
        if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
				?>
				<div class="slider">
					<div class="slider-img">
						<a href="<?php echo $row['Link']; ?>"><img src="<?php echo $row['Avatar_img']; ?>" /></a>
					</div>
					<div class="slider-text">
						<a href="<?php echo $row['Link']; ?>"><?php echo $row['Name']; ?></a>
					</div>
				</div>
				<?php
			}
			
        }
    }
?>