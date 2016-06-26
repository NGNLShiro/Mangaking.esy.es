<?php

	$url = __DIR__;
	//domain
	substr($url,0,-8)."<br/>";
	$documentroot = $_SERVER["CONTEXT_DOCUMENT_ROOT"];
	//root
	$request = $_SERVER["REDIRECT_URL"];
	//url + uri
	$docandreq = $documentroot.=substr($request,1);
	//domain + url + uri (link)
	$cuturi = substr($docandreq,(strlen($url)+1));
	//Cut uri (customer request)
/*
	$file = substr($url,0,-8).'app/www/'.$cuturi;
	$fileuri = "../app/www/".$cuturi;
	if($cuturi == NULL){
		include"../app/www/home-page.php";
	}
	else{
		if(file_exists($file)){
			include $fileuri;
		}
		else{
			include"../app/errors/404.html";
		}
	}
*/
	include"../core/route.php";
?>