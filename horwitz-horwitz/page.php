<?php get_header();?>

<div id="page-container" class="clearfix testesi">
    <?php if ( get_field( 'disable_sidebar' ) ): else: ?>
    <div class="sidebar">
        <div class="sidebar-inner">
            <?php if(!wp_is_mobile()){?>
            <?php if($post->post_parent==325055 || is_page(array(325055,2882,327464,328076,328089,328087,328082,328085,328079,328112,328115,328118,326675,3206,327384,326681,327385,326677,327386,327382,326679,322318,323562,2966,2950,328556,328560,328550,328147,328796,329073))){?>
            <div class="sidebarformp">
                <p class="form-title">Free case Evaluation</p>
                <p class="form-instructions">Fill out the form below to receive your free confidential consultation with an experienced injury attorney</p>
                <?php gravity_form( 3, false, false, false, '', true ); ?>
           </div>
			
           <?php } } ?>
            <?php 
			if(is_page(3423)){
				dynamic_sidebar( 'faq_sidebar' );
			}
			else{
				dynamic_sidebar( 'sidebar' );
			}
			 ?>
        </div>
    </div>
    <?php endif; ?>
    
    <div class="main-content<?php if ( get_field( 'disable_sidebar' ) ): ?> no-sidebar<?php else: endif;?>">
        <p>
			<?php  if (is_page( array( 322296, 2864, 2878, 2875, 327849,2909, 322294, 324240, 322281, 2941, 2882, 322288, 322276, 322290, 2889, 2886, 322274, 2893, 322286, 322344, 327681, 2966, 322348, 322326, 2960, 2936, 16157, 325176, 2931, 2950, 2954, 322350, 2318, 323562, 2963, 2904, 2945, 2914, 2923, 2927, 2919, 327765, 2640, 322314, 322302, 322304, 322306, 322312, 322316, 322318, 2297, 322284, 325055, 328089, 328087, 328085, 328082, 328079, 328076,328112,328115,328118,326675,3206,327384,326681,327385,326677,327386,327382,326679,328556,328560)) && function_exists('yoast_breadcrumb')) { 
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' ); } 
			?>
		</p>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

       <!-- <h1 class="page-title">
            <?php the_title();?>
        </h1> -->
         <?php if(wp_is_mobile()){?>
    <?php if($post->post_parent==325055 || is_page(array(325055,2882,327464))){?>
            <div class="sidebarformp">
                <p class="form-title">Free case Evaluation</p>
                <p class="form-instructions">Fill out the form below to receive your free confidential consultation with an experienced injury attorney</p>
                <?php gravity_form( 3, false, false, false, '', true ); ?>
           </div>
        <?php } } ?>
        
        <?php the_content();?>

        <?php endwhile; else : ?>
        <p>
            <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
        </p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer();?>