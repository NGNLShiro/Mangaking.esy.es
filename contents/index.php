<?php

	$url = __DIR__;
	echo $url."<br/>";
	echo substr($url,0,-8)."<br/>";
	$documentroot = $_SERVER["CONTEXT_DOCUMENT_ROOT"];
	echo $documentroot."<br/>";
	$request = $_SERVER["REDIRECT_URL"];
	echo $request."<br/>";
	$docandreq = $documentroot.=substr($request,1);
	echo $docandreq."<br/>";
	$cuturi = substr($docandreq,(strlen($url)+1));
	echo $cuturi."<br/>";
	
	$homepage = substr($url,0,-8).'app/www/home-page.php';
	if($cuturi == NULL){
		include"E:/wamp/www/Manga Club Project/Mangaking.esy.es/app/www/home-page.php";
	}
	else{
		if(file_exists($cuturi)){
			echo "URI Exists";
		}
		else{
			echo "URI Not Exists";
		}
	}
?>