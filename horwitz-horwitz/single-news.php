<?php get_header();?>

 <?php if ( get_post_type( get_the_ID() ) == 'post1' ) { ?>
 <style type="text/css">
 	@media screen and (min-width: 992px) {
 	.abc img{
 		float: right;
 		margin-bottom: 10px;
 		margin-left: 10px;
		margin-top: 15px;
 	}
 }
 </style>
<?php } ?>

<?php if ( get_field( 'disable_banner' ) ): else: ?>
<div class="blog-banner ahsancheck">
    <p>Illinois Accident News</p>
	<a class="cta-button smooth-scroll" href="#footer"><span>Free Case Evaluation</span></a>
</div>
<?php endif; ?>

<div id="page-container" class="clearfix">
	
	<?php if ( get_field( 'disable_sidebar' ) ): else: ?>
    <div class="sidebar">
        <div class="sidebar-inner">
			 <?php if(!wp_is_mobile()){?>
                 <div class="sidebarformp">
                <p class="form-title">Free case Evaluation</p>
                <p class="form-instructions">Fill out the form below to receive your free confidential consultation with an experienced injury attorney</p>
                <?php gravity_form( 3, false, false, false, '', true ); ?>
           </div>
           <?php  } ?>
            <?php //dynamic_sidebar( 'blog_sidebar' ); ?>
        </div>
    </div> 
	<?php endif; ?>
	
    <div class="main-content<?php if ( get_field( 'disable_sidebar' ) ): ?> no-sidebar<?php else: endif;?>">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="post abc">
            <a class="post-title" href="<?php the_permalink();?>">
<!-- 				<span class="pub"><?php //echo get_the_date( 'd M Y' );  ?></span> -->
                <h1>
                    <?php the_title();?>
                </h1>
            </a>
            <p class="post-info">
				<?php
				$categories = get_the_terms( get_the_id(), 'news-categories' );
                        
                            foreach($categories as $key => $category){
                                $term_meta = get_option( "news-categories$category->term_id" );
                             
                                ?>
                                
                                     <span><?php echo $category->name;?></span> -
                                <?php
                            }
                            ?>
                <?php //the_category(',');?> 
                <?php the_time('F j, Y'); ?>
            </p>
            <?php the_content();?>
        </div>

        <?php endwhile; else : ?>
        <?php endif; ?>

    </div>
</div>

<?php get_footer();?>