<?php
	include_once("sqlsetting.php");
	$con = mysql_connect(HOST,USER,PASSWORD);
		if (!$con)
				  {
				  die('Could not connect: ' . mysql_error());
				  }
	mysql_select_db(TABLE, $con);
	$sql="Delete from message where serial=".$_GET['Del'].";";
	mysql_query($sql,$con);
	mysql_close($con);
	echo '<script>window.self.location="index.php";</script>';
?>