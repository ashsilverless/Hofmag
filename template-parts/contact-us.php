<span class="heading heading__brand-color"><?php the_field('company_title', 'options');?></span>
	<p class="mt0"><?php the_field('address', 'options');?></p>
	<div class="heading heading__brand-color heading__thin">
		<span>Tel: </span>
		<a href="tel:<?php the_field('telephone', 'options');?>" class="heading heading__mid-grey heading__thin"><?php the_field('telephone', 'options');?></a>
	</div>
	<div class="heading heading__brand-color heading__thin">
		<span>Email: </span>
		<a href="mailto:<?php the_field('email', 'options');?>" class="heading heading__mid-grey heading__thin"><?php the_field('email', 'options');?></a>
	</div>
	<div class="pt2">
		<?php if( have_rows('social', 'options') ):
		while( have_rows('social', 'options') ): the_row(); ?>
			<?php
				$icon = get_sub_field('icon');
			?>
			<span class="social pr3">
				<a href="<?php echo the_sub_field('link');?>" title="<?php echo the_sub_field('title');?>" target="_blank"><img src="<?php echo esc_url($icon['url']); ?>"/></a>
			</span>

		<?php endwhile; endif;?>
	</div>