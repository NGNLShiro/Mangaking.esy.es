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
							<p><b>Thể Loại : </b><?php echo $row['genre']; ?></p>
							<p><b>Bookmarks : </b><?php echo $row['ID']; ?></p>
							<p><b>Lượt xem : </b><?php echo $row['views']; ?></p>
							<?php
			}
        }
?>