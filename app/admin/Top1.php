<?php
	
    for($i=1; $i<11; $i++)
    {
        $sql = "SELECT * FROM `$dbname`.`$bxh` WHERE ID = '$i'";
        $result = $connection -> query($sql);
        if($result -> num_rows > 0)
        {
			while ($row = $result -> fetch_assoc())
			{
				if($i == 1){
							?>
							<li>
								<div class="rank">
									<div class="rank-img">
										<img src="../contents/img/number<?php echo $i; ?>.png" style = "height: 63px; position: absolute; margin-top: -30px; margin-left: -23px;" />
									</div>
									<div class="rank-text" style = "margin-left: 55px;">
										<a href="<?php echo DOMAIN.$row['link']; ?>"><?php echo $row['name']; ?></a>
									</div>
								</div>
							</li>
							<?php
				}
				else{
							?>
							<li>
								<div class="rank">
									<div class="rank-img">
										<img src="../contents/img/number<?php echo $i; ?>.png" />
									</div>
									<div class="rank-text">
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