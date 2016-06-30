<?php
	for($b = 1; $b < 6; $b++){
		$i = 0;
		$j = 1;
		$sql = "SELECT * FROM `$dbname`.`$tbname1` WHERE `ID` = '$b'";
		$result = $connection -> query("$sql");
		if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
				?>
						<div class="column1-title-content">
                            <div class="column1-title-content-img">
                                <a href="<?php echo DOMAIN.$row['link']; ?>"><img src="<?php echo $row['avatar-img']; ?>"></a>
                            </div>
                            <div class="column1-title-content-text">
                                <a class="manga-name" href="<?php echo DOMAIN.$row['link']; ?>"><?php echo $row['name']; ?></a>
                                <p class = "genre"><b>Thể Loại : </b>
                            	<?php
									while($j <= str_word_count($row['genre'])){
										if($j == 1){
											$genre = substr($row['genre'],$i,strpos($row['genre'],","));
											$i = strpos($row['genre'],",");
											$string = substr($row['genre'],$i + 1);
											$j = $j + 1;
											$sql1 = "SELECT * FROM `$dbname`.`genre` WHERE `name` LIKE '$genre'";
											$result1 = $connection -> query($sql1);
											if($result -> num_rows > 0){
												while($row1 = $result1 -> fetch_assoc()){
													?>
														<a href = "<?php echo DOMAIN.$row1['link']; ?>"><?php echo $row1['name']; ?></a>,
													<?php
												}
											}
										}
										else{
											if($j == str_word_count($row['genre'])){
												$genre = substr($string,0,strpos($string,","));
												$i = strpos($string,",");
												$string = substr($string,$i + 1);
												$j = $j + 1;
												$sql1 = "SELECT * FROM `$dbname`.`genre` WHERE `name` LIKE '$genre'";
												$result1 = $connection -> query($sql1);
												if($result1 -> num_rows > 0){
													while($row1 = $result1 -> fetch_assoc()){
														?>
															<a href = "<?php echo DOMAIN.$row1['link']; ?>"><?php echo $row1['name']; ?></a>
														<?php
													}
												}
											}
											else{
												$genre = substr($string,0,strpos($string,","));
												$i = strpos($string,",");
												$string = substr($string,$i + 1);
												$j = $j + 1;
												$sql1 = "SELECT * FROM `$dbname`.`genre` WHERE `name` LIKE '$genre'";
												$result1 = $connection -> query($sql1);
												if($result1 -> num_rows > 0){
													while($row1 = $result1 -> fetch_assoc()){
														?>
															<a href = "<?php echo DOMAIN.$row1['link']; ?>"><?php echo $row1['name']; ?></a>,
														<?php
													}
												}
											}
										}
									}
								?>
								</p>
                                <p class="manga-chapter"><b>Chap mới nhất : </b><?php echo $row['latest-chap']; ?></p>
                            </div>
                        </div>
				<?php
			}
		}
	}

?>