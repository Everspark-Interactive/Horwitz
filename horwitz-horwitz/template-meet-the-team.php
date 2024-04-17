<?php
/*
Template Name: Meet the Team
*/
?>
<?php get_header();?>

<div id="page-container" class="clearfix">
    
    <div class="main-content">
        
        <div class="headline">
        	<h1><?php the_title(); ?></h1>
        </div>
        
        <div class="wrapper partners">
	        <p class="type-of-employee">Partners</p>
	        <div class="vert-line"></div>
	        <div class="inner">
		        <?php if( have_rows('partners') ): ?>
		        <?php while ( have_rows('partners') ) : the_row(); ?>
		        					
		        	<div class="employee-box">
			        	<a href="<?php the_sub_field('link_to_bio'); ?>">
			        		<div class="thumbnail"style="background-image: url(<?php the_sub_field('attorney_image'); ?>)">
				        		<div class="thumbnail-overlay">
					        		<p>view profile</p>
				        		</div>
			        		</div>
			        	</a>
			        	<p><?php the_sub_field('attorney_name'); ?></p>
		        	</div>
		        								
		        <?php endwhile; ?>
		        <?php else : ?>
		        <?php endif; ?>
	        </div>
        </div>
        
        <div class="wrapper associates">
	        <p class="type-of-employee">Associates</p>
	        <div class="vert-line"></div>
	        <div class="inner">
		        <?php if( have_rows('associates') ): ?>
		        <?php while ( have_rows('associates') ) : the_row(); ?>
		        					
		        	<div class="employee-box">
			        	<a href="<?php the_sub_field('link_to_bio'); ?>">
			        		<div class="thumbnail"style="background-image: url(<?php the_sub_field('associate_image'); ?>)">
				        		<div class="thumbnail-overlay">
					        		<p>view profile</p>
				        		</div>
			        		</div>
			        	</a>
			        	<p><?php the_sub_field('associate_name'); ?></p>
		        	</div>
		        								
		        <?php endwhile; ?>
		        <?php else : ?>
		        <?php endif; ?>
	        </div>
        </div>
        
    </div>
    
</div>

<?php get_footer();?>