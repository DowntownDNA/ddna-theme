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
					<div class="row-fluid">
						<div class="col-xs-12 col-md-4 pull-right">
							<div class="well">
								<?php if (get_field('representative')) { ?>
									<?php $reps = get_field('representative'); ?>
									<p class="representative"><strong>DDNA Representative</strong></p>
									<?php foreach ($reps as $rep) : ?>
										<span><?php echo $rep->post_title; ?></span>
									<?php endforeach; ?>
								<?php } ?>
								<?php if (get_field('address')) { ?>
									<hr>
									<p><strong>Address</strong></p>
									<address><?php the_field('address'); ?></address>
								<?php } ?>
								<?php if (get_field('units')) { ?>
									<hr>
									<p><strong>Units</strong> <?php the_field('units'); ?></p>
								<?php } ?>
								<?php if (get_field('wikipedia')) { ?>
									<hr>
									<a href="<?php the_field('wikipedia'); ?>">Wikipedia</a>
								<?php } ?>
							</div>
						</div>
						<?php the_content(); ?>
					</div>
				<?php endwhile; endif; ?>
			</div>
			<div class="col-xs-12 col-md-3 col-md-pull-9 sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>