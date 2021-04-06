<?php
	$con = mysql_connect("47.113.205.237:3306","root","820197450zhao");
	$select_db = mysql_select_db('xbwmysql');
	if (!$select_db) {
	    die("could not connect to the db:\n" .  mysql_error());
	}
	//查询代码
	$sql = "select * from playgames where page=1";
	$res = mysql_query($sql);
	if (!$res) {
	    echo("could get the res:\n" . mysql_error());
	}
	while ($row = mysql_fetch_assoc($res)) {
	    echo($row);
	}
	//关闭MySQL数据库连接
	mysql_close($con);
?>

