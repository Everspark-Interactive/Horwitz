<?php
/*
Template Name: Contact
*/
?>
<?php get_header();?>

<div id="page-container" class="clearfix">
    
    <div class="main-content">
        <div class="left">
	        <h1><?php the_title(); ?></h1>
	        <div class="locations">
		        
		        <div class="location chicago">
			        <p class="location-title">Chicago</p>
			        <p class="address"><?php the_field('chicago_address', 'options'); ?></p>
			        <a class="get-directions" href="<?php the_field('chicago_google_maps_url', 'options'); ?>" target="_blank">get directions</a>
			        
			        <a class="phone call" href="tel:+1<?php echo preg_replace("/[^0-9]/",'', get_field('chicago_phone_number', 'options')); ?>"><span>phone</span> <?php the_field('chicago_phone_number','options'); ?></a>
			        <a class="phone fax" href="tel:+1<?php echo preg_replace("/[^0-9]/",'', get_field('chicago_fax_number', 'options')); ?>"><span>fax</span> <?php the_field('chicago_fax_number','options'); ?></a>
			        
			        
		        </div>
		        
		        <div class="location joliet">
			        <p class="location-title">Joliet</p>
			        <p class="address"><?php the_field('joliet_address', 'options'); ?></p>
			        <a class="get-directions" href="<?php the_field('joliet_google_maps_url', 'options'); ?>" target="_blank">get directions</a>
			        
			        <a class="phone call" href="tel:+1<?php echo preg_replace("/[^0-9]/",'', get_field('joliet_phone_number', 'options')); ?>"><span>phone</span> <?php the_field('joliet_phone_number','options'); ?></a>
			        <a class="phone fax" href="tel:+1<?php echo preg_replace("/[^0-9]/",'', get_field('joliet_fax_number', 'options')); ?>"><span>fax</span> <?php the_field('joliet_fax_number','options'); ?></a>
		        </div>
				<div class="location aurora">
			        <p class="location-title">Aurora</p>
			        <p class="address"><?php the_field('aurora_address', 'options'); ?></p>
			        <a class="get-directions" href="<?php the_field('aurora_google_maps_url', 'options'); ?>" target="_blank">get directions</a>
					<a class="phone call" href="tel:+1<?php echo preg_replace("/[^0-9]/",'', get_field('aurora_phone_number', 'options')); ?>"><span>phone</span> <?php the_field('aurora_phone_number','options'); ?></a>
					 <a class="phone fax" href="tel:+1<?php echo preg_replace("/[^0-9]/",'', get_field('aurora_fax_number', 'options')); ?>"><span>fax</span> <?php the_field('aurora_fax_number','options'); ?></a>
			        
			        
		        </div>
		        
	        </div>
	        
	        <div class="sm-wrapper">
		        <a href="<?php the_field('facebook_url', 'options'); ?>" target="_blank">Facebook</a>
		        <a href="<?php the_field('google_url', 'options'); ?>" target="_blank">Google +</a>
		        <a href="<?php the_field('twitter_url', 'options'); ?>" target="_blank">Twitter</a>
		        <a href="<?php the_field('linked_in_url', 'options'); ?>" target="_blank">Linked In</a>
		        <a href="<?php the_field('youtube_url', 'options'); ?>" target="_blank">Youtube</a>
	        </div>
	        
        </div>
        <div class="right"></div>
    </div>
    
</div>

<?php get_footer();?>