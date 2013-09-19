<?php
include_once("sqlsetting.php");
		$con = mysql_connect(HOST,USER,PASSWORD);
		ini_set('date.timezone','Asia/Shanghai');
		if (!$con)
				  {
				  die('Could not connect: ' . mysql_error());
				  }
		mysql_select_db(TABLE, $con);
		mysql_query("set names utf8;",$con);
		$sql="insert into post values(NULL,'".$_COOKIE["user"]."','".$_POST["title"]."','".$_POST["content"]."','".date('Y-m-d H:i:s')."');";
		echo $sql;
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		mysql_close($con);
		echo '<script>window.self.location="/blog.php";</script>';
?>