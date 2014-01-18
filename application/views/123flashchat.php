<?php
error_reporting(0);
if(!$_SESSION)
session_start();

//print_r($user_details);

$username=$user_details['username'];
$password=$user_details['password'];

//var_dump($_SESSION);
//var_dump($_COOKIE);
//echo $username.'....'.$password;exit;

//input your database infos on following blank:
$db_host = "localhost";
$db_username = "root";
$db_password = "safipassword";
$db_name = "tasatdb";
$usertable = "tbl_user_list";
$username_field = "username";
$password_field = "password";

$link = mysql_connect($db_host, $db_username, $db_password) or die (mysql_error());
$db = mysql_select_db($db_name,$link);
//var_dump($_COOKIE);
//echo '</br>';
//var_dump($_SESSION);
//exit;
//var_dump($_COOKIE); -- it's used to get necessaray infos which can be used in your database to get user infos directly.
//var_dump($_SESSION); -- it's used to get necessaray infos which can be used in your database to get user infos directly.

//$sql = "select * from ". $usertable ." where ". $username_field ." = '".$username."'";
//$query = mysql_query($sql);
//$user_data = mysql_fetch_array($query);


//$user = "init_user=" . rawurlencode ( $user_data['username'] ) . "&init_password=".$user_data['Password'];
//$user = "init_user=".$_SESSION['username']
$user = "?init_user=".$username."&init_password=".$password;

$swfurl ="http://server.mangium.com:35555/123flashchat.swf";
$chaturl = $swfurl.$user;

?>
<!-- FOR 123FLASHCHAT CODE BEGIN --> 
<script language="javascript" src="http://server.mangium.com:35555/123flashchat.js"></script> 
<script language="javascript"> 
openSWF("<?php echo $chaturl; ?>", "779", "580" ); 
</script> 
<!-- FOR 123FLASHCHAT CODE END -->
