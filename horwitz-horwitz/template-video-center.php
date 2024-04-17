<?php
/*
Template Name: Video Center
*/
?>
<?php get_header();?>
<?php  if(is_page(array(253,28))){?>
<style type="text/css">
  .textmy h1 {
    font-family: "Old Standard TT", serif;
    font-weight: 400;
	      width: 100%;
    font-size: 93.07px;
    color: #0f0b2b;
    text-transform: uppercase;
    letter-spacing: .26em;
    line-height: 100px;
    text-align: center;
    background: -webkit-gradient(linear, left top, right top, from(#c08d54), color-stop(70%, #e2b576));
    background: linear-gradient(to right, #c08d54 0%, #e2b576 70%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 75px;
}
</style>
<?php  } ?>
<div id="page-container" class="clearfix">
    
    <div class="main-content textmy">
	    
        <?php  if(is_page(253) || is_page(28)){ ?> <h1><?php the_title(); ?></h1> <?php }else{ ?> <p><?php the_title(); ?></p> <?php  } ?>
        
        <div class="vid-dropdown">
	        <div class="list-container">
		      	<p>categories</p>
	        </div>
	        <div class="arrow">
		        <img src="<?php echo get_template_directory_uri(); ?>/media/down-arrow.svg"/>
	        </div>
	        <div class="vid-list">

			        <?php
							$terms = get_terms( 'videos-categories' );
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
						    echo '<ul>';
							    foreach ( $terms as $term ) {
							        echo '<li id="' . $term->slug . '">' . $term->name . '</li>';
							    }
						    echo '</ul>';
							}
							?>

	        </div>
        </div> <!-- .vid-dropdown -->
        
        <div class="case-result-wrapper">
	        
		    	<?php $args = array('post_type' => 'Videos', 'posts_per_page' => -1, 'order' => 'desc'); ?>
					<?php $loop = new WP_Query($args); ?>
					<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
					  <?php $resultCategory = get_the_terms( $post->ID , 'videos-categories' ); ?>
					  <?php $attorneyTags = get_the_tags() ?>
					
							<div class="video-wrapper show <?php foreach ( $resultCategory as $term ) { echo $term->slug . ' '; } ?>">
								<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
<div style="height:100%;left:0;position:absolute;top:0;width:100%;">
<span style="position:relative">
<a href="//www.youtube-nocookie.com/embed/<?php the_field('video_code'); ?>?rel=0&showinfo=0" data-lity>
								<div class="thumbnail" style="background-image: url(<?php if( get_field('thumbnail')) { ?><?php the_field('thumbnail'); ?><?php } else { ?>https://img.youtube.com/vi/<?php the_field('video_code'); ?>/maxresdefault.jpg<?php } ?>)">
									<div class="color-overlay"></div>
									<div class="play-btn">
										<div class="arrow"></div>
									</div>
								</div>
								</a>
</span>
</div>
</div>
								<p class="description"><?php the_field('video_description'); ?></p>
							</div>
					
					<?php endwhile; ?>
					
					<?php else: ?>
					  <h1>No posts here!</h1>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
		    		        
        </div>
        
    </div>
    
</div>

<?php get_footer();?>
