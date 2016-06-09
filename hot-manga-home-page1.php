<?php
	for($i = 1; $i < 6; $i++){
		$sql = "SELECT * FROM `$dbname`.`$tbname1` WHERE `ID` = '$i'";
		$result = $connection -> query("$sql");
		if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
				?>
						<div class="column1-title-content">
                            <div class="column1-title-content-img">
                                <a href="<?php echo $row['link']; ?>"><img src="<?php echo $row['avatar-img']; ?>"></a>
                            </div>
                            <div class="column1-title-content-text">
                                <a class="manga-name" href="<?php echo $row['link']; ?>"><?php echo $row['name']; ?></a>
                                <p class="genre"><b>Thể Loại : </b><?php echo $row['genre']; ?></p>
                                <p class="manga-chapter"><b>Chap mới nhất : </b><?php echo $row['latest-chap']; ?></p>
                            </div>
                        </div>
				<?php
			}
		}
	}

?>