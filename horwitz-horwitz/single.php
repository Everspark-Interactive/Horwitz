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
<div class="blog-banner">
    <p>blog</p>
	<a class="cta-button smooth-scroll" href="#footer"><span>Free Case Evaluation</span></a>
</div>
<?php endif; ?>

<div id="page-container" class="clearfix">
	
	<?php if ( get_field( 'disable_sidebar' ) ): else: ?>
    <div class="sidebar">
        <div class="sidebar-inner">
            <?php dynamic_sidebar( 'blog_sidebar' ); ?>
        </div>
    </div>
	<?php endif; ?>
	
    <div class="main-content<?php if ( get_field( 'disable_sidebar' ) ): ?> no-sidebar<?php else: endif;?>">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="post abc">
            <a class="post-title" href="<?php the_permalink();?>">
                <h1>
                    <?php the_title();?>
                </h1>
            </a>
            <p class="post-info">
                <?php the_category(',');?> -
                <?php the_time('F j, Y'); ?> by 
				<?php
    // Get the author's name
    $author_name = get_the_author_meta('display_name');
    // Get the URL of the author's posts archive page
    $author_posts_url = get_author_posts_url(get_the_author_meta('ID'));
    ?>
    <a href="<?php echo esc_url($author_posts_url); ?>" class="author"><?php echo esc_html($author_name); ?></a>
            </p>
            <?php the_content();?>
        </div>

        <?php endwhile; else : ?>
        <?php endif; ?>

    </div>
</div>

<?php get_footer();?>