<?php
/*
Template Name: Case Results
*/
?>
<?php get_header();?>
<?php if(is_page(28)){ ?>
<style type="text/css">
  
.textmy h1 {
    font-family: "Old Standard TT", serif;
    font-weight: 400;
    font-size: 93.07px;
	width: 100%;
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
<div class="cr-modal">
	<div class="cr-modal-outer">
		<img class="modal-close" src="<?php echo get_template_directory_uri(); ?>/media/close.svg"/>
		<div class="cr-modal-inner"></div>
	</div>
</div>

<div id="page-container" class="clearfix">
    
    <div class="main-content textmy">
	    
        <?php  if(is_page(28)){ ?> <h1><?php the_title(); ?></h1> <?php }else{ ?> <p><?php the_title(); ?></p> <?php  } ?>
        
        <div class="pa-dropdown">
	        <div class="list-container">
		      	<p>case type</p>
	        </div>
	        <div class="arrow">
		        <img src="<?php echo get_template_directory_uri(); ?>/media/down-arrow.svg"/>
	        </div>
	        <div class="pa-list">

			        <?php
							$terms = get_terms( 'results-categories' );
							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
						    echo '<ul>';
							    foreach ( $terms as $term ) {
							        echo '<li id="' . $term->slug . '">' . $term->name . '</li>';
							    }
						    echo '</ul>';
							}
							?>

	        </div>
        </div> <!-- .pa-dropdown -->
        
        <div class="case-result-wrapper">
	        
		    	<?php $args = array('post_type' => 'Results', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC'); ?>
					<?php $loop = new WP_Query($args); ?>
					<?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
					  <?php $resultCategory = get_the_terms( $post->ID , 'results-categories' ); ?>
					  <?php $attorneyTags = get_the_tags() ?>
					
					  <div class="pa-result show <?php foreach ( $resultCategory as $term ) { echo $term->slug . ' '; } ?>">
							
							<p class="amount"><?php the_field('amount'); ?></p>
							<div class="vert-rule"></div>
							<p class="type-of-case"><?php the_field('type_of_case'); ?></p>
							<p class="case-description"><?php the_field('case_details'); ?></p>
							<a href="<?php the_permalink(); ?>">read more</a>
							
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