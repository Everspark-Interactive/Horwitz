<?php get_header();?>

<div class="blog-banner ahsanhomephp">
    <h1 class="blogh1heading">blog</h1>
	<a class="cta-button smooth-scroll" href="#footer"><span>Free Case Evaluation</span></a>
</div>

<div id="page-container" class="clearfix">
    <div class="sidebar">
        <div class="sidebar-inner">
            <?php dynamic_sidebar( 'blog_sidebar' ); ?>
        </div>
    </div>
    <div class="main-content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="post">
            <a class="post-title" href="<?php the_permalink();?>">
				
                <h2 class="blogh2bheads">
                    <?php the_title();?>
                </h2>
            </a>
            <p class="post-info">
                <?php the_category(',');?> -
                <?php echo get_the_date( 'd M Y' );  ?> by 
				<?php
    // Get the author's name
    $author_name = get_the_author_meta('display_name');
    // Get the URL of the author's posts archive page
    $author_posts_url = get_author_posts_url(get_the_author_meta('ID'));
    ?>
    <a href="<?php echo esc_url($author_posts_url); ?>" class="author"><?php echo esc_html($author_name); ?></a>
            </p>
            <?php the_excerpt();?>
        </div>

        <?php endwhile; else : ?>
        <?php endif; ?>

        <?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>

    </div>
</div>

<?php get_footer();?>