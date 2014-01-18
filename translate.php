<?php
$key = "AIzaSyDblR7008PyAGXtEi5L3CbH_5IPuwsx1Dc";
$q = isset($_GET['q'])?rawurlencode($_GET['q']):"";
$source = isset($_GET['source'])?rawurlencode($_GET['source']):"";
$target = isset($_GET['target'])?rawurlencode($_GET['target']):"";


$checkurl = "https://www.googleapis.com/language/translate/v2";
$data = "key=". $key ."&q=".$q."&source=". $source ."&target=". $target;
$checkurl=$checkurl."?".$data;

	$ref = "server.mangium.com"; 
	$c=curl_init($checkurl);
	curl_setopt($c, CURLOPT_REFERER,$ref);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER,FALSE);
	curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false); 
	//Start ob to prevent curl_exec from displaying
	ob_start();
	curl_exec($c);
	




	
?>
