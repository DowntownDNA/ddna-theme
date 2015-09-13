<?php $module = get_module_by_slug('districts') ?>

<div id="module-districts">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8 stats bigtext">
				<div><?php the_field("text_1", $module->ID); ?></div> 
				<div><?php the_field("text_2", $module->ID); ?></div> 
				<div><?php the_field("text_3", $module->ID); ?></div> 
				<div><?php the_field("text_4", $module->ID); ?></div> 
				<div><?php the_field("text_5", $module->ID); ?></div> 
			</div>
			<div class="col-xs-12 col-md-4 districts-list">
				<?php $districts = get_districts(); ?>
				<?php if ($districts->have_posts() ) : ?>
					<ul>
						<?php while ( $districts->have_posts() ) : $districts->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
							</li>
						<?php endwhile; ?>
					</ul>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>