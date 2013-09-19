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
				if (!$con) die('Could not connect: ' . mysql_error());
				mysql_select_db(TABLE, $con);
				$sql="select * from post order by serial desc;";
				$result = mysql_query($sql,$con);
				$sql='SELECT COUNT(*) FROM post';
				$res=mysql_query($sql);
				$cnt=mysql_fetch_row($res);
				$len=$cnt[0];
				for ($i=1;$i<=$len;$i++)
				{
					$row = mysql_fetch_array($result);
					if (!$row) break;
					echo "<div class='blogtitle'><a href='/blog.php?article=".$row['serial']."'>".$row['title']."</a></div>";
					echo "<br/>";
					echo "<div class='bloghead'>By <strong>".$row['author']."</strong> Post at ".$row['date']."</div>";

					echo "<div class='blogcontent'>".$row['content']."</div>";
				}
				if (isset($_COOKIE['user'])) echo "<p align=right><a class='t1' href='./write.php'>Write a New</a></p>";
		?>
			<?php
			include_once("footer.php");
			?>
