<html>
<head>
<style>
table{
	color:white;
	border-radius:20px;
}
#button{
	background-color:green;
	color:white;
	height:32px;
	width:85px;
	border-radius:25px;
}
body{
	background:linear-gradient(pink,blue);
}

</style>
</head>
<body>

<form action="pdf.php" method="POST">
<table  border="0" bgcolor="orange" align="center" cellpadding="20">

<tr>
<td>Roll No.</td>
<td><input type="text" placeholder="rollno" name="rollno"></td>
</tr>

<tr>
<td>First Name</td>
<td><input type="text" placeholder="firstname" name="firstname"></td>
</tr>

<tr>
<td>Last Name</td>
<td><input type="text" placeholder="lastname" name="lastname"></td>
</tr>

<tr>
<td>Email Address</td>
<td><input type="text" placeholder="emails" name="email"></td>
</tr>


<tr>
<td colspan="2" align="center"><input type="submit" id="button" name="submit"></td>
</tr>
</table>
</form>
</body>
</html>