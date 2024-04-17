<?php
/*
Template Name: Testimonials
*/
?>
<?php get_header();?>
<?php if(is_page(26)){ ?>
<style type="text/css">
  .page-template-template-testimonials .testimonial-banner h1 {
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
<div class="testimonial-banner">
	<?php if(is_page(26)){ ?> <h1><?php the_title(); ?></h1> <?php }else{ ?> <p><?php the_title(); ?></p> <?php  } ?>
</div>

<div id="page-container" class="clearfix">
    
    <div class="main-content">
	    
    	<div class="top">
	    	<p class="title">Hear what our client have to say about us!</p>
	    	<div class="switches">
		    	<div class="button button-left active">
			    	<p>video testimonials</p>
		    	</div>
		    	<div class="button button-right">
			    	<p>client stories</p>
		    	</div>
	    	</div>
    	</div> <!-- .top -->
    	
    	<div class="content-wrapper">
	    	<div class="testimonials videos">
		    	<?php if( have_rows('video_testimonials') ): ?>
		    	<?php while ( have_rows('video_testimonials') ) : the_row(); ?>
		    						
		    		<div class="video">
			    		<span style="display:inline;position:relative">
								<a href="//www.youtube-nocookie.com/embed/<?php the_sub_field('video_code'); ?>?rel=0&amp;showinfo=0" data-lity>
								  <div class="thumbnail" style="background-image: url(<?php the_sub_field('video_thumbnail'); ?>)">
									  <div class="thumbnail-overlay">
										  <div class="play-btn">
											  <div class="arrow"></div>
									    </div>
									  </div>
								  </div>
								</a>
			    		</span>
			    		
			    		<p class="name"><?php the_sub_field('client_name'); ?></p>
			    		<p class="description"><?php the_sub_field('description_of_case'); ?></p>
		    		</div>
		    									
		    	<?php endwhile; ?>
		    	<?php else : ?>
		    	<?php endif; ?>
	    	</div>
	    	<div class="testimonials written">
		    	<?php if( have_rows('test_testimonials') ): ?>
		    	<?php while ( have_rows('test_testimonials') ) : the_row(); ?>
		    						
		    		<div class="testimonial">
			    		<div class="inner">
				    		<p class="test-title"><?php the_sub_field('testimonial_title'); ?></p>
				    		<p class="test-description"><?php the_sub_field('testimonial_description'); ?></p>
				    		<p class="client"><?php the_sub_field('client'); ?></p>
			    		</div>
		    		</div>
		    									
		    	<?php endwhile; ?>
		    	<?php else : ?>
		    	<?php endif; ?>
	    	</div>
    	</div>
    	
    </div>
    
</div>

<?php get_footer();?>