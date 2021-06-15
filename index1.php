<?php

  
    include "logic.php"

?>
<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width = device-width",initial-scale = 1.0>
	<link rel = "stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet"href="style.css" type="text/css"></link>

	<title>Blog using PHP and MySQL</title>
</head>
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
<body>
<div class = "container mt -5">
        <?php if(isset($_REQUEST['info'])){?>
        	<?php if($_REQUEST['info'] == "added"){?>
        		 <div class="alert alert-success" role= "alert">
        	             Post has been added successfully
            </div>
        <?php }else if($_REQUEST['info'] == "updated"){?>
        	<div class = "alert alert-success " role = "alert">
               Post has been updated successfully
        </div>
    <?php }else if($_REQUEST['info'] == "deleted"){?>
      <div class = "alert alert-danger" role ="alert">
      	Post has been deleted successfully
      </div>
      <?php }?>
      <?php }?> 
       <div class ="text-center">
			<a href = "create.php" class = "btn-btn-outline-dark">+create a new post</a>
		</div>
	<div class = "row">
		<?php foreach($query as $q){?>
		
			<div class = "col-4 d-flex justify-content-center align-items-center">
			<div class = "card text-white bg-dark mt-5">
			<div class ="card-body" style ="width: 18rem;">
			<h5 class = "card-title"><?php echo $q['title'];?></h5>
			<p class = "card-text"><?php echo $q['content'];?></p>
			<a href ="view.php? id = <?php echo $q['id'];?>"class = "btn btn-light">Read more <span class = "text-danger">&rarr;</span></a>
		</div>
	</div>
</div>
<?php }?>
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