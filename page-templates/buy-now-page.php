<?php
/**
 * ============== Template Name: Buy Now Page
 *
 * @package hofmag
 */
get_header();?>

<div class="container cols-12 cols-sm-24 align-sm-center grid-gap pt10">
	<div class="col">
		<?php if( have_rows('buy_now_content') ):
    		while( have_rows('buy_now_content') ): the_row(); ?>
			<h1 class="heading heading__thin font400 pb1 slide-up"><?php the_sub_field('title');?></h1>
			<h2 class="heading heading__thin font400 heading__sm pb1 slide-up"><?php the_sub_field('sub_title');?></h2>
			<div class="slide-up">
				<?php the_sub_field('content');?>
			</div>
		<?php endwhile; endif;?>
		<div class="pt1 pb5 slow-fade delay">
			<?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1"]' ); ?>
		</div>
		<div class="pb5 slow-fade">
			<h3 class="heading heading__lg heading__thin pb1">Get in touch</h3>
			<?php get_template_part("template-parts/contact-us"); ?>
		</div>
	</div>
	<div class="col hide-sm">
		<?php
			$image = get_field('buy_it_now_image');
		?>
		<img src="<?php echo esc_url($image['url']); ?>" class="slide-up"/>
		<?php if( have_rows('quote') ):
    		while( have_rows('quote') ): the_row(); ?>
			<div class="pt5 pl5 pb5 align-right heading heading__md slow-fade delay">
				<?php the_sub_field('quote_content');?>
				<span class="heading heading__thin heading__brand-color heading__caps"><?php the_sub_field('quote_credit');?></span>
			</div>
		<?php endwhile; endif;?>
	</div>
</div>

<?php get_footer();?>