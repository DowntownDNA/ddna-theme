<?php get_header(); ?>

<div class="block">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-9 col-md-push-3 content">
				<h1>News</h1>
				<hr>
				<div <?php post_class(); ?>>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<p class="byline">Published: <?php the_date(); ?></p>
						<?php the_excerpt(); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-3 col-md-pull-9 sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>