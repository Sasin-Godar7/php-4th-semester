<html>
<head>
<title> this is signup form </title> 
</head>
<body>
<form method="post" action="new_usersignup.php" enctype="multipart/form-data">
<label for="user">user name : </label>
<input type="text" id="user" name="username" placeholder="enter username here" />
<br><br>
<label for="pass">password : </label>
<input type="password" id="pass" name="password" placeholder="enter password here" />
<br><br>
<label for="cpass">confirm_password : </label>
<input type="password" id="cpass" name="cpassword" placeholder="enter password again" />
<br><br>
<label>upload profile picture:</label>
<input type="file" name="myfile" />
<br><br>
<input type="submit" name="send" value="SignUp" />
<input type="reset" name="cancel" value="Cancel" />

</form>

</body>

</html>