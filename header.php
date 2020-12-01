<?php
/**
 * Header
 *
 * @package hofmag
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="UTF-8">
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Hofmag</title>

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,900&display=swap" rel="stylesheet"/> 
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="page" class="site-wrapper">
		<?php
		if( get_field('header_colour') == 'black' ):
			$theme = "nav__dark";
		elseif( get_field('header_colour') == 'white' ):
			$theme = "nav__light";
		endif;?>
        <header class="<?php if (is_page_template('page-templates/stables.php')) {?>scrolled-nav<?php }?>">
        	<div class="mobileMenu">
            	<span></span>
            	<span></span>
            	<span></span>
            </div>
        	<nav id="nav" class="<?php echo $theme;?> ">
		        <div class="container fullwidth grid-gap cols-4-16-4  cols-md-24 align-vert-c ">
		            <div class="col" id="logo">
		            	<a href="<?php echo get_home_url(); ?>">
		                   <?php get_template_part("inc/img/logo"); ?>
		                </a>
		            </div>
		            <div class="col">
		                <?php
		                wp_nav_menu(array(
		                    'theme_location'  => 'main-menu',
		                    'container_class' => 'mainMenu'
		                ));
		                ?>
		            </div>
		            <div class="col buy-now">
		            	<?php if( have_rows('buy_now_info', 'options') ):
	    					while( have_rows('buy_now_info', 'options') ): the_row(); ?>
	    				<?php
							$image = get_sub_field('image');
						?>
						<a href="<?php echo the_sub_field('link'); ?>">
		    				<img src="<?php echo esc_url($image['url']); ?>"/>
		    			</a>
		    		<?php endwhile; endif;?>
		            </div>
		        </div>
	    	</nav>
        </header>

		<main><!--closes in footer.php-->
