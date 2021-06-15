<?php
  
    include "logic.php"

?>
<!DOCTYPE html>
<html lang = "en">
<header>
		<div class="logo">
		<h2 class="logo-text"><span>Emotional</span>wellness</h2>
	</div>
	<ul class ="nav">
		<li><a href ="#">Home</a>
    </li>
		<li><a href ="About.html">About</a></li>
       </li>
        <li><a href ="create.php">Create Blog</a></li>
        <li><a href ="index1.php">Read Blog</a></li>
        <li>
        	<a href ="#">
          <i class = "fa fa-user"  aria-hidden="true"></i>
          Akanksha Goyal
        <i class = "fa fa-caret-down" aria-hidden="true"></i>
         <i class = "fa-fa-chevron-down"></i>
        </a>
       <ul>
       	<li><a href ="index.php" class="logout">Logout</a></li>
       </ul>
   </li>
</ul>
</header>
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<!--Boostrap CSS-->
	<link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet"href="style.css" type="text/css"></link>
	<link rel="stylesheet"href="styleimage.css" type="text/css"></link>
	<title>Blog using PHP and MySQL</title>
</head>
<body>
	<h1>Write your own blog</h1>
	<div class = "container mt -5">
		<form method="GET">
			<input type = "text"  name = "title" placeholder = "Blog Title" class = "form-control bg-dark text-white my-3 text-center">
			<textarea  name = "content" class = "form-control bg-dark text-white my-3"></textarea>
			<button  name = "new_post"  class = "btn btn-dark">Add Post</button>
		</form>
	</div>

<div class="footer">
<div class = "footer-content">
          <div class="left">
	         	<h2 class = "logo-text"><span>Akanksha </span>Goyal</h1>
	         	<p>This is a blogging website where people can read beautiful content on different topics</p>
           
	         	<div class="contact">
              
	         		<span><i class ="fa fa-phone"></i> &nbsp;6377838947</span>
	         		<span><i class ="fa fa-envelope"></i> &nbsp;akankshagoyalju2000@gmail.com</span>
	            </div>
	              <div class ="socials">
                 
                 <a href="https://www.yourquote.in/akanksha-goyal-9v46/quotes">Do see my quotes</a>
               </div>
               <div class="footer-bottom">
  &copy; emotionalwellness.com | Designed  by Akanksha Goyal
 </div>
<!--Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>