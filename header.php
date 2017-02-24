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
		
		<!-- JS -->
		<script src="<?php bloginfo('template_directory'); ?>/assests/js/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/assests/js/bigslide.js"></script>
		
		<!-- INIT BIGSLIDE -->
		<script>
			$(document).ready(function() {
				$('.menu-link').bigSlide();
			});
		</script>
		
		<?php wp_head(); ?>
	</head>
	<body>
	<header class="container-fluid header-bar wrap push">
	<div class="container header-wrapper">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-10 logo">
				<a href="http://trust.rizepoint.com"><img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="RizePoint.com" class="logo-img" onerror="this.onerror=null; this.src='<?php bloginfo('template_directory'); ?>/img/logo.png'"></a>
			</div><!-- logo -->
			
			<!-- DESKTOP NAV -->	
			<nav class="col-md-6 col-sm-6 main-nav">
				<ul class="nav nav-pills">
					<li role="presentation"><a href="http://trust.rizepoint.com">Home</a></li>
					<li role="presentation"><a href="http://trust.rizepoint.com/documentation">Documentation</a></li>
				</ul>
			</nav>
			
			<!-- MOBILE NAV -->
			<div class="mobile-ham-wrapper">
				<a href="#menu" class="menu-link"><span class="glyphicon glyphicon-menu-hamburger m-nav-img" aria-hidden="true"></span></a>
				<nav id="menu" class="col-sm-6 col-xs-12 mobile-nav panel-nav" role="navigation">
					<ul class="nav nav-stacked">
						<li role="presentation"><a href="http://trust.rizepoint.com">Home</a></li>
						<li role="presentation"><a href="http://trust.rizepoint.com/documentation">Documentation</a></li>
					</ul>
				</nav>
			</div><!-- mobile-ham-wrapper -->
			
		</div><!-- row -->
	</div><!-- header-wrapper -->
</header>