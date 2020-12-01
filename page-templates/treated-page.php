<?php
/**
 * ============== Template Name: Research Page
 *
 * @package hofmag
 */
get_header();?>

<!--HERO-->

<?php get_template_part("template-parts/hero"); ?>

<?php if( have_rows('conditions_section') ):
    while( have_rows('conditions_section') ): the_row(); ?>
<section class="section">
	<div class="container conditions cols-24 mr1 ml1 mb1 pb1 pt1" id="mixitup-gallery">
		<div class="col mixitup-gallery">
			<div class="mb1">
		    	<!--<div class="filter">
				    <div>
					    <fieldset>
						    <div class="wrapper-radio conditions pb1 pt1 pl3 pr3 section section__mid-grey-opacity">
						        <div>
							        <div class="radio control mixitup-control mixitup-control-active pl1 pr1" data-filter="all">
							        	<label>
								        <input type="radio" value="all" name="gallery-selector" checked/>
										ALL</label>
							        </div>
						        </div>
						        <?php
								$conditions = get_sub_field("condition");
								foreach($conditions as &$condition):

									$className = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($condition["title"]));

									$condition["className"] = $className;

									?>

								    <div>
								        <div class="radio control mixitup-control pl1 pr1" data-filter="<?php echo "." . $className; ?>">
								        	<label>
									        <input type="radio" value="<?php echo $className; ?>" name="gallery-selector"/>
											<?php echo $condition["title"]; ?></label>
								        </div>
							        </div>
								<?php endforeach; ?>
							</div>
						</fieldset>
					</div>
				</div>-->
		    </div>
		     <div class="col-12 col-lg-8 col-xl-9 order-content">

				<div data-ref="mixitup-container">

			    <?php foreach($conditions as $condition):

			    $className = $condition["className"];

			     ?>

				<div class="condition-item mix <?php echo $className; ?> section section__light-grey pb4 pt4 pr8 pl8 mb1" data-ref="mixitup-target">
					<div class="container cols-8-16 grid-gap cols-lg-24">
						<div class="col">
							<h4 class="heading heading__brand-color heading__sm font400"><?php echo $condition["title"]; ?></h4>
							<div><?php echo $condition["description"]; ?></div>
                            <div class="bullets">
                            <?php $rows = $condition['bullet_points'];
                                if($rows) {
                                    foreach($rows as $row) {?>
                                        <p><?php echo $row['title'];?></p>
                                    <?php }
                                }?>
                            </div>
						</div>
						<div class="col">
							<?php $pdf_link = $condition['pdf'];?>
							<div><?php echo $condition["content"]; ?></div>
							<?php if ($pdf_link){?>
							<div class="doc_icon"><a class="doc_icon" href="<?php echo $pdf_link['url'];?>"><?php get_template_part("inc/img/pdf-icon"); ?></a></div>
							<?php }?>
							<?php $page_link = $condition['web_link'];?>
							<?php if ($page_link){?>
							<div><a class="button button__secondary button__color-white button__caps button__hover-text-secondary button__hover-white pt1 pb1 pl3 pr3" href="<?php echo $page_link;?>" target="_blank">Read More (opens external site)</a></div>
							<?php }?>
						</div>
					</div>
				</div>

				<?php endforeach; ?>

				</div>

		    </div>
		</div>
	</div>
</section>
<?php endwhile; endif;?>


<?php if( have_rows('buy_now_section') ):
    while( have_rows('buy_now_section') ): the_row(); ?>
	<?php get_template_part("template-parts/buy-now-section"); ?>
<?php endwhile; endif;?>

<?php if( have_rows('research_section') ):
    while( have_rows('research_section') ): the_row(); ?>
    	<?php get_template_part("template-parts/research-section"); ?>
<?php endwhile; endif;?>

<?php get_footer();?>
