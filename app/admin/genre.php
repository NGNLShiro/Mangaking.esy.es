<?php

	$sql = "SELECT * FROM `$dbname`.`manga-name-a` WHERE `ID` = '2'";
	$result = $connection -> query($sql);
	if($result -> num_rows > 0){
		while($row = $result -> fetch_assoc()){
			$limit = strlen($row['genre']);
			for($i = 0; $i <= $limit + 1;){
				$genrecode = substr($row['genre'],$i,2);//Cắt chuỗi từ vị trí $i với n ký tự
				$sql1 = "SELECT * FROM `$dbname`.`genre` WHERE `code` = '$genrecode'";
				$result1 = $connection -> query($sql1);
				if($result1 -> num_rows > 0){
					while($row1 = $result1 -> fetch_assoc()){
						?>
						<a href = "<?php echo $row1['link']; ?>"><?php echo $row1['name']; ?></a>,
						<?php
					}
				}
				$i = $i + 4;
			}
		}
	}
	
	
?>