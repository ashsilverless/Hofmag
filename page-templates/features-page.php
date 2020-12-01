<?php
/**
 * ============== Template Name: Features Page
 *
 * @package hofmag
 */
get_header();?>
<?php if( have_rows('hero_section') ):
	while( have_rows('hero_section') ): the_row(); ?>
<section class="hero section mb1 ml1 mr1 pt2 pb2 h100 features-page">
	<div class="container cols-12 cols-sm-24 align-vert-c">
		<div class="col pt7 hero__features" >
			<h1 class="heading heading__xl heading__thin slide-up pb1"><?php the_sub_field('title');?></h1>
			<div class="hide-sm">
				<h5 class="heading heading__xs heading__capitalize heading__brand-color pb1 font400 slow-fade"><?php the_sub_field('feature_title');?></h5>
				<?php if( have_rows('features') ):
					while( have_rows('features') ): the_row(); ?>
						<div class="heading heading__xxs heading__caps heading__thin pb1 slide-up feature__container">
							<span class="features__number mr2"><?php the_sub_field('number');?></span>
							<?php the_sub_field('title');?>
						</div>
				<?php endwhile; endif;?>
			</div>
		</div>
		<div class="col pt7 p-sm-t2 features__image slow-fade delay">
			<?php
				$image = get_sub_field('image');
			?>
			<div class="features__image-container">
				<img src='<?php echo esc_url($image['url']); ?>'/>
				<?php if( have_rows('features') ):
					while( have_rows('features') ): the_row(); ?>
						<span class="features__number hide-sm" style="position: absolute; top: <?php the_sub_field('y_axis_location');?>%; left: <?php the_sub_field('x_axis_location');?>%"><?php the_sub_field('number');?></span>
				<?php endwhile; endif;?>
			</div>
		</div>
	</div>
</section>

<?php endwhile; endif;?>


<?php if( have_rows('benefits') ):
	while( have_rows('benefits') ): the_row(); ?>
<section class="section mb1 ml1 mr1 pt2 pb2">
	<div class="container cols-24">
		<div class="col align-center">
			<h2 class="heading heading__thin heading__lg pb2 slide-up"><?php the_sub_field('title');?></h2>
		</div>
	</div>
	<div class="container cols-8 cols-offset-lg-4-16 cols-offset-sm-2-20 align-lg-center grid-gap">
		<?php if( have_rows('benefit') ):
			while( have_rows('benefit') ): the_row(); ?>
				<div class="col slide-up core-benefits">
					<?php
						$image = get_sub_field('image');
					?>
					<img src='<?php echo esc_url($image['url']); ?>' class="pb1"/>
					<h3 class="heading heading__md heading__brand-color"><?php the_sub_field('title');?></h3>
					<div>
						<?php the_sub_field('content');?>
					</div>
				</div>
		<?php endwhile; endif;?>
	</div>
</section>
<?php endwhile; endif;?>




<?php if( have_rows('performance_section') ):
	while( have_rows('performance_section') ): the_row(); ?>
		<?php
			$image = get_sub_field('image');
		?>
<section class="section section__light-grey mb1 ml1 mr1 pt2 pb2">
	<div class="container cols-6-16 cols-sm-24 align-sm-center grid-gap pb1 pt1">
		<div class="col align-center pl1 pr1 slow-fade delay warranty p-sm-b1">
			<img src='<?php echo esc_url($image['url']); ?>'/>
		</div>
		<div class="col slide-up">
			<h4 class="heading heading__lg heading__brand-color "><?php the_sub_field('title');?></h4>
			<div>
				<?php the_sub_field('content');?>
			</div>
			<a class="button button__secondary button__color-white button__caps button__hover-text-secondary button__hover-white pt1 pb1 pl3 pr3"><?php the_sub_field('button_text');?></a>
		</div>
	</div>
</section>
<?php endwhile; endif;?>



<?php if( have_rows('certifications_section') ):
	while( have_rows('certifications_section') ): the_row(); ?>
<section class="section mb1 ml1 mr1 pt2 pb2">
	<div class="container cols-24">
		<div class="col border border__brand-primary pb2 pt2 pr2 pl2">
			<h4 class="heading heading__md heading__brand-color"><?php the_sub_field('title');?></h4>
			<div class="container cols-8 cols-sm-24">
				<div class="col">
					<?php the_sub_field('content');?>
				</div>
			</div>
			<div class="container cols-12  cols-sm-24 grid-gap">
				<?php if( have_rows('certificate') ):
					while( have_rows('certificate') ): the_row(); ?>
						<div class="col">
							<span class="heading heading__brand-color"><?php echo get_row_index(); ?>.</span> <?php the_sub_field('content');?>
						</div>
				<?php endwhile; endif;?>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif;?>


<?php if( have_rows('technical_section') ):
	while( have_rows('technical_section') ): the_row(); ?>
