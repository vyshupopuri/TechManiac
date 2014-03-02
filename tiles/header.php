<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tech Maniac</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/site.css" rel="stylesheet">
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
	<link rel="icon" href="assets/img/favicon.ico">
  </head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a style =" color: #0489B1; font-size: 22px;"class="navbar-brand" href="#">TECH MANIAC</a>
    		</div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li id="index"><a href="index">Home</a></li>
					<li id="forums"><a href="forums">Forums</a></li>
					<li id="about"><a href="about">About</a></li>
				</ul>
				
				<?php if(array_key_exists('userid', $_SESSION)){ ?>
				<ul class="nav navbar-nav navbar-right">
					<li class="active"><a style="font-size:18px;"><?= $_SESSION['username'] ?></a></li>
					<li><a style="font-size:18px;" href="logout.php">Logout</a></li>
      			</ul>
				<?php }
				else { ?>
				<form class="nav navbar-form pull-right" action="lib/login.php" method="post">
					<input type="text" name="username" class="form-control" placeholder="Username">
					<input type="password" name="password" class="form-control" placeholder="Password" />
					<input type="hidden" name="backUrl" value="../index.php" />
					<button type="submit" class="btn btn-default">Sign in</button>
				</form>
				<?php } ?>
    		</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container">
	<?php 
	if(array_key_exists('error', $_SESSION)) {
		?><span class="label label-warning pull-right"><?= $_SESSION['error'] ?></span><?php
		unset($_SESSION['error']);
	} ?>

    
