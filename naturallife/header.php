<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="charset=utf-8">
	<title>Natural life style</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.1.1.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
	                 
                          <!--events slider-->
				  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/www.simonbattersby.com/javascript/jquery.mousewheel.min.3.0.6.js"></script>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/www.simonbattersby.com/javascript/cufon-yui.js"></script>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/www.simonbattersby.com/javascript/Museo_400.font.js"></script>
            <script type="text/javascript">
                        Cufon.replace('h1',{fontFamily: 'Museo' });
            </script>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/www.simonbattersby.com/css/vertical.slider.css" type="text/css" media="screen"/>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/www.simonbattersby.com/css/demos.css" type="text/css" media="screen"/>
            <style type="text/css">
            
            #arrow_up{cursor:pointer; float:left}
            #arrow_down{cursor:pointer; float:left}
            </style>   
												<!--end off event slider-->
    
   
	<!--
  	jCarousel library
	-->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.jcarousel.min.js"></script>
	<!--
	  jCarousel skin stylesheet
	-->
    
    
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/skin.css" />

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css" media="screen" />
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox-media.js"></script>

	<script type="text/javascript">

	jQuery(document).ready(function() {
	    jQuery('#mycarousel').jcarousel();

	    
	    /*
	    *  Media helper. Group items, disable animations, hide arrows, enable 	  media and button helpers.
		*/

	    $('.fancybox-media')
		.attr('rel', 'media-gallery')
		.fancybox({
			openEffect : 'none',
			closeEffect : 'none',
			prevEffect : 'none',
			nextEffect : 'none',

			arrows : false,
			helpers : {
				media : {},
				buttons : {}
			}
		});

	});

	</script>


	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
		<![endif]-->

	<style type="text/css">
@font-face {
    font-family:League Gothic; src: url('<?php echo get_template_directory_uri(); ?>/fonts/LeagueGothic.eot'); }

</style>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css" type="text/css" media="screen" />

</head>
<body>

	<div class="top-body">
	<div class="wrapper">
		<div class="content-top">
			<div id="header">
				<div class="logo-container">
					<h1 class="logo">
					<a href="index.html">The Natural Lifestyles</a>
					</h1>
				</div>
				<div class="nav-bar">
									<?php
					$defaults = array(
						'theme_location'  => 'primary_menu',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => '',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						
						'depth'           => 0,
						'walker'          => ''
					);
					?>                       
											  <?php wp_nav_menu( $defaults ); ?>
											  
											  
								
				</div>

			</div>