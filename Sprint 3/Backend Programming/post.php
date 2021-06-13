<?php 

//connect to database
include 'connection.php';

if($conn->connect_error){
	die('connection failed: '.$conn->connect_error);
}

//insert data to database
if(isset($_POST['post'])){

	$username = $_POST["username"];
	$password = $_POST["password"];
	$title = $_POST["title"];

	if(empty($username) || empty($password) || empty($title)){
		header('location:index.php?fields=empty'); 
	}
	else{

		$user = "SELECT * FROM dataform WHERE Username='$username'";
		$count = $conn->query($user);
	
		if (mysqli_num_rows($count)>0){
			header('location:index.php?username=taken'); 
		}
		else{
			
			$insert = "INSERT INTO dataform (Username, Password, Title) VALUES ('$username','$password','$title')";
			$result = $conn -> query($insert);
			
			if ($result == TRUE){
				header('location:index.php?insert=successful'); 
			}
		}
	}
}

if(isset($_POST['delete'])){
	$info = $_POST['delete'];

	$delete = "DELETE FROM dataform WHERE ID=$info";
	$result = $conn -> query($delete);

	if($result == TRUE){
		header('location:index.php?delete=successful'); 
	}
}

$conn->close();

?>