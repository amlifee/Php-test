<?php
	echo 'Login page under development';
	/*$host="localhost";
	$username = "";
	$password = "";
	$db_name="test";
	$tbl_name = "members";

	mysql_connect("$host", "$username", "$password");
	mysql_select_db("$db_name");*/
?>

<html>
<title> Screwing with PHP </title>
</html>


<section class="loginform cf">
		<form name="login" action="index_submit" method="get" accept-charset="utf-8">
			<ul>
				<li><label for = "usermail">Email</label>
					<input type="email" name="username" placeholder="yourname@email.com" required>
				</li>
				<li>
					<label for="userpass">Password</label>
					<input type="password" name="userpass" placeholder="e.g. Pass123" required>
				</li>
				<li>
					<input type="submit" value="Login">
				</li>
			</ul>
		</form>
	</section>


