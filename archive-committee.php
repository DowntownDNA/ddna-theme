<?php get_header(); ?>

<?php if (get_field('committee_banner')) { ?>
	<?php $banner = get_field('committee_banner'); ?>
	<div class="banner">
		<img src="<?php echo $banner['url']; ?>" class="img-responsive">
	</div>
<?php } ?>

<div class="block">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-9 col-md-push-3 content">
				<h1>Committees</h1>
				<div class="row">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="col-xs-12 committee">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php if (get_field('members')) { ?>
								<?php $members = get_field('members'); ?>
								<p class="members"><strong>Members:</strong>
									<?php foreach ($members as $member) : ?>
										<span><?php echo $member->post_title; ?></span>
									<?php endforeach; ?>
								</p>
							<?php } ?>
							<hr>
							<?php the_content() ?>							
						</div>
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