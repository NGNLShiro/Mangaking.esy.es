<?php
	
		$i = 0;
		$j = 1;
        $sql = "SELECT * FROM `DB_NAME`.`manga-name` WHERE ID = '$a'";
        $result = $connection -> query($sql);
        if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
							?>
							<a style="font-size:35px; color:#36F;" href="<?php echo $row['link']; ?>"><?php echo $row['name']; ?></a>
							<p><b>Tác Giả : </b><?php echo $row['artist']; ?></p>
							<p><b>Nhóm Sub : </b><?php echo $row['subteam']; ?></p>
							<p><b>Trạng Thái : </b><?php if($row['ongoing'] == 1){echo "On Going";} else{echo "Done";} ?></p>
							<p><b>Thể Loại : </b>
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
														<a href = "<?php echo $row1['link']; ?>"><?php echo $row1['name']; ?></a>,
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
															<a href = "<?php echo $row1['link']; ?>"><?php echo $row1['name']; ?></a>
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
															<a href = "<?php echo $row1['link']; ?>"><?php echo $row1['name']; ?></a>,
														<?php
													}
												}
											}
										}
									}
								?>
                            </p>
							<p><b>Bookmarks : </b><?php echo $row['ID']; ?></p>
							<p><b>Lượt xem : </b><?php echo $row['views']; ?></p>
							<?php
			}
        }
?>


























			