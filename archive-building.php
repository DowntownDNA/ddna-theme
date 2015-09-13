<?php get_header(); ?>
<?php if (get_field('building_banner')) { ?>
	<?php $banner = get_field('committee_banner'); ?>
	<div class="banner">
		<img src="<?php echo $banner['url']; ?>" class="img-responsive">
	</div>
<?php } ?>

<div class="block">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 content">
				<h1>Buildings</h1>
				<?php $buildings = $wp_query; ?>
				<?php include(locate_template('partials/table-buildings.php')); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>