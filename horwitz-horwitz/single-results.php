<?php get_header();?>

<div class="results-banner">
    <p>
        <?php the_field('banner_amount'); ?>
    </p>
</div>

<div id="page-container" class="clearfix">
    <div class="sidebar">
        <div class="sidebar-inner">
					<p class="form-title">Free case Evaluation</p>
					<p class="form-instructions">Fill out the form below to receive your free confidential consultation with an experienced injury attorney</p>
					<?php gravity_form( 3, false, false, false, '', true ); ?>
        </div>
        <div class="details">
	        <p class="title">details</p>
	        <p><?php the_field('case_details'); ?></p>
        </div>
        <div class="categories">
	        <p class="title">categories</p>
	        
					<?php
						
						$post = get_the_ID();
						$terms = wp_get_post_terms( $post, 'results-categories');
						if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
					    echo '<ul>';
						    foreach ( $terms as $term ) {
						      echo '<li id="' . $term->slug . '">' . $term->name . '</li>';
						    }
					    echo '</ul>';
						}
						
					?>
					
        </div>
    </div>
    <div class="main-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="case-result">

            <h1>
                <?php the_title();?>
            </h1>
            
            <hr/>

            <?php the_content();?>
        </div>

        <?php endwhile; else : ?>
        <?php endif; ?>

    </div>
</div>

<?php get_footer();?>