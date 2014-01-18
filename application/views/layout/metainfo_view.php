<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>..::TASAT::..</title>
<link rel="stylesheet" href="<?php echo WEB_PATH;?>css/main_page.css" type="text/css" />
<script src="<?php echo WEB_PATH;?>Scripts/swfobject_modified.js" type="text/javascript"></script>
<script language="javascript">  
	var maxwords = 10;  
	function check_length(obj, cnt, rem) //Alter this variable depending on how many words you want to limit the textarea to.  
	{  
		var ary = obj.value.split(" ");  
		var len = ary.length;  
		cnt.innerHTML = len;  
		rem.innerHTML = maxwords - len;  
		if (len > maxwords) {  
			alert("Message in '" + obj.name + "' limited to " + maxwords + " words.");  
			ary = ary.slice(0,maxwords-1);  
			obj.value = ary.join(" ");  
			cnt.innerHTML = maxwords;  
			rem.innerHTML = 0;  
			return false;  
		}  
		return true;  
	}  
</script>
</head>