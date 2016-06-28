<?php
	$a = $_POST['search-box'];
	$ID = array();
	$sql = "SELECT * FROM `DB_NAME`.`manga-name-a` WHERE `name` like '%ac%'";
	$result = $connection -> query("$sql");
	if($result -> num_rows > 0){
		for($i = 0; $i < 10; $i++){
			$row = $result -> fetch_assoc();
			$ID[$i] = $row['ID'];
		}
	}
	else{
		echo "Có 0 kết quả cho từ khóa ".$a;
	}
	
	for($i = 0; $i < 5; $i++){
		$sql = "SELECT * FROM `DB_NAME`.`manga-name-a` WHERE `ID` = '$ID[$i]'";
		$result = $connection -> query("$sql");
		if($result -> num_rows > 0){
			while($row = $result -> fetch_assoc()){
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