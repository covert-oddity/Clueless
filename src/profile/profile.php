<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>Create Profile</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<?php
	if($_POST["email"]!="" && $_POST["passkey"]!="") {
		mysql_connect("localhost","g.a.m.e.r.","24x7threesome");
		set_cookie("user","a@b.com",time()+15);
		echo "Nice E-mail : ".$_SESSION['user'];
	} else {
		echo "Dude Get an e-mail";
	}
?>
</body>
</html>