<?php	
    {
        $sql = "SELECT * FROM `manga_club`.`manga_name` WHERE `Name` LIKE '$d%'";
        $result = $connection -> query($sql);
        if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
				?>
				<div class="part1-content-manga">
					<div class="part1-content-manga-img">
						<a class="summary" href="<?php echo $row['Link']; ?>"><img src="<?php echo $row['Avatar_img']; ?>" /></a>
						<div class="part1-content-manga-summary">
							<a style="font-size:20px; font-weight:bolder;" href="<?php echo $row['Link']; ?>"><?php echo $row['Name']; ?></a>
							<p>Tác giả : <a><?php echo $row['Artist']; ?></a></p>
							<p>Nhóm Sub : <a><?php echo $row['Subteam']; ?></a></p>
							<p>Thể loại : <?php echo $row['Genre']; ?></p>
							<p>Bookmarks : <?php echo $row['ID']; ?></p>
							<p>Lượt xem : <?php echo $row['Views']; ?></p>
							<p>Nội dung : <?php echo $row['Summary']; ?></p>
						</div>
					</div>
					<div class="part1-content-manga-name">
							<a href="<?php echo $row['Link']; ?>"><?php echo $row['Name']; ?></a>
							<p>Chapter : <a href="<?php echo $row['Link']; ?>"><?php echo $row['Latest_chap']; ?></a></p>
					</div>
				</div>
				<?php
			}
			
        }
    }
?>