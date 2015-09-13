<?php get_header(); ?>

<div class="block">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-9 col-md-push-3 content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
			<div class="col-xs-12 col-md-3 col-md-pull-9 sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>