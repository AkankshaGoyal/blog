<?php
  
    include "logic.php"

?>
<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width",initial-scale = 1.0>
	<!--Boostrap CSS-->
	<link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Blog using PHP and MySQL</title>
</head>
<body>

	<div class = "container mt -5">
		<?php foreach($query as $q){?>
		<div  class = "bg-dark p-5 rounded-lg text-white text-center">
			<h1><?php echo $q['title'];?></h1>
			<div class = "d-flex mt-2 justify-content-center align-items-center">
				<a href = "edit.php?id = <?php echo $q['id'];?>" class = "btn btn-light btn-sm">Edit</a>
				<form method = "POST">
				<input type = "text" hidden name = "id" value ="<?php echo $q["id"];?>">
				<button class = "btn btn-danger btn-sm ml-2">Delete</button>
				</form> 

			</div>
		</div>
		<p class = "mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
	<?php }?>
</div>
		
	
<!--Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin = "anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin ="anonymous"></script>
</body>
</html> 