<?php 
include("class/users.php");

$em = $_SESSION["email"];

$profile = new users;
$profile->user_profile($em);

$profile->cat_show();
//print_r($profile->cat);




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


</style>

<body>

<div class="container">
  <h2>Welcome to Quiz World</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#account">Account</a></li>
    <li style="float:right;"><a href="signout.php">Logout</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
	  <br>
      <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select">Start quiz</button></center>
	  <br>
	  <div class="col-sm-4"></div> 
	  <div class="col-sm-4"> 
		<div id="select" class="tab-pane fade">
			
		 
			<form action="ques_show.php" method="POST">
				<select class="form-control"  name="cat">
				
				
					<option>--select Category--</option>
					<?php 
						
						foreach($profile->cat as $category)
						{	?>
						<option value="<?php echo $category['id'];?>"> <?php echo $category['cat_name'];?> </option>
							<?php  
								} 
							?>
				</select>
				<br>
				<center><input type="submit" value="submit" class="btn btn-primary" /></center>
			</form>
		   </div>
		</div>
	   <div class="col-sm-4"></div> 
    </div>
    <div id="account" class="tab-pane fade">
      <h3>Account Setting</h3>
	  <br>
		<table class="table table-hover">
			<thead>
			  <tr>
				<th>id</th>
				<th>Username</th>
				<th>Email</th>
				<th>image</th>
			  </tr>
			</thead>
			<tbody>
			
			<?php
				
				foreach($profile->data as $prof)
				{?>
					  <tr>
						<td><?php echo $prof['id']; ?></td>
						<td><?php echo $prof['name']; ?></td>
						<td><?php echo $prof['email']; ?></td>
						<td><img src="img/<?php echo $prof['img']  ?>" alt="" width="40px" height="40px" /></td>
						

					  </tr>
				<?php
				}
				?>
			</tbody>
		</table>
	
	
	  
	  
      
    </div>
    
    
  </div>
</div>

</body>

</html>