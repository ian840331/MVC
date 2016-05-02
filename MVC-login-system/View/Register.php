<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>User Register Form</title>
	</head>
	<body>
		<table>
			<form action="?action=register" method="post">
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="text" name="password" value=""></td>
				</tr>
				<tr>
					<td>First Name:</td>
					<td><input type="text" name="first_name" value=""></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><input type="text" name="last_name" value=""></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="text" name="email" value=""></td>
				</tr>
				<tr>
					<td>Status</td>
					<td><input type="text" name="status" value=""></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit"></td>
				</tr>
			</form>
		</table>
	</body>
</html>