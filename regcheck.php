<html>
<?php
	include_once("head.html");
?>
	<body>
		<?php
			include_once("header.php");
		?>
		<?php
		include_once("sqlsetting.php");
		$con = mysql_connect(HOST,USER,PASSWORD);
		if (!$con)
				  {
				  die('Could not connect: ' . mysql_error());
				  }
		mysql_select_db(TABLE, $con);
		mysql_query("set names utf8;",$con);
		ini_set('date.timezone','Asia/Shanghai');

		$sql="insert into user values('".$_POST["username"]."','".$_POST["password1"]."','".date('Y-m-d H:i:s')."',0,'".$_POST["email"]."');";
		echo $sql;
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		mysql_close($con);
		echo '<br/>Success! please Click "login" again!';
		echo '<br/>Jump back to "login" within 2 s.'
		?>
		<script>
		setTimeout("window.self.location='/login.php'",2000);
		</script>
	</body>	
</html>
