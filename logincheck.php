<?php ob_start(); ?>

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
			$sql="select password from user where name='".$_POST["username"]."';";
			$result = mysql_query($sql,$con);
			$row = mysql_fetch_array($result);
			if ((!$row) || ($row["password"]!=$_POST["password"]))
				{
				echo "Login fault! Pleace check the username and password!<br/>";
				echo "<script>setTimeout(\"window.self.location='/login.php'\",3000);</script>";
				}
			else
				{
				setcookie("user",$_POST["username"], time()+3600);
				$sql="update user set latestlogin='".date('Y-m-d H:i:s')."' where name='".$_POST["username"]."';";
				//echo $sql;
				mysql_query($sql,$con);
				echo "<script>setTimeout(\"window.self.location='/index.php'\",3000);</script>";
				echo "Success!";
				}
			ob_end_flush();
		?>
</html>