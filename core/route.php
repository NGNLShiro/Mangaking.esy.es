<?php

/* ------------------------ Route -------------------------- */
		/* --------------- Rewrite --------------- */
		//Get user link (Rewrote)
		$userlink = $_SERVER['HTTP_HOST']."/Mangaking.esy.es/".$cuturi;
		//Countable vatiation
		$count = 0;
		//Count "/" in user link and response for the request
		for($i = 1; $i <= strlen($userlink); $i++){
			if(substr($userlink,$i,1) == "/"){
				$count = $count + 1;
				if($count == 2){
					$position = $i;
					$comstr = substr($userlink,$position+1); // Cut link in position which has "/" in the first time
					// if link doesn't have any request show = 1 (show home page)
					if(strlen($comstr) == 0){
						$show = 1;
					}
					// if link requests just manga or manga and chapter
					else{
						for($j = 1; $j <= strlen($comstr); $j++){
							// Cut link in position which has "/" in the second time
							if(substr($comstr,$j,1) == "/"){ 
								$count = $count + 1;
								if($count == 3){
									$position = $j;
								}
							}
							// link just requests manga which like form "www.mangaking.esy.es/[manga-name]"
							else{
								$show = 2;
							}
						}
						$comstr = substr($comstr,$position);
						// Link requests manga and chapter
						if(strlen($comstr) > 1){
							// if link isn't like form "www.mangaking.esy.es/[manga-name]/[chap-][number]" they can't connect
							if(substr($comstr,1,5) == "chap-"){
								$show = 3;
							}
							else{
								$show = 5;
							}
						}
						// Link is like "www.mangaking.esy.es/[manga-name]/"
						if(strlen($comstr) == 1){
							$show = 4;
						}
					}
				}
			}
		}
		
		/* -------- Get Data from URI -------- */
		
		// if uri is like "[manga-name]/[chap-][number]" or "[manga-name]/"
		if(strpos($cuturi,"/") != ""){
			$comstr = substr($cuturi,strpos($cuturi,"/") + 1);
			//if uri is like "[manga-name]/"
			if(strlen($comstr) == 0){
				$manganame = substr(str_replace("-"," ",$cuturi),0,strpos($cuturi,"/"));// get requestion about "[manga-name]"
				$getdata = 1;
			}
			//if uri is like "[manga-name]/[chap-][number]"
			else{
				//get genre from uri if uri is like form "Mangaking.esy.es/The-Loai/[Genre]"
				if(substr($cuturi,0,strpos($cuturi,"/")) == "The-Loai"){
					$genre = str_replace("-"," ",substr($cuturi,strpos($cuturi,"/") + 1));// Get genre
					$getdata = 3;
				}
				//get '[manga-name]' and '[chapter]' from uri
				else{
					$manganame = substr(str_replace("-"," ",$cuturi),0,strpos($cuturi,"/"));// get requestion about "[manga-name]"
					$chapter = substr($cuturi,strpos($cuturi,"/") + 6);// get requestion about "[chapter-number]"
					$getdata = 2;
				}
			}
		}
		// if uri is just like "[manga-name]"
		else{
			$manganame = str_replace("-"," ",$cuturi);// get requestion about "[manga-name]"
			$getdata = 1;
		}
		
		include"../config/webconfig.php";
		include"../app/admin/connection.php";// connect to database
		
		/* ------- Show Data to Requestion -------- */
		
		// if user just request "[manga-name]"
		if($getdata == 1){
			$sql = "SELECT * FROM `DB_NAME`.`manga-name` WHERE `name` LIKE '$manganame'";
			$result = $connection -> query ($sql);
			if($result -> num_rows > 0){
				while ($row = $result -> fetch_assoc()){
					$_POST['a'] = $row['ID']; // get value from "[manga-name]" and send to variation in the "manga-name.php" file 
					switch($show){
						case 1: include"../app/www/home-page.php";
						break;
						case 2: include"../app/www/manga-name.php";
						break;
						case 3: include"../app/www/manga-chap.php";
						break;
						case 4: include"../app/www/manga-name1.php";
						break;
						default : include"../app/errors/404.html";
					}
				}
			}
			// if user link is not like form the system will show 404 error
			else{
				if($cuturi == ""){
					include"../app/www/home-page.php";
				}
				else{
					include"../app/errors/404.html";
				}
			}
		}
		// if user request "[manga-name]" and "[chapter-number]"
		else if($getdata == 2){
			$sql = "SELECT * FROM `DB_NAME`.`manga-name-a-chapter` WHERE `chapter-name` LIKE '$chapter' AND `manga-name` = '$manganame'";
			$result = $connection -> query ($sql);
			if($result -> num_rows > 0){
				while ($row = $result -> fetch_assoc()){
					$_POST['a'] = $row['ID_manga_name'];// get value from "[manga-name]" and send to variation "a" in the "manga-chap.php" file 
					$_POST['b'] = $row['ID'];// get value from "[chapter-number]" and send to variation "b" in the "manga-chap.php" file 
					switch($show){
						case 1: include"../app/www/home-page.php";
						break;
						case 2: include"../app/www/manga-name.php";
						break;
						case 3: include"../app/www/manga-chap.php";
						break;
						case 4: include"../app/www/manga-name1.php";
						break;
						default : include"../app/errors/404.html";
					}
				}
			}
			// if user link is not like form the system will show 404 error
			else{
				if($cuturi == ""){
					include"../app/www/home-page.php";
				}
				else{
					include"../app/errors/404.html";
				}
			}
		}
		// if user requests genre
		else{
			$sql = "SELECT * FROM `DB_NAME`.`genre` WHERE `name` LIKE '$genre'";
			$result = $connection -> query ($sql);
			if($result -> num_rows > 0){
				while ($row = $result -> fetch_assoc()){
					$_POST['a'] = $genre;// get value from "[genre/....]" and send to variation "a" in the "genre.php" file  
					include"../app/www/genre-page.php";
				}
			}
			// if user link is not like form the system will show 404 error
			else{
				if($cuturi == ""){
					include"../app/www/home-page.php";
				}
				else{
					include"../app/errors/404.html";
				}
			}
		}
		
		
		


?>











