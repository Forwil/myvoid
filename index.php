<html>
<?php
	include_once("head.html");
?>
	<body onload="update()">
		<?php
			include_once("header.php");
		?>
		<?php
		if (isset($_COOKIE["user"]))
			{
			echo "<div class='from'>Hi! <strong>".$_COOKIE["user"]."</strong>";

			include_once("sqlsetting.php");
			$con = mysql_connect(HOST,USER,PASSWORD);
			if (!$con)
					  {
					  die('Could not connect: ' . mysql_error());
					  }
			mysql_select_db(TABLE, $con);
			$sql="select latestlogin from user where name='".$_COOKIE["user"]."';";
			$result = mysql_query($sql,$con);
			$row = mysql_fetch_array($result);

			echo ",Your latest login at ".$row['latestlogin'].".</div>";
			}
		?>
		<div id ="date" class="time"></div>

<div class="panel">
		<form action="Insert.php"  method="post" onKeyDown="if(event.ctrlKey&&event.keyCode==13&&check()) this.submit()"> 
			<div id="textarea">
				<textarea Id="text" class="text" name="text" maxlength="250"/></textarea>
			</div>
			<div id="submit">
				<input type="submit"  value="Submit" class="botton1" onclick="return check()"/>
			</div>
		</form>	
</div>
 
<p class="flip">SAY SOMETHING?</p>
<br/>
			<table>
				<?php
				include_once("sqlsetting.php");
				$con = mysql_connect(HOST,USER,PASSWORD);
				if (!$con) die('Could not connect: ' . mysql_error());
				mysql_select_db(TABLE, $con);
				$sql="select * from message order by serial desc;";
				$result = mysql_query($sql,$con);
				$sql='SELECT COUNT(*) FROM message';
				$res=mysql_query($sql);
				$cnt=mysql_fetch_row($res);
				$len=$cnt[0];
				
				if(!isset($_GET['p']))$_GET['p']=1;	
							
				for ($i=1;$i<=$_GET['p']-1;$i++){
				for ($j=1;$j<=8;$j++) {$row = mysql_fetch_array($result);$len=$len-1; }}
				
				for ($j=1;$j<=8;$j++)
				{
						$row = mysql_fetch_array($result);
						if (!$row) break;
						$len=$len-1;
						echo "<div class='from'>".$row["from"]."";
						echo " Say:</div>";
						
						echo "<div class='content'>".$row['content']."</div>";

						if (isset($_COOKIE["user"]))
						if ($row['from']==$_COOKIE["user"])
						echo "<a class='t1 delete' href='./Delete.php?Del=".$row['serial']."'>Delete</a>";

						
						echo "<div class='time'>@".$row['date']."</div>";
						echo "<br/>";
				}
				echo "<table ><tr>";
				if ($_GET['p']>1) echo "<td><a class='t1' href=\"./index.php?p=".($_GET['p']-1)."\"><<</a></td>";
				if ($len>0) echo "<td><a class='t1' href=\"./index.php?p=".($_GET['p']+1)."\">>></a></td>";
				echo "</tr></table>";
				mysql_close($con);
				?>
			</table>

			<?php
			include_once("footer.php");
			?>
