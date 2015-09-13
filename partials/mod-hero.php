<?php $module = get_module_by_slug("hero"); ?>
<?php $hero_bg = get_field("hero_bg", $module->ID, OBJECT); ?>
<?php $bg = $hero_bg['sizes']['full-width']; ?>
<?php $hero_fg = get_field("hero_fg", $module->ID, OBJECT); ?>
<?php $fg = $hero_fg['sizes']['500x500']; ?>

<div id="module-hero" style="background-image: url('<?php echo $bg; ?>');" >
	<div class="container">
		<div class="row">
			<div class="col-xs-12 content">
				<img src="<?php echo $fg; ?>" class="img-responsive" />
			</div>
		</div>
	</div>
</div>