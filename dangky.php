
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
</head>
<body>
	<form method = "POST" action="xuly.php">
		<table>
			<tr>
				<td>Tên đăng nhập:</td>
				<td><input type="text" name="mb_user"></td>
				<td><? echo (!empty($errors['mb_user']))? $errors['mb_user'] : '' ; ?></td>
			</tr>
			<tr>
				<td>Mật khẩu:</td>
				<td><input type="text" name="mb_pass"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="mb_email"></td>
			</tr>
				<td>Phone:</td>
				<td><input type="text" name="mb_phone"></td>
			</tr>
			<tr>
				<td>Level:</td>
				<td>
					<select name = "mb_level">
						<option value="0">Thành Viên</option>
                           				<option value="1">Admin</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="mb_submit">
			</tr> 
		</table>
</body>
</html>