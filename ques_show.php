<?php

include("class/users.php");
$ques = new users;

$cat = $_POST['cat'];

$ques->ques_show($cat); 

$_SESSION['cat'] = $cat;


?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>

<div class="container">
  <h2>Quiz in HTML</h2>
  <br>
  <div id="time" style="float:right; margin-right:50px;">Timout : </div>         
		
	<br>
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<form action="answer.php" method="POST"> 
			<?php
				$i = 1;
				foreach($ques->ques as $qst) { ?>
					<table class="table table-hover">
						<thead>
						  <tr>
							<th><?php echo $i;?>&emsp;<?php echo $qst['ques'];?></th>
						  </tr>
						</thead>
						<tbody>
						
							<?php if(isset($qst['answer1'])){?>
							  <tr class="info">
								<td>&nbsp; 1. &emsp;<input type="radio" value="0" name="<?php echo $qst['id'];?>"/>&nbsp;<?php echo $qst['answer1'];?></label></td>
							  </tr>
							<?php }?>
							<?php if(isset($qst['answer2'])){?>
							  <tr class="info">
								<td>&nbsp; 2. &emsp;<input type="radio" value="1" name="<?php echo $qst['id'];?>"/>&nbsp;<?php echo $qst['answer2'];?></label></td>
							  </tr>
							  <?php }?>
							  <?php if(isset($qst['answer3'])){?>
							  <tr class="info">
								<td>&nbsp; 3. &emsp;<input type="radio" value="2" name="<?php echo $qst['id'];?>"/>&nbsp;<?php echo $qst['answer3'];?></label></td>
							  </tr>
							  <?php }?>
							  <?php if(isset($qst['answer4'])){?>
							  <tr class="info">
								<td>&nbsp; 4. &emsp;<input type="radio" value="3" name="<?php echo $qst['id'];?>"/>&nbsp;<?php echo $qst['answer4'];?></label></td>
							  </tr>
							  <?php }?>
							  <tr class="info">
								<td><input type="radio" checked="checked" style="display:none"  value="not_attempt" name="<?php echo $qst['id'];?>"/></label></td>
							  </tr>
						</tbody>
					</table>
			<?php 
				$i++; 
				} 
			?>
			<center><input type="submit" value="submit" class="btn btn-success"/></center>
		</form>
	</div>
	
	
	<div class="col-sm-2"></div>
</div>

</body>
</html>
