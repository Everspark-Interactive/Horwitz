<?php


get_header();

 ?>

<div class="blog-banner">
    <p>FAQs</p>
	<a class="cta-button smooth-scroll" href="#footer"><span>Free Case Evaluation</span></a>
</div>

<div id="page-container" class="clearfix">
     <div class="sidebar">
        <div class="sidebar-inner">
			  <?php if(!wp_is_mobile()){?>
                 <div class="sidebarformp">
                <p class="form-title">Free case Evaluation</p>
                <p class="form-instructions">Fill out the form below to receive your free confidential consultation with an experienced injury attorney</p>
                <?php gravity_form( 3, false, false, false, '', true ); ?>
           </div>
           <?php  } ?>
            <?php dynamic_sidebar( 'faq_sidebar' ); ?>
        </div>
    </div> 
    <div class="main-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="post">
            <a class="post-title" href="<?php the_permalink();?>">
				
                <h1>
                    <?php the_title();?>
                </h1>
            </a>
            <p class="post-info">
						<?php
				$categories = get_the_terms( get_the_id(), 'faq-categories' );
                        
                            foreach($categories as $key => $category){
                                $term_meta = get_option( "faq-categories$category->term_id" );
                                         ?>
				<span><?php echo $category->name;?></span> -
                                <?php
                            }
                            ?>
              
                <?php echo get_the_date( 'd M Y' );  ?>
            </p>
            <?php the_excerpt();?>
        </div>

        <?php endwhile; else : ?>
        <?php endif; ?>

        <?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>

    </div>
</div>

<?php get_footer();?>