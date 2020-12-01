<?php
/**
 * The template for displaying the footer
 * @package hofmag
 */
?>

</main>

<footer class="footer mr1 ml1 mb1">

	<div class="socket">

		<div class="container fullwidth cols-4-16-4 cols-sm-24-24-24 cols-sm text-center-sm">

			<div class="col colophon">
				<?php if( have_rows('footer_details', 'options') ):
	    		while( have_rows('footer_details', 'options') ): the_row(); ?>
	    			<?php
						$image = get_sub_field('image');
					?>
	    			<img src="<?php echo esc_url($image['url']); ?>"/>
	    		<?php endwhile; endif;?>
			</div>

			<div class="col mandatory align-sm-center">
				<div>
					Hofmeir Magnetics Ltd &copy; <?php echo date ('Y');?> All Rights Reserved

					<span class="divider">|</span>

					<?php
	                wp_nav_menu(array(
	                    'theme_location'  => 'secondary-menu',
	                    'container_class' => 'footerMenu'
	                ));
	                ?>
				</div>
			</div>

			<div class="col silverless">
				<a href="https://silverless.co.uk"><?php get_template_part('inc/img/silverless', 'logo');?></a>
			</div>

		</div>

	</div>

	</div><!--socket-->

</footer>

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
