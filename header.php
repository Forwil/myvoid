
		<p id='title'>MyVoid!</p>
		<hr/>
		<table>
		<tr>
			<td><a class="t1 title" href="./index.php">Main Page</a></td>
			<td><a class="t1 title" href="./blog.php">Blog</a></td>
			<td><a class="t1 title" href="./about.php">About</a></td>
				<?php
					if (isset($_COOKIE["user"]))
						{
						echo "<td><a class='t1 title' href='/logout.php'>Exit</a></td>";
						}
					else
						{
						echo "<td><a class='t1 title' href='./login.php'>Login</a></td>";
						echo "<td><a class='t1 title' href='./register.php'>Register</a></td>";
						}
				?>
</tr>
</table>
<hr/>
