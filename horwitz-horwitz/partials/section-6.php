<section id="section-6">
	<div class="section-6-inner">
		<?php if( have_rows('section_6_case_results') ): ?>
		<?php while ( have_rows('section_6_case_results') ) : the_row(); ?>
							
			<a href="<?php the_sub_field('full_case_report_link'); ?>" class="cr-box">
				<div class="cr-box-overlay">
					<p class="read-more">read more</p>
				</div>
				<div>
				<p class="amount"><?php the_sub_field('amount'); ?></p>
					<div class="vert-rule"></div>
					<p class="case-type"><?php the_sub_field('type_of_case'); ?></p>
					<p class="case-description"><?php the_sub_field('case_description'); ?></p>
				</div>
			</a>
										
		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
	</div>
</section>