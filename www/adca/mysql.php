<?php

$con = mysqli_connect("mysql", "wordpress", "995774");

if (!$con) {
	die("Could not connect: " . mysql_error());
}
echo "连接成功";
?>
