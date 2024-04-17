<?php
/*
Template Name: About Us
*/
?>
<?php get_header();?>

<div class="about-banner">
	<div class="inner">
		<p>Horwitz Family Has Been Representing Illinois Injured Since 1924</p>
		<a class="gradient-hover smooth-scroll" href="#footer">
			<p class="button-label">free case evaluation</p>
			<div class="white-overlay"></div>
		</a>
	</div>
</div>

<div id="page-container" class="clearfix">
	
  <div class="main-content">
	  <div class="about-section-1">
		  <h1 class="page-title">
		  	<?php the_title();?>
		  </h1>
			<p class="firm">Horwitz, Horwitz & Associates</p>
			<div class="vert-rule"></div>
			<?php the_field('our_passion'); ?>
			
			<div class="result-wrap">
				<div class="result">
					<p class="amount">$1b</p>
					<div class="vert-rule"></div>
					<p class="type">money recovered</p>
				</div>
				<div class="result">
					<p class="amount">355</p>
					<div class="vert-rule"></div>
					<p class="type">years of combined experience</p>
				</div>
				<div class="result">
					<p class="amount">19</p>
					<div class="vert-rule"></div>
					<p class="type">attorneys</p>
				</div>
			</div>
			
	  </div>
	  <div class="about-section-2">
		  <object data="<?php echo get_template_directory_uri(); ?>/media/background_2.svg" type="image/svg+xml"></object>
		  <div class="brothers-image"></div>
		  <div class="inner">
			  <p class="brothers">The History Behind Horwitz Horwitz & Associates</p>
			  <div class="hr"></div>
			  <?php the_field('horwitz_brothers'); ?>
		  </div>
	  </div>
	  <div class="about-section-3">
		  <div class="inner">
			  <p class="title">Our team of 11 partners and 7 associates continue to expand the Horwitz, Horwitz & Associates legacy of successful litigation that few firms can claim.</p>
			  <div class="vert-rule"></div>
			  <div class="section-3-content">
				  <?php the_field('bottom_content'); ?>
			  </div>
		  </div>
	  </div>
  </div>
    
</div>

<?php get_footer();?>
