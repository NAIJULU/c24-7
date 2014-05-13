<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title( '|', true, 'right' ); ?></title>
				
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		<link rel="stylesheet" type="text/css" href="/c24-7/clima-en-vivo.css">
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBqYxd3SGHM1DHgs5GASk0BKMgWNZaeKeY&sensor=true"></script> 

		<!-- wordpress head functions -->
		<?php  wp_head(); ?>

		
		<!-- end of wordpress head -->

		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>

		<!-- typeahead plugin - if top nav search bar enabled -->
		<?php require_once('library/typeahead.php'); ?>
				
	</head>
	
	<body <?php body_class(); ?>>
				
		<header role="banner">
		
			<div id="inner-header" class="clearfix">
            	
                <div id="logos">
                	<div class="row">
                        <div class="span4">
                        	<a href="<?php echo home_url() ?>">
                            	<img src="<?php bloginfo('template_directory'); ?>/images/logoClima.png" />
                            </a>
                        </div>
                    	<div class="offset2 span4">
                         <a href="http://www.telemedellin.tv/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/logoTM.png" /></a>
                         <a href="http://www.medellin.gov.co/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/logoAlcaldia.png" /></a>
                        	<a href="http://www.areadigital.gov.co/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/LogoArea.png" /></a>
                           
                            
                        </div>
                    </div>
                </div>
            
            
            
		<div class="navbar">
					<div class="navbar-inner">
						<div class="container-fluid nav-container">
							
                            <nav role="navigation">
								<a class="brand" id="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>"></a>
								
								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
								</a>
								
								<div class="nav-collapse">
									<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
								</div>
								
							</nav>
							
							<?php if(of_get_option('search_bar', '1')) {?>
							<form class="navbar-search pull-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
								<input name="s" id="s" type="text" class="search-query" autocomplete="off" placeholder="<?php _e('Search','bonestheme'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
							</form>
							<?php } ?>
							
						</div> <!-- end .nav-container -->
					</div> <!-- end .navbar-inner -->
				</div> <!-- end .navbar -->
                
                <div class="recomendaciones-tw">                
                	<div class="cont-recomendaciones-tw"> 
                		<a href="https://twitter.com/Clima24_7" target="_blank" class="link-twitter">RECOMENDACIONES</a>
                		<div class="marquee-twitter" style="width: 700px; overflow: hidden;"></div>
                	</div>
            	</div>            	
			</div> <!-- end #inner-header -->
			<div id="twitter-feed"></div>
		</header> <!-- end header -->
		
		<div class="container-fluid">
