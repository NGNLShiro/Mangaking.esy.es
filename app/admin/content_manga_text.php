<?php
        $sql = "SELECT * FROM `$dbname`.`$tbname` WHERE ID = '$a'";
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
										$limit = strlen($row['genre']);
										for($beginnum = 0; $beginnum <= $limit + 1;){
											$genrecode = substr($row['genre'],$beginnum,2);//Cắt chuỗi từ vị trí $i với n ký tự
											$sql1 = "SELECT * FROM `$dbname`.`genre` WHERE `code` = '$genrecode'";
											$result1 = $connection -> query($sql1);
											if($result1 -> num_rows > 0){
												while($row1 = $result1 -> fetch_assoc()){
													if($beginnum == ($limit - 2)){
														?>
														<a href = "<?php echo $row1['link']; ?>"><?php echo $row1['name']; ?></a>.
														<?php
													}
													else{
														?>
														<a href = "<?php echo $row1['link']; ?>"><?php echo $row1['name']; ?></a>,
														<?php
													}
												}
											}
											$beginnum = $beginnum + 4;
										}
								?>
                            </p>
							<p><b>Bookmarks : </b><?php echo $row['ID']; ?></p>
							<p><b>Lượt xem : </b><?php echo $row['views']; ?></p>
							<?php
			}
        }
?>