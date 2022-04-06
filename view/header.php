<!DOCTYPE html>
<html lang = "en">

<!-- the head section -->
<head>
	<meta charset="UTF-8">
	<meta http-equix="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Zippy Used Autos</title>
	<link rel="stylesheet" href="view/main.css">
</head>

<!-- the body section -->
<body>
<header>
	<?php if($action == 'register' || $action == 'logout') {}
	else if(!isset($_COOKIE['userid']) || $_COOKIE['userid'] == 'Guest') { ?>
		<p style="text-align:right;"><a href="?action=register">Register</a></p>
	<?php } 
	else { 
	    $firstname = $_COOKIE['userid'];
	?>
		<p style="text-align:right">Welcome <?= $firstname; ?>!
		<a href="?action=logout">(Sign Out)</a></p>
	<?php } ?>
	<h1>Zippy Used Autos</h1>
</header>
<main>
