<!doctype html>
<html>
<head>
<title>Insert form value into database</title>
</head>
<link rel="stylesheet"href="style.css" type="text/css"></link>
<center><h1>Register here</h1><br></br>
<body>
<form action = "insert.php" method = "post">
<center><label>Name:</label> <input type = "text" name= "name"><br><br>
<center><label>Email:</label> <input type = "email" name= "email"><br><br>
<center><label>Password:</label> <input type = "password" name= "password" id = "myinput"><br><br>
<center><label>Address:</label><input type = "text" name = "address"><br><br>
<button type = "submit" name ="submit">Submit</button>
</form>
</body>
</html>