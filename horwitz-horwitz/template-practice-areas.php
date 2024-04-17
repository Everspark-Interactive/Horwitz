<?php
/*
Template Name: Practice Areas
*/
?>
<?php get_header();?>
<?php if(is_page(1649)){ ?>
<style type="text/css">
  .page-template-template-practice-areas .pa-banner h1 {
    font-family: "Old Standard TT", serif;
    font-weight: 400;
    font-size: 93.07px;
    text-transform: uppercase;
    color: #fff;
    letter-spacing: .26em;
    line-height: 93.07px;
    margin-bottom: 0px;
}
</style>
<?php  } ?>
<div class="pa-banner">
	<?php if(is_page(1649)){ ?> <h1><?php the_title(); ?></h1> <?php }else{ ?> <p><?php the_title(); ?></p> <?php  } ?>
</div>

<div id="page-container" class="clearfix">

    <div class="main-content">
	    
        <?php if( have_rows('practice_areas') ): ?>
        <?php while ( have_rows('practice_areas') ) : the_row(); ?>
        
        	<p class="pa-title"><?php the_sub_field('category'); ?></p>
        	
        	<div class="pa-wrapper">	
        					
	        	<?php if( have_rows('practice_area') ): ?>
	        	<?php while ( have_rows('practice_area') ) : the_row(); ?>
	        				
	        		<a class="practice-area" href="<?php the_sub_field('link_to_practice_area'); ?>">
		        		<p><?php the_sub_field('practice_area_name'); ?></p>
	        		</a>
	        									
	        	<?php endwhile; ?>
	        	<?php else : ?>
	        	<?php endif; ?>
        	
        	</div>
        								
        <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        
    </div>
    
</div>

<?php get_footer();?>