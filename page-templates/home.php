<?php
/**
 * ============== Template Name: Home Page
 *
 * @package hofmag
 */
get_header();?>

<!--HERO-->

<?php get_template_part("template-parts/hero"); ?>

<?php if( have_rows('introduction') ):
    while( have_rows('introduction') ): the_row(); ?>
<section class="section section__mid-grey-opacity mr1 ml1 mb1">
    <div class="container cols-14-10 cols-xl-24 mob-rows-2">
        <div class="col pt10 pb10 p-sm-t2 p-sm-b2 align-xl-center slide-up">
            <h3 class="heading heading__caps heading__thin heading__lg introducing"><?php the_sub_field('text')?></h3>
        </div>
        <div class="col image-overlap align-xl-center slow-fade delay">
            <?php
				$image = get_sub_field('image');
			?>
            <div class="image-overlap__l0 image-overlap__tn50 r25"
                style="background-image:url(<?php echo esc_url($image['url']); ?>);"></div>
        </div>
    </div>
</section>
<?php endwhile; endif;?>





<?php if( have_rows('trusted_carousel') ):
    while( have_rows('trusted_carousel') ): the_row(); ?>
<section class="section section__light-grey mr1 ml1 mb1 pt5 pb5 p-sm-t3">
    <div class="container cols-24">
        <div class="col align-center pb5 p-sm-b3">
            <h3 class="heading heading__caps heading__thin heading__lg slide-up"><?php the_sub_field('title')?></h3>
        </div>
    </div>
    <?php if( have_rows('carousel_container') ):
    while( have_rows('carousel_container') ): the_row(); ?>
    <div class="container cols-24 cols-offset-xl-2-20 cols-sm-24">
        <div class="col">
            <div class="owl-carousel owl-theme single-carousel">
                <?php if( have_rows('carousel_sections') ):
						while( have_rows('carousel_sections') ): the_row();?>
                <?php
							$image = get_sub_field('image');
						?>
                <div class="container cols-12 cols-xl-14-10 cols-sm-24 single-carousel-item">
                    <div class="col section section__white pt5 pl5 pr10 pb5">
                        <h4 class="heading heading__brand-color heading__md"><?php the_sub_field('title');?></h4>
                        <p><?php the_sub_field('content');?></p>
                    </div>
                    <div class="col bgImage bgImage__cover bgImage__norepeat"
                        style="background-image:url('<?php echo esc_url($image['url']); ?>');"></div>

                </div>
                <?php endwhile; endif;?>
            </div>
        </div>
    </div>
    <?php endwhile; endif;?>
</section>
<?php endwhile; endif;?>








<?php if( have_rows('how_section') ):
    while( have_rows('how_section') ): the_row(); ?>
<?php
			$image = get_sub_field('image');
		?>
<section class="section mr1 ml1 mb1 pt1 how">
    <div class="container cols-offset-6-12 cols-offset-sm-2-20">
        <div class="col align-center pb3">
            <h3 class="heading heading__lg heading__thin slide-up"><?php the_sub_field('title');?></h3>
            <div class="slow-fade delay"><?php the_sub_field('content');?></div>
        </div>
    </div>
    <div class="align-center pt20 pb5 bgImage bgImage__norepeat bgImage__cover how-image"
        style="background-image: url('<?php echo esc_url($image['url']); ?>');">
        <a class="button pr3 pl3 pt1 pb1 button__secondary button__color-white button__caps button__hover-text-secondary"
            href="<?php the_sub_field('link');?>">Learn More</a>
    </div>
</section>
<?php endwhile; endif;?>






<?php if( have_rows('buy_now_section') ):
    while( have_rows('buy_now_section') ): the_row(); ?>
<?php get_template_part("template-parts/buy-now-section"); ?>
<?php endwhile; endif;?>





<?php if( have_rows('conditions_section') ):
    while( have_rows('conditions_section') ): the_row(); ?>
<section class="section section__mid-grey-opacity mr1 ml1 mb1 pt5 pb5 p-sm-t3 p-sm-b3 conditions-container">
    <div class="container cols-offset-6-12 cols-offset-sm-1-22">
        <div class="col align-center pb3">
            <h3 class="heading heading__lg heading__thin slide-up"><?php the_sub_field('title');?></h3>
            <div class="slow-fade delay"><?php the_sub_field('content');?></div>
        </div>
    </div>
    <div class="container cols-6 cols-sm-24 grid-gap">
        <?php if( have_rows('conditions') ):
    		while( have_rows('conditions') ): the_row(); ?>
        <?php
				$image = get_sub_field('image');
			?>
        <div class="col align-center">
            <div>
                <img src="<?php echo esc_url($image['url']); ?>" />
            </div>
            <h5 class="heading heading__sm heading__thin mt2 mb3"><?php the_sub_field('title');?></h5>
        </div>
        <?php endwhile; endif;?>
    </div>
    <div class="align-center pt2">
        <a class="button pr3 pl3 pt1 pb1 button__secondary button__color-white button__caps button__hover-primary button__hover-text-white"
            href="<?php the_sub_field('link');?>"><?php the_sub_field('button_text');?></a>
    </div>
</section>
<?php endwhile; endif;?>






<?php if( have_rows('efficacy_section') ):
    while( have_rows('efficacy_section') ): the_row(); ?>
<section class="section section__light-grey mr1 ml1 mb1 pb5 pt5 p-sm-t3 p-sm-b3">
    <div class="container cols-offset-6-12 cols-offset-sm-2-20">
        <div class="col align-center">
            <h3 class="heading heading__thin heading__lg slide-up"><?php the_sub_field('mid_car_title');?></h3>
            <div class="slow-fade delay"><?php the_sub_field('mid_car_content');?></div>
        </div>
    </div>
    <?php if( have_rows('mid_car_carousel') ): ?>
    <div class="mid-carousel-container">
        <div class="container cols-24 ">
            <div class="owl-carousel owl-theme mid-carousel mt2 col">
                <?php while( have_rows('mid_car_carousel') ): the_row(); ?>
                <?php
						$image = get_sub_field('image');
					?>
                <div class="item pr2 slide-up" style="background-image: url('<?php echo esc_url($image['url']); ?>');">
                    <div class="content-container pb2 pt2 pr2 pl2">
                        <h6 class="heading heading__sm heading__light heading__thin pb1 mb1">
                            <?php the_sub_field('title');?></h6>
                        <div><?php the_sub_field('content');?></div>
                        <div>

                        <?php if (get_sub_field('pdf')){?>
                        <div class="doc_icon"><a class="doc_icon" href="<?php the_sub_field('pdf');?>"><?php get_template_part("inc/img/pdf-icon"); ?></a></div>
                        <?php }?>

                        <?php if (get_sub_field('link')){?>
                        <div><a class="button button__caps button__hover-text-secondary button__hover-white pt1 pb1 pl3 pr3" href="<?php the_sub_field('link');?>" target="_blank">Read More (opens external site)</a></div>
                        <?php }?>                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            

                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <?php endif;?>
</section>
<?php endwhile; endif;?>






<?php if( have_rows('research_section') ):
    while( have_rows('research_section') ): the_row(); ?>
<?php get_template_part("template-parts/research-section"); ?>
<?php endwhile; endif;?>


<?php get_footer();?>