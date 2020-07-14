
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quizzare</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<style>
header.page-header {
    background: no-repeat left/cover url("images/quiz.logo.jpg");
    display: flex;
    height: 120px;
    min-width: 20px;
    align-items: center;
    color: #ffdd2f;
    text-shadow: #000 0 0 .2em;
}

header.page-header > h1 {
    font: bold calc(1em + 2 * (100vw - 120px) / 100) 'Dancing Script', cursive,
        fantasy;
    margin: 2%;
}

main {
    font: 1rem 'Fira Sans', sans-serif;
}

</style>


<body style="background-image:url("images/index image.jpg");">
	
	<header class="page-header">
		<h1>Welcome to Quizzare</h1>
	</header>
	<div class="container" style="border-style: double; padding: 10px;">
		<div class="row">
			<div class="col-sm-6">
				
				  <div class="panel panel-info">
					<div class="panel-heading"><h2>Login Form</h2></div>
						<div class="panel-body"> 
						<?php
							
							if(isset($_GET['run']) && $_GET['run']=="failed")
							{
								echo"<mark>Incorrect Email and Password</mark>";
							}
						
						?>	
						  <form action="sign_in.php" method="post">
							<div class="form-group">
							  <label for="email">Email:</label>
							  <input type="email" class="form-control" name="em" id="email" placeholder="Enter email">
							</div>
							<div class="form-group">
							  <label for="pwd">Password:</label>
							  <input type="password" class="form-control" name="pas" id="pwd" placeholder="Enter password">
							</div>
							
							<button type="submit" class="btn btn-default">Submit</button>
						  </form>
						</div>
			  </div>
			</div>
			<div class="col-sm-6">
				  <div class="panel panel-primary">
					<div class="panel-heading"><h2>Signup Form</h2></div>
						<div class="panel-body">
								<?php  
									if(isset($_GET['run']) && $_GET['run']=="success")
									{
										echo "Your registration is Successfully done";
									}	 
								?>
							  <form action="signup_sub.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
								  <label for="name">Name:</label>
								  <input type="text" class="form-control" name="n" id="name" placeholder="Enter your name">
								</div>
								<div class="form-group">
								  <label for="email">Email:</label>
								  <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
								</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
								</div>
								<div class="form-group">
								  <label for="pwd">Upload Image:</label>
								  <input type="file" class="form-control" id="file" name="img">
								</div>
								
								<button type="submit" class="btn btn-default">Submit</button>
							  </form>
						</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
