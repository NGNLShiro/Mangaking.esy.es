<?php
	$servername = "localhost" ;
	$username = "root" ;
	$password = "" ;
	$dbname = "mangaking" ;
	
	$connection = mysqli_connect ($servername, $username, $password, $dbname );
	if($connection -> connect_error) {
		die ("Connection failed : ". $connection -> connect_error);
	}
	
	$a = $_POST['partialState'];
	if(strlen($a) == 0){
		echo "";
		?>
			<script type = "text/javascript">
				var x = document.getElementById("results-div");
				x.style.display = "none";
			</script>
		<?php
	}
	else{
		?>
			<script type = "text/javascript">
				var x = document.getElementById("results-div");
				x.style.display = "block";
			</script>
		<?php
		$sql = "SELECT * FROM `$dbname`.`manga-name` WHERE `name` LIKE '%$a%'";
		$result = $connection -> query ($sql);
		if($result -> num_rows > 0)
		{
			while ($row = $result -> fetch_assoc ())
			{
				?>
					<li><a href="<?php echo DOMAIN.$row['link']; ?>"><?php echo $row['name']; ?></a></li>
				<?php
			}
		}
	}
	
?>