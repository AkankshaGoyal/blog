<?php
$email =  $_POST['email'];
$password =  $_POST['password'];
$con = mysqli_connect('localhost','root','','insert') or die(mysqli_error($con));
if($con)
{
	echo "conncection set successfully";
}
$sql = "SELECT * from  form  where email ='$email' && password = '$password'";
$result = mysqli_query($con,$sql);
$row = $result->fetch_assoc();
 
  	if($row["email"] == $email && $row["password"] == $password)
  	{
  	 header('Location: blog.html');
}
else {
  echo "User email or password incorrect ";
}
?>  

