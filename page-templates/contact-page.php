<?php
/**
 * ============== Template Name: Contact Page
 *
 * @package hofmag
 */
get_header();?>

<section class="hero section mb1 ml1 mr1 pt2 pb2 h100 contact-page">
	<div class="contact">
		<div class="container cols-24">
			<div class="col pb3">
				<h1 class="heading heading__lg heading__thin"><?php the_field('title');?></h1>
			</div>
		</div>
		<div class="container cols-12 cols-sm-24">
			<div class="col pb5" >
				<div>
					<?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1"]' ); ?>
				</div>
			</div>
			<div class="col pb5">
				<?php get_template_part("template-parts/contact-us"); ?>
			</div>
		</div>
	</div>
</section>



<?php get_footer();?>