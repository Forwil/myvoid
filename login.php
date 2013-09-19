<html>
<?php
	include_once("head.html");
?>
	<body>
		<?php
			include_once("header.php");
		?>
		<form action="/logincheck.php" method="post">
		<table>
			<tr>
				<td>User name:</td>
				<td><input tabindex="1" type="text" maxlength="25" name="username"></td>
				<td rowspan="2" align="center" ><input tabindex="3" type="submit" value="Login" style="height:50px;"/></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input tabindex="2" type="password" maxlength="25" name="password" /></td>
			</tr>
		</table>
		</form>
		<div>
			<p>Haven't a account? Click <a href="/register.php">this</a> to register one</p>
		</div>
			<?php
			include_once("footer.php");
			?>