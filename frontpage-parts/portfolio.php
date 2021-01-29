<div id="portafolio">
    <div class="grid-container">

	<?php 
	$query = new WP_Query(array('post_type' => 'post' ));
	while($query->have_posts()): $query->the_post(); 
	?>

	<a href="<?php the_permalink()?>">
	    <div class="grid-post-wrapper">
		<div class="grid-post-info">
		    <div class="center">
			<h3><?php the_title() ?></h3>
			<hr>
			<p> <?php the_field('services') ?></p>
		    </div>
		</div>
		<div class="grid-post" style="background-image: url(<?= the_post_thumbnail_url()?>);">
		</div>
	    </div>
	</a>

	<?php endwhile; ?>

    </div>
</div>

