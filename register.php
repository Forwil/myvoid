<html>
<?php
	include_once("head.html");
?>
	<body>
		<?php
			include_once("header.php");
		?>
		<form action="/regcheck.php" method="post">
		<table>
			<tr>
				<td>User name:</td>
				<td><input id="un" type="text" maxlength="25" name="username" tabindex="1"></td>
				<td rowspan="4"> <input  tabindex="5" align="center" type="submit" value="Submit" style="height:50px;" onclick="return regcheck()"/></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input id="pw1" type="password" maxlength="25" name="password1" tabindex="2"/></td>
			</tr>
			<tr>
				<td>Comfirm Password:</td>
				<td><input id="pw2"type="password" maxlength="25" name="password2" tabindex="3"/></td>
			</tr>
			<tr>
				<td>E-mail:</td>
				<td><input type="text" maxlength="25" name="email" tabindex="4"></td>
			</tr>
		</table>
		</form>
			<?php
			include_once("footer.php");
			?>