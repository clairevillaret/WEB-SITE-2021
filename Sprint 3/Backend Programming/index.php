<?php 

	require_once("connection.php");
	$query = "select * from dataform";
	$result = mysqli_query($conn, $query); 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/home.css"/>

	<div class="front">
	<div class="header">
  		<img src="images/background_pic.jpg" alt="Processor image">
  		<div class="nav">
    		<ul>
      			<li><a href="index.php">Home</a></li>
      			<li><a href="#">About</a></li>
      			<li><a href="#">Lessons</a></li>
      			<li><a href="#">Contact</a></li>
    		</ul>
  		</div>
    </div>
	</div>
</head>

<body>
	<div class="general_text">
		<p>FORUM</p>
	</div>

	<div class="post">
		<div class="pull_left">
			<h1><a href="#" onclick="showDiscussion(1)">Lesson 1: Introduction</a></h1> 
		</div>
		<div class="pull_right">
			<a class="theme_button" id ="cancel_button_1" href="#" onclick="startDiscussion(1)">Start Discussion</a>
		</div>
	</div>

	<div id = "new_discussion_1" class="forum_part" style="display: none;" >
		<form id = "userForm" method="POST" action="post.php"> 
			<label for="title">Title</label>
			<input type="text" name="title" style="size: 30;">
			<input class="inputbox" type="text" name="username" placeholder="Enter Username">
			<input class="inputbox" type="text" name="password" placeholder="Enter Password">
			<label for="discussionBox">Content</label>
			<textarea class="discussionArea" name="discussionBox" rows="6" cols="50" style="margin-bottom: 7px;"></textarea>
			<button id="postbtn" class="submit_button" name="post">Post</button>
			<?php 
				ini_set('display_errors', 1);
				$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				if (strpos($fullUrl, "fields=empty")==true){
					echo "<h6>Please fill in all the fields.</h6>";
				}
				else if (strpos($fullUrl, "username=taken")==true){
					echo "<h6>Username is already taken.</h6>";
				}
			?>
		</form>
	</div>


	<div id="cat_discussions_1" class="forum_part" style="display:none;">
		<table class="forum_table">
			<thead>
				<th>Discussion</th>
				<th>Author</th>
				<th>Replies</th>
			</thead>
			<?php 
				while($row=mysqli_fetch_assoc($result)){
					$id = $row['ID'];
					$userName = $row['Username'];
					$title = $row['Title'];
					
			?>
				<tr>
					<td><?php echo $title ?></a></td>
					<td><?php echo $userName ?></td>
					<td>29</td>
					<td>
						<form action="post.php" method="post">
							<button style="border: none; margin-left: 50%;" class="theme_button" name="delete" value="<?php echo $id ?>">Delete</button>
						</form>
					</td>
				</tr>
			<?php
				}
			?>
		</table>

		<div class="forum_table">
			<a href="#" style="padding-left: 3px;"><b>View More...</b></a>
		</div>
	</div>

	

	<div class="post">
		<div class="pull_left">
			<h1><a href="#" onclick="showDiscussion(2)">Lesson 2</a></h1> 
		</div>
		<div class="pull_right"> 
			<a class="theme_button" id="post_button_2" href="#" onclick="popup(2)" style="display:none;">Post</a> 
			<a class="theme_button" id ="cancel_button_2" href="#" onclick="startDiscussion(2)">Start Discussion</a>
		</div>
	</div>


	<div id="cat_discussions_2" class="forum_part" style="display:none;">
		<table class="forum_table">
			<thead>
				<th>Discussion</th>
				<th>Author</th>
				<th>Replies</th>
			</thead>
				<tr>
				<td><a href="#">Discussion title</a></td>
				<td><a href="#">sakura</a></td>
				<td>29</td>
				</tr>
			<tr>
				<td><a href="#">Discussion title</a></td>
				<td><a href="#">sakura</a></td>
				<td>27</td>
			</tr>
			<tr>
				<td><a href="#">Discussion title</a></td>
				<td><a href="#">sakura</a></td>
				<td>27</td>
			</tr>
		</table>

		<div class="forum_table">
			<a href="#" style="padding-left: 3px;"><b>View More...</b></a>
		</div>
	</div>

	<div id = "new_discussion_2" class="forum_part" style="display: none;" >
		<form id = "userForm" method="POST" action="post.php"> 
			<label for="newDiscussionTitle">Title</label>
			<input type="text" name="newDiscussionTitle" style="size: 30;">
			<input type="text" name="username" placeholder="Enter Username">
			<input type="text" name="password" placeholder="Enter Password">
			<label for="discussionBox">Content</label>
			<textarea class="discussionArea" name="discussionBox" rows="6" cols="50" style="margin-bottom: 7px;"></textarea>
			<button id="postbtn" class="submit_button" name="post">Post</button>
		</form>
	</div>

	<div class="post">
		<div class="pull_left">
			<h1><a href="#" onclick="showDiscussion(3)">Lesson 3</a></h1> 
		</div>
		<div class="pull_right">
			<a class="theme_button" id="post_button_3" href="#" onclick="popup(3)" style="display:none;">Post</a> 
			<a class="theme_button" id ="cancel_button_3" href="#" onclick="startDiscussion(3)">Start Discussion</a>
		</div>
	</div>

	<div id="cat_discussions_3" class="forum_part" style="display:none;">
		<table class="forum_table">
			<thead>
				<th>Discussion</th>
				<th>Author</th>
				<th>Replies</th>
			</thead>
				<tr>
					<td><a href="#">Discussion title</a></td>
					<td><?php echo $userName ?></td>
					<td>29</td>
				</tr>
			<tr>
				<td><a href="#">Discussion title</a></td>
				<td><a href="#">sakura</a></td>
				<td>27</td>
			</tr>
			<tr>
				<td><a href="#">Discussion title</a></td>
				<td><a href="#">sakura</a></td>
				<td>27</td>
			</tr>
		</table>

		<div class="forum_table">
			<a href="#" style="padding-left: 3px;"><b>View More...</b></a>
		</div>
	</div>

	<div id = "new_discussion_3" class="forum_part" style="display: none;" >
		<form id = "userForm" method="POST" action="post.php"> 
			<label for="newDiscussionTitle">Title</label>
			<input type="text" name="newDiscussionTitle" style="size: 30;">
			<input type="text" name="username" placeholder="Enter Username">
			<input type="text" name="password" placeholder="Enter Password">
			<label for="discussionBox">Content</label>
			<textarea class="discussionArea" name="discussionBox" rows="6" cols="50" style="margin-bottom: 7px;"></textarea>
			<button id="postbtn" class="submit_button" name="post">Post</button>
		</form>
	</div>

	<script src = "js\index.js" type="text/javascript"></script>

</body>
</html>