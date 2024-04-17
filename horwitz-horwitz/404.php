<?php get_header();?>


<div id="page-container" class="clearfix">
    <div class="main-content">
        <div class="inner">
            <p class="error-404">404</p>
            <div class="vert-rule"></div>
            <p class="title">page not found</p>
            <p>The page you were looking for appears to have been moved, deleted or does not exist. You could <a class="go-back" onclick="history.back();" href="#">go back</a> to where you were or head straight to our <a href="<?php echo site_url();?>">home page</a></p>
        </div>
    </div>
</div>


<?php get_footer();?>