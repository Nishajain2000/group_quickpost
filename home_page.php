<?php
//incluse database connection  value
include_once'connection.php';
include_once'signin_details.php';
$new_id=$_GET['id'];
//echo $new_id;
//connect to database
$db=mysqli_connect($servername,$username,$password,$dbname);

//check connection 
if($db->connect_error){
	die("connection failed:".$db);
}
/*else{
	echo "ok";
}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Quick Post</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="homestyle.css">
	
</head>
<body>
    <div class="container">
		<div class="nav">
			<div class=nav__links>
        		<a href="#">Home</a>
        		<a href="post.php?edit=<?php echo $new_id; ?>">Make a post</a>
        		<a href="edit_profile.php?edit=<?php echo $new_id; ?>">Edit Profile
        		<a href="logout.php">Logout</a>
    		</div><!--close navlinks-->
    		<div class="nav__img">
    			<img src="avtar.png" alt="avatar">
    		</div><!--close imag on nav-->
        </div><!--close nav-->
        <div class="main">
                <h2>Welcome kavita you have 6 publication</h2>
               <div class="row">
					<?php 
					  //fetching
						$query="SELECT title,discription FROM post";
                    
						//loop rows
						if($result=mysqli_query($db,$query))
						{
							while($row=mysqli_fetch_row($result)){
								echo('
									<div class="column"> 
										<img src="snow.jpeg" alt="Snow" style="width:100%">
										<div class="first">
											<h3>'.$row[0].'</h3>
										</div>
										<div class="cnt">
										'.$row[1].'
										</div>
										<div class="last">
											<a href="#">Edit</a>
											<a href="#">Delete</a>
										</div>
									</div>');
							}
							mysqli_free_result($result);
						}
						mysqli_close($db);
                    ?>

			    </div><!--close  row-->                
        </div><!--close main-->
    </div><!--close container-->
</body>
</html>