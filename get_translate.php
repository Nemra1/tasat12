<?php
$q = rawurlencode($_GET['q']);
$source = rawurlencode($_GET['source']);
$target = rawurlencode($_GET['target']);
$tranurl = "http://server.mangium.com/work/tasat19_11/translate.php?source=". $source ."&target=". $target ."&q=".$q;
$content = file_get_contents($tranurl); 
if($content == 'Not Found')
{
	echo 'Quota Exceeded.';exit;
}

echo $content;
?>
