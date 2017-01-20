<?php ob_start(); ?>
<!doctype html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Trust | RizePoint</title>
		
		<?php require_once(dirname(__FILE__)."/config.php"); ?>
		
		<!-- META DATA -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- CSS -->
		<link href="<?php bloginfo('template_directory'); ?>/assests/css/normalize.css" type="text/css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/assests/css/bootstrap.min.css" type="text/css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css" rel="stylesheet">
		
		<?php wp_head(); ?>
	</head>
	<body>
	<header class="container-fluid header-bar">
	<div class="container header-wrapper">
		<div class="row">
			<div class="col-md-6 col-xs-12 logo">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="RizePoint.com" class="logo-img" onerror="this.onerror=null; this.src='<?php bloginfo('template_directory'); ?>/img/logo.png'">
			</div><!-- logo -->
			<nav class="col-md-6 col-xs-12 main-nav">
				<ul>
<!--					<li><a href="http://rizepoint.com">RizePoint.com</a></li>-->
				</ul>
			</nav>
		</div><!-- row -->
	</div><!-- header-wrapper -->
</header>