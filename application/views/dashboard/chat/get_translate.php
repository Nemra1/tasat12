<?php
$q = rawurlencode($_GET['q']);
$source = rawurlencode($_GET['source']);
$target = rawurlencode($_GET['target']);
$tranurl = "#translateURL#: translate.php?source=". $source ."&target=". $target ."&q=".$q;
$tranurl="#translateURL#: translate.php";
$content = file_get_contents($tranurl); 
if($content == 'Not Found')
{
	echo 'Quota Exceeded.';exit;
}

echo $content;
?>