<?php if ($buildings->have_posts()) { ?>
	<table id="building_table" class="display">
		<thead>
			<tr>
				<th>Building Name</th>
				<th>Units</th>
				<th>Website</th>
				<th>Phone Number</th>
				<th>District</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Building Name</th>
				<th>Units</th>
				<th>Website</th>
				<th>Phone Number</th>
				<th>District</th>
			</tr>
		</tfoot>
		<tbody>
			<?php while (have_posts()) : the_post(); ?>
				<tr>
					<?php $district = get_posts(array(
						'post_type' => 'district',
						'meta_query' => array(
							array(
								'key' => 'buildings', // name of custom field
								'value' => '"' . get_the_ID() . '"', // matches exaclty "123", not just 123. This prevents a match for "1234"
								'compare' => 'LIKE'
							)
						)
					)); ?>
					<td><a href="<?php the_permalink();?>"><?php the_title(); ?></td>
					<td><?php the_field('units'); ?></td>
					<td><?php the_field('website'); ?></td>
					<td><?php the_field('phone'); ?></td>
					<td>
						<?php if ($district) { ?>
								<?php foreach ($district as $dist) : ?>
									<span><a href="<?php echo get_permalink($dist->ID); ?>"><?php echo $dist->post_title; ?></a></span>
								<?php endforeach; ?>
						<?php } ?>
					</td>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
<?php } ?>