<?php

    include_once'connection.php';

    $db=mysqli_connect($servername,$username,$password,$dbname);
	
	if ($db->connect_error) 
	{
		die("Connection failed: ".$db->connect_error);
	}
	else 
	{
		echo '"connection ok"';
	}


	if(isset($_POST['submit']))
		{

				$title= $_POST['title'];
				$description = $_POST['discription'];
				$author_name = $_POST['author_name'];

				$query = "INSERT INTO post (title, discription, author_name) VALUES ('$title','$description','$author_name')";

				mysqli_query($db,$query);
				header('location: post.php'); //redirect to index page after inserting
		}
			 
		

		$results = mysqli_query($db,"SELECT * FROM post");

?>