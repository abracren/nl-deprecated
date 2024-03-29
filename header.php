<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->
		<!--[if gte IE 9]>
		  <style type="text/css">
		    .gradient {
		       filter: none;
		    }
		  </style>

	</head>

	<body <?php body_class(); ?>>

<!-- 	<div class="off-canvas-wrap" data-offcanvas> -->
		<div class="inner-wrap">
			<div id="container">
				<div class="fullWidth tripleTresBack bannerTop" > 
					<header class="header" role="banner">


						<div id="inner-header" class="row hide-for-small">

							<div class="medium-3 columns">
							.	<div class=" logoHeader2" style=""><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/imagesRoot/logo.png"/></a></div>

							</div>
							<div class="medium-4 columns">
								<div class="tituloHeader"> NADANDO LIBRE</div>
							</div>
							<div class="medium-3 columns hide-for-medium">
								<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' );?>" >
									<input type="text" value="" name="s" id="s" class="search-query  "placeholder="Buscar" />
								</form>
							</div>
							<div class="medium-4 large-2 columns">
								<ul class="soc">
									    <li><a class="soc-twitter" href="https://twitter.com/nadandolibre"></a></li>
									    <li><a class="soc-facebook" href="https://www.facebook.com/nadandolibre"></a></li>
									    <li><a class="soc-youtube soc-icon-last" href="https://www.youtube.com/user/nadandolibre"></a></li>
								</ul>
							</div>
							<!-- <div class="medium-4 columns buttonTop">
								<ul class="button-group">
									  <li><a href="#" class="button tiny">Contacto</a></li>
									  <li><a href="#" class="button tiny">Registrate</a></li>
									  <li><a href="#" class="button tiny">Trabaja con Nosotros</a></li>
								</ul>
							</div> -->

							 <?php// get_template_part( 'partials/nav', 'offcanvas' ); ?>


							 <?php // get_template_part( 'partials/nav', 'offcanvas-sidebar' ); ?>

							<!-- You only need to use one of the above navigations.
								 Offcanvas-sidebar adds a sidebar to a "right" offcanavas menus. -->

						</div> <!-- end #inner-header -->

					</header> <!-- end header -->
				</div>
				<div class="fullWidth darkGrayBack"> 
					<!--<div class="row midHeader">
						<div class="medium-6 columns NombreHeader"><a href="<?php echo home_url(); ?>" rel="nofollow">
									<?php bloginfo('name'); ?>
								</a></div>
						 <div class="medium-6 columns logoHeader"><img src="<?php echo get_template_directory_uri(); ?>/imagesRoot/logo.png"/></div>
					 </div>-->
					
				</div>
				<div class="fullWidth darkGrayBack"> 

					<div class="row ">
						<div class="medium-8 medium-offset-4 columns">
						<?php get_template_part( 'partials/nav', 'topbar' ); ?>
						</div>
					</div>
					
				</div>
				</div>
				<?php get_template_part( 'partials/content', 'cursesdropdown' ); ?>
				<?php get_template_part( 'partials/content', 'expresdropdown' ); ?>
