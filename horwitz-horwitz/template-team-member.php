<?php
/*
Template Name: Employee Bio
*/
?>
<?php get_header();?>

<div id="page-container" class="clearfix">
	<img class="background-texture" src="<?php echo get_template_directory_uri(); ?>/media/background_1.svg"/>
    <div class="sidebar">
	    
        <div class="profile-image">
	        <?php the_post_thumbnail(); ?>
        </div>
        
        <?php if( get_field('employee_quote') ): ?>
					<p class="employee-quote"><?php the_field('employee_quote'); ?></p>
				<?php endif; ?>
				
				<?php if( get_field('awards') ): ?>
					<div class="awards-slider">
						<?php if( have_rows('awards') ): ?>
						<?php while ( have_rows('awards') ) : the_row(); ?>
											
							<div>
								<?php $image = get_sub_field('award'); ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							</div>
														
						<?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				
    </div>
    <div class="main-content">
	    
	    <div class="one">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h1 class="page-title">
            <?php the_title();?>
        </h1>
        <p class="position"><?php the_field('employee_title'); ?></p>
        <hr/>
        <?php the_content();?>

        <?php endwhile; else : ?>
        <p>
            <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
        </p>
        <?php endif; ?>
	    </div>
	    
    </div>
</div>

<div class="education-honors">
  <div class="column education">
    <?php the_field('education'); ?>
  </div>
  <div class="column honors">
    <?php the_field('honors_and_awards'); ?>
  </div>
</div>

<?php get_footer();?>