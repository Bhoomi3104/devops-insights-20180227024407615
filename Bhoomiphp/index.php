<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<table>
		<tr>
			<td>
				<h1 id = "message"><?php echo "STUDENT FEEDBACK"; ?></h1>
			</td>
		</tr>
		
		<tr>
			<td> Name : </td>
			<td> <input type="txt" name="fname" maxlength="10"></td>
		</tr>
		
		<tr>
			<td> Mobile No : </td>
			<td> <input type="tel" name="mob" maxlength="10"> </td>
		</tr>
		
		<tr>
			<td> From : </td>
			<td> <input type="txt" name="frm"> </td>
		</tr>
		
		<tr>
			<td> Destination : </td>
			<td> <input type="txt" name="des"> </td>
		</tr>
		
		<tr>
			<td><input type="submit" value="submit" name="submit"></td>
		</tr>
	</table>
</body>
</html>