<section class="section mb1 ml1 mr1 pt2 pb2">
	<div class="container cols-24">
		<div class="col border border__brand-primary pb2 pt2 pr2 pl2">
			<h4 class="heading heading__md heading__brand-color pb2"><?php the_sub_field('title');?></h4>
			<?php if( have_rows('content') ):
				while( have_rows('content') ): the_row(); ?>
				<?php if( get_row_layout() == 'single_item' ): ?>
					<div class="pb1">
						<span class="heading heading__brand-color">+</span> <span class="font400"><?php the_sub_field('title');?></span><span> <?php the_sub_field('content');?></span>
					</div>
				<?php elseif( get_row_layout() == 'image_item' ):
		            $image = get_sub_field('image');
		        ?>
		        <div class="pb1">
					<span class="heading heading__brand-color">+</span> <span class="font400"><?php the_sub_field('title');?></span>
				</div>
				<div class="container cols-12 pb1">
					<div class="col">
						<img src='<?php echo esc_url($image['url']); ?>'/>
					</div>
				</div>
				<?php elseif( get_row_layout() == 'table_item' ): ?>
				<div class="pb1">
					<span class="heading heading__brand-color">+</span> <span class="font400"><?php the_sub_field('title');?></span>
				</div>
				<div class="table_item pb1">
					<div class="table_title pl3 pb1 p-sm-l1">
						<span class="heading heading__brand-color">Setting</span>
						<span class="heading heading__brand-color">Amps</span>
					</div>
					<div class="table_title pl3 pb1 p-sm-l1">
						<span class="heading heading__brand-color">Setting</span>
						<span class="heading heading__brand-color">Amps</span>
					</div>
					<div class="table_title pl3 pb1 p-sm-l1">
						<span class="heading heading__brand-color">Setting</span>
						<span class="heading heading__brand-color">Amps</span>
					</div>
					<?php if( have_rows('table') ):
					while( have_rows('table') ): the_row(); ?>
					<div class="table_content pl3 pb1 p-sm-l1">
						<span><?php the_sub_field('setting');?></span>
						<span><?php the_sub_field('amps_value');?></span>
					</div>
					<?php endwhile; endif;?>
				</div>
				<?php endif; ?>
			<?php endwhile; endif;?>
		</div>
	</div>
</section>
<?php endwhile; endif;?>

<!--
<?php if( have_rows('research_section') ):
	while( have_rows('research_section') ): the_row(); ?>
<section class="section mb1 ml1 mr1 pt2 pb2">
	<div class="container cols-24">
		<div class="col">
			<h3 class="heading heading__thin heading__lg pb1"><?php the_sub_field('title'); ?></h3>
		</div>
		<div class="col">
			<div class="owl-carousel owl-theme research_carousel">
				<?php if( have_rows('research_item') ):
					while( have_rows('research_item') ): the_row(); ?>
					<div>
						<h5 class="heading heading__md heading__brand-color pb1"><?php the_sub_field('title')?></h5>
						<div class="pb2 research_content">
							<?php the_sub_field('content')?>
						</div>
						<div class="align-center">
							<a href="
							<?php if(get_sub_field('link_type') == 'ext'){
								echo the_sub_field('external_link');
							} else {
								echo the_sub_field('document');
							}?>
							" class="button button__secondary button__color-white button__caps button__hover-text-secondary button__hover-white pt1 pb1 pl3 pr3 align" target="_blank"><?php the_sub_field('link_text')?></a>
						</div>
					</div>
				<?php endwhile; endif;?>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif;?>
-->

<section class="section mb1 ml1 mr1 pt2 pb2">
	<div class="container cols-12 grid-gap cols-offset-lg-4-16 cols-sm-24">
		<?php if( have_rows('faqs_section') ):
		while( have_rows('faqs_section') ): the_row(); ?>
			<div class="col">
				<h5 class="heading heading__lg heading__thin pb1"><?php the_sub_field('title')?></h5>
				<?php if( have_rows('faq') ):
					while( have_rows('faq') ): the_row(); ?>
					<div class="accordion pb2">
						<h3 class="heading heading__xs heading__brand-color font400 accordion__triangle"><?php the_sub_field('question'); ?></h3>
						<div class="collapsible">
							<div class="container cols-22">
								<div class="col">
									<?php the_sub_field('answer'); ?>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; endif;?>
			</div>
		<?php endwhile; endif;?>

		<?php if( have_rows('documents_section') ):
			while( have_rows('documents_section') ): the_row(); ?>
			<div class="col">
				<h5 class="heading heading__lg heading__thin pb1"><?php the_sub_field('title')?></h5>
				<?php if( have_rows('document') ):
					while( have_rows('document') ): the_row(); ?>
					<?php
						$file = get_sub_field('document');
						$filesize = $file['filesize'];
						$filesize = size_format($filesize, 2);
					?>
					<div class="container cols-3-21 cols-sm-4-20 grid-gap pb2 align-vert-c documentation">
						<div class="col doc_icon">
							<?php get_template_part("inc/img/pdf-icon"); ?>
						</div>
						<div class="col">
							<a href="<?php echo $file['url']; ?>" class="font900">
								<?php the_sub_field('document_title');?>
							</a>
							<br/>
							PDF - <?php echo $filesize; ?>
						</div>
					</div>

				<?php endwhile; endif;?>
			</div>
		<?php endwhile; endif;?>
	</div>
</section>


<!--

<?php if( have_rows('hofmag_for_section') ):
	while( have_rows('hofmag_for_section') ): the_row(); ?>
<section class="section mb1 ml1 mr1 pt2 pb2 p-sm-t1">
	<div class="container cols-12 cols-offset-lg-4-16 cols-sm-24 grid-gap">
		<?php if( have_rows('for_block') ):
			while( have_rows('for_block') ): the_row(); ?>
				<div class="col slow-fade for-section">
					<div class="border border__brand-primary align-center pb2 pt2 pl2 pr2">
						<h5 class="heading heading__md heading__brand-color pb1"><?php the_sub_field('title')?></h5>
						<div><?php the_sub_field('content');?></div>
						<a class="button button__secondary button__color-white button__caps button__hover-text-secondary button__hover-white pt1 pb1 pl3 pr3">Learn More</a>
					</div>
				</div>
		<?php endwhile; endif;?>
	</div>
</section>
<?php endwhile; endif;?>

-->
<?php get_footer();?>
