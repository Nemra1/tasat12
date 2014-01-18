<?php
error_reporting(0);
//input your database infos on following blank:
$db_host = "localhost";
$db_username = "root";
$db_password = "safipassword";
$db_name = "tasatdb";
$usertable = "tbl_user_list";
$username_field = "username";
$password_field = "password";

// Don't modify the code below unless you know what are you doing.
// Define the output result
$LOGIN_SUCCESS = 0;
$LOGIN_PASSWD_ERROR = 1;
$LOGIN_NICK_EXIST = 2;
$LOGIN_ERROR = 3;
$LOGIN_ERROR_NOUSERID = 4;
$LOGIN_SUCCESS_ADMIN = 5;
$LOGIN_NOT_ALLOW_GUEST = 6;
$LOGIN_USER_BANED = 7;

// Connects to your Database

$link = mysql_connect($db_host, $db_username, $db_password) or die (mysql_error());
mysql_select_db($db_name,$link);


if(!$link)
{
echo $LOGIN_ERROR;
exit;
}

$username = isset($_GET['username']) ? trim(htmlspecialchars($_GET['username'])) : '';
$username = substr(str_replace("\\'", "'", $username), 0, 64);
$username = str_replace("'", "\\'", $username);
$password = isset($_GET['password']) ? $_GET['password'] : '';
$username = mysql_escape_string($username);

$sql = "SELECT * FROM tbl_user_list WHERE username = '" .$_GET['username']."' ";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);


if ($row['username'] != '')
    {
  //You may need to synchronize following password encryption method with your own database user system.
      if (($row['password'] == $password) || ($row['password'] == md5($password)))
            {		
  //You may need to synchronize following userlevel of administrator with your own database user system.			
                if ($row['usertype'] == "admin")
                {
                  echo $LOGIN_SUCCESS_ADMIN;
                    exit;
                }
  //You may need to synchronize following userlevel of banned user with your own database user system.			
                else if($row['block'] == "1")
                {
                	echo $LOGIN_USER_BANED;
                    exit;
                }
				else
				{
				    echo $LOGIN_SUCCESS;
                    exit;
				}
            }
			echo $LOGIN_PASSWD_ERROR;
			exit;
     }
else
    {
            echo $LOGIN_ERROR_NOUSERID;
            exit;
    }


?>
