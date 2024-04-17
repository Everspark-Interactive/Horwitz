<?php get_header();?>

<div class="blog-banner ahsanarchivephp">
	       <?php
	if ($post->post_type == 'faqs') { ?>
			<h1 class="faq-cat faqcath1"><?php single_term_title(); ?></h1>
			<?php } else { ?>
    <p>archive</p>
	<?php } ?>
	<a class="cta-button smooth-scroll" href="#footer"><span>Free Case Evaluation</span></a>
</div>

<div id="page-container" class="clearfix">
    <div class="sidebar">
        <div class="sidebar-inner">
            <?php
	if ($post->post_type == 'faqs') {
			 dynamic_sidebar( 'faq_sidebar' );
			} else {
		dynamic_sidebar( 'blog_sidebar' ); 
	} ?>
        </div>
    </div>
    <div class="main-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="post">
            <a class="post-title" href="<?php the_permalink();?>">
                <h2 class="faqcath2">
                    <?php the_title();?>
                </h2>
            </a>
            <p class="post-info">
                <?php 
				if ($post->post_type == 'faqs') {
				$categories = get_the_terms( get_the_id(), 'faq-categories' );
                        
                            foreach($categories as $key => $category){
                                $term_meta = get_option( "faq-categories$category->term_id" );
                                         ?>
				<span><?php echo $category->name;?></span>
                                <?php       }
				} else {         
				the_category(',');
				} ?> -
                <?php the_time('F j, Y'); ?>
            </p>
            <?php the_excerpt();?>
        </div>

        <?php endwhile; else : ?>
        <?php endif; ?>

        <?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>

    </div>
</div>

<?php get_footer();?>