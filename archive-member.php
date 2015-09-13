<?php get_header(); ?>

<?php if (get_field('member_banner')) { ?>
	<?php $banner = get_field('member_banner'); ?>
	<div class="banner">
		<img src="<?php echo $banner['url']; ?>" class="img-responsive">
	</div>
<?php } ?>

<div class="block">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-9 col-md-push-3 content">
				<h1>Members</h1>
				<div class="row">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="col-xs-12 col-sm-6 col-md-3 member">
							<a href="<?php the_permalink(); ?>">
								<?php if ( has_post_thumbnail() ) {
									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '300x300' ); 
									if ($image) {
										echo '<img src="' . $image[0] . '" class="img-responsive" />';
									}
								} else {
									echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/library/images/blank-person.png" class="img-responsive" />';
								} ?>
								<h4><?php the_title(); ?></h4>
							</a>
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