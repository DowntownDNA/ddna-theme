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
						<div class="col-xs-12 col-md-4 pull-right clearfix">
							<div class="well">
								<?php if (get_field('members')) { ?>
									<?php $members = get_field('members'); ?>
									<p class="representatives"><strong>Representative(s):</strong></p>
									<ul>
										<?php foreach ($members as $member) : ?>
											<li><?php echo $member->post_title; ?></li>
										<?php endforeach; ?>
									</ul>
									<hr>
								<?php } ?>
								<?php if (get_field('buildings')) { ?>
									<?php $buildings = get_field('buildings'); ?>
									<?php if (get_field('buildings')) { ?>
										<p><strong>Buildings</strong></p>
										<ul>
										<?php foreach ($buildings as $building) : ?>
											<li><a href="<?php echo get_permalink($building->ID); ?>"><?php echo $building->post_title; ?></a></li>
										<?php endforeach; ?>
										</ul>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>
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