<?php
	
	$m = 1;
	$n = 15;
	for ($i = 1; $i < 6 ; $i++ ){
		$rand = rand($m,$n);
		if($rand != $a){
			$sql = "SELECT * FROM `$dbname`.`$tbname` WHERE ID = '$rand'";
			$result = $connection -> query($sql);
			if($result -> num_rows > 0)
			{
				while ($row = $result -> fetch_assoc())
				{
					?>
						<li>
                        	<div class="same-manga">
                            	<div class="same-manga-img">
                                	<a href="<?php echo DOMAIN.$row['link']; ?>"><img src = "<?php echo $row['avatar-img']; ?>" /></a>
                                </div>
                                <div class="same-manga-text">
                                	<a href="<?php echo DOMAIN.$row['link']; ?>"><?php echo $row['name']; ?></a>
                                </div>
                            </div>
                        </li>
					<?php
				}
			}
			
		}
	}
?>