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
		<form method="GET">
			<input type = "text" hidden name = "id" value="<?php echo $q["id"];?>">
			<input type = "text"  name = "title" placeholder = "Blog Title" class = "form-control bg-dark text-white my-3 text-center" value ="<?php echo $q["title"];?>">

			<textarea  name = "content" class = "form-control bg-dark text-white my-3"><?php echo $q["content"];?></textarea>
			<button  name = "new_post"  class = "btn btn-dark">Update</button>
		</form>
		<?php }?>
	</div>
<!--Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>