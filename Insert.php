<html>
<?php
	include_once("head.html");
?>
	<body>
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
		if (!isset($_COOKIE["user"])) $user="Null";
		else $user=$_COOKIE["user"];
		$sql="insert into message values(NULL,'".$_POST["text"]."','".date('Y-m-d H:i:s')."','".$user."');";
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		mysql_close($con);
		echo '<script>window.self.location="/index.php";</script>';
		?>
	</body>
</html>
