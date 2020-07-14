<?php
 include("class/users.php");
 $ans = new users;
 
 $answer = $ans->answer($_POST);
 

?> 

<!DOCTYPE HTML>

<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title> Answer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	
	
	
</head>

<body>

	<div class="container">
	
	<?php
		$total_ques = $answer['right']+$answer['wrong']+$answer['no_answer'];
		$attempted_ques = $answer['right']+$answer['wrong'];
	
	?>
	<div class="col-sm-3"></div>
	<div class="col-sm-6">
	  <center><h1>Your Quiz Results </h1></center>
	  <p>Well Done</p>            
	  <table class="table table-hover">
		<thead>
		  <tr>
			<th>Total No. of Question</th>
			<th><?php echo $total_ques;?></th>
		  </tr>
		</thead>
		<br>
		<tbody>
		  
		  <tr>
			<td>Attempted Questions</td>
			<td><?php echo $attempted_ques;?></td>
		  </tr>
		  
		  <tr>
			<td>Right Answer</td>
			<td><?php echo $answer['right'];?></td>
		  </tr>
		  <tr>
			<td>Wrong answer</td>
			<td><?php echo $answer['wrong'];?></td>
			
		  </tr>
		  <tr>
			<td>Not Attempted</td>
			<td><?php echo $answer['no_answer'];?></td>
		  </tr>
		</tbody>
	  </table>
	  
	  <h2> You got 
	  <?php 
		$r = $answer['right']*100;
		$p = $r/$total_ques;
		
		echo $p."%";
	  
	  ?></h2>
	  
	 </div>
	<div class="col-sm-3"></div>
</div>

	
</body>
</html>
