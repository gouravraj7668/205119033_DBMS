<?php

include("class/users.php");

$sign = new users;

extract($_POST);


if($sign->signin($em,$pas))
{	
	$sign->url("home.php");	
}
else
{

	$sign->url("index.php?run=failed");

}


?>
