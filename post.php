<?php 
	include_once'post_details.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>POST</title>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link href="post.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="signup__box">
        <div class="header">
                <h2>POST</h2>
        </div>
        <form  method="post" action="post_details.php">
            <div class="input-group">
                <p>Title</p>
                <input type="text" name="title" placeholder="Enter title">
            </div>  
            <div class="input-group">          
                    <p>Description</p>

                    <input type="text" name="discription" placeholder="Description">
            </div>
            <div class="input-group">
                <p>Author Name</p>
                <input type="text" name="author_name" placeholder="Author name">
            </div>

            <div class="input-group">
                <input  type="submit" name="submit" value="Submit">
            </div>

            
		</form>
    </div>
</body>
</html>