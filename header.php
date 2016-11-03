<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); echo (' | '); bloginfo('description') ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/<?php echo $style; ?>.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/geral.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bower_components/wow/css/libs/animate.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/plugins.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
	
</head>
<body <?php body_class(); ?>>

	<?php include('includes/organisms/menu-responsivo.php') ?>

	<div class="layout">
		<header>
			<div class="container">
				<div class="logo">
					<a href="<?php bloginfo('url');?>">
						<img src="<?php bloginfo('template_url');?>/images/logo-fr-topo.svg" alt="Logo Topo Fr">
					</a>
				</div>

				<div class="links">
					<?php include('includes/organisms/menu.php') ?>

					
					<a href="javascript:;" class="toggle">
						<span></span>
						<span></span>
						<span></span>
					</a>

					<ul class="social">
						<li>
							<a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div>

				<h1 class="wow pulse" data-wow-duration="1s" data-wow-delay="1s"><?php echo $chamada; ?></h1>
			</div>
		</header>

		<main>
