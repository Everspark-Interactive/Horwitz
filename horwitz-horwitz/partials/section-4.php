<section id="section-4" class="delay-load">
	<div class="section-4-inner">
		<div class="top">
			<p class="headline">over <span>350</span> years of experience</p>
			<a class="gradient-hover" href="our-attorneys">
				<p class="button-label">meet the team</p>
				<div class="white-overlay"></div>
			</a>
		</div>
		<div class="awards">
			<?php if( have_rows('awards_slider') ): ?>
			<?php while ( have_rows('awards_slider') ) : the_row(); ?>
								
				<div class="award">
					<img src="" data-src="<?php the_sub_field('award'); ?>"/>
				</div>
											
			<?php endwhile; ?>
			<?php else : ?>
			<?php endif; ?>
		</div>
	</div>
</section>