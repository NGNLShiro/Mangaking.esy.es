<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "manga_club";
	
	$conn = mysqli_connect ($servername, $username, $password, $dbname);
	if($conn -> connect_error) {
		die ('Connection failed : '. $conn -> connect_error);
	}
	
	
	
	
for ($i = 1; $i <2; $i++){
		$sql = "SELECT * FROM `manga_club`.`home_page` WHERE `ID` = '$i'";
		$result = $conn -> query ($sql);
		if ($result -> num_rows >0 ) {
			while ($row = $result -> fetch_assoc ()) {
				?>
				<div class = "part1-content-manga">
					<div class = "part1-content-manga-img">
						<a class = "summary" href = "#"><img src = "<?php echo $row["img"]; ?>" /></a>
						<div class = "part1-content-manga-summary">
							<a style = "font-size : 20px; font-weight : bolder;" href = "#"><?php echo $row["name"]; ?></a>
							<p>Tác giả : <a href = "#"><?php echo $row ["author"]; ?></a></p>
							<p>Nhóm Sub : <a href = "#"><?php echo $row ["subteam"]; ?></a></p>
							<p>Thể loại : <a style="text-decoration:underline;" href="#">Genre 1</a>, <a style="text-decoration:underline;" href="#">Genre 2</a>, <a style="text-decoration:underline;" href="#">Genre 3</a>, ...</p>
							<p>Bookmark : <?php echo $row["bookmark"]; ?></p>
							<p>Lượt xem : <?php echo $row["views"]; ?></p>
							<p>Nội dung : <?php echo $row["summary"]; ?></p>
						</div>
					</div>
				</div>
				<a href="#"><?php echo $row["name"]; ?></a>
				<?php
			}
		} 
	
	}
	
	
	
	
	
	
	
	
	
	
	
		

?>