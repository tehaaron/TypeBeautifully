<?php ob_start(); ?>
<?php include_once('classes/translate.class.php'); ?>
<?php if (!isset($_SESSION)) session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<!--[if IE]>
     <style type="text/css">
         .timer { display: none !important; }
         div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
    </style>
<![endif]-->
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>Typebeautiful.ly Login</title>
		  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Playfair+Display|Muli">
		  <!-- Set the viewport width to device width for mobile -->
		  <meta name="viewport" content="width=device-width" />
		  
		  <!-- Included CSS Files (Uncompressed) -->
		  <link rel="stylesheet" href="stylesheets/app.css">
		  <link rel="stylesheet" href="stylesheets/bootstrap.css">


		  <!-- IE Fix for HTML5 Tags -->
		  <!--[if lt IE 9]>
		    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		  <![endif]-->

		<meta name="description" content="Typebeautiful.ly">
		<meta name="author" content="Aaron Selvig | Typebeautiful.ly">

		<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- Le styles -->
		<!--<link href="assets/css/bootstrap.min.css" rel="stylesheet">-->
		<link href="assets/css/jigowatt.css" rel="stylesheet">

		<script src="javascripts/jquery.js"></script>
	</head>

	<body>
<?php include_once("analyticstracking.php") ?>
<!-- Navigation
================================================== -->

	<div class="navbar">
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">

				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<a class="brand" href="home.php"><?php _e('Typebeautiful.ly'); ?></a>
				<div class="nav-collapse">
					<ul class="nav">
						<li><a href="home.php"><?php _e('Home'); ?></a></li>
						<li><a href="app.php"><?php _e('App'); ?></a></li>
					</ul>
		<?php if(isset($_SESSION['jigowatt']['username'])) { ?>
		<ul class="nav pull-right">
			<li class="dropdown">
				<p class="navbar-text dropdown-toggle" data-toggle="dropdown" id="userDrop">
					<?php echo $_SESSION['jigowatt']['gravatar']; ?>
					<a href="#"><?php echo $_SESSION['jigowatt']['username']; ?></a>
					<b class="caret"></b>
				</p>
				<ul class="dropdown-menu">
		<?php if(in_array(1, $_SESSION['jigowatt']['user_level'])) { ?>
					<li><a href="admin/index.php"><i class="icon-home"></i> <?php _e('Control Panel'); ?></a></li>
					<li><a href="admin/settings.php"><i class="icon-cog"></i> <?php _e('Settings'); ?></a></li> <?php } ?>
					<li><a href="profile.php"><i class="icon-user"></i> <?php _e('My Account'); ?></a></li>
					<li><a href="http://jigowatt.co.uk/themeforest/login/install.php"><i class="icon-info-sign"></i> <?php _e('Help'); ?></a></li>
					<li class="divider"></li>
					<li><a href="logout.php"><?php _e('Sign out'); ?></a></li>
				</ul>
			</li>
		</ul>
		<?php } else { ?>
		<ul class="nav pull-right">
			<li><a href="login.php" class="signup-link"><em><?php _e('Have an account?'); ?></em> <strong><?php _e('Sign in!'); ?></strong></a></li>
		</ul>
		<?php } ?>
				</div>
				</div>
			</div><!-- /navbar-inner -->
		</div><!-- /navbar -->
	</div><!-- /navbar-wrapper -->

<!-- Main content
================================================== -->
		<div class="container" >
			<div class="row">

				<div class="span12">
