<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname =  "insert";

$conn = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST['submit']))
{
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])  && !empty($_POST['address'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password =  $_POST['password'];
		$address = $_POST['address'];
		/*$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@$%^&*()";*/
        /*$pass =   substr(str_shuffle($string),0,6);*/
		$query  = "insert INTO form(name,email,password,address) values('$name','$email','$password','$address')";
		$run = mysqli_query($conn,$query);
		if($run)
		{
			
            header('Location: blog.html');
			// echo " form submitted successfully";

		}
		else
		{
			echo "Form not submitted";
		}
	
	 
  }
    
    else 
    {
		echo "all fields are required";
    }
}
?>