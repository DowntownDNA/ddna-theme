<?php get_header(); ?>

<?php if (get_field('banner')) { ?>
	<?php $banner = get_field('banner'); ?>
	<div class="banner">
		<img src="<?php echo $banner['url']; ?>" class="img-responsive">
	</div>
<?php } ?>

<div class="block">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-9 col-md-push-3 content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<h3>Contact the Committee</h3>
					<?php gravity_form(2, false, false, false, '', false); ?>
				<?php endwhile; endif; ?>
			</div>
			<div class="col-xs-12 col-md-3 col-md-pull-9 sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>