<?php get_header() ?>

<div id="main">
    <div class="post">

	<div class="post-nav row">
	    <a href="<?php echo get_permalink(get_previous_post()->ID) ?>">
		<img 
		    style="transform: rotate(180deg)" 
		    src="<?php echo get_template_directory_uri().'/assets/images/arrow.svg' ?>" 
		    alt="">
	    </a>
	    <a href="<?php echo get_permalink(get_next_post()->ID) ?>">
		<img 
		    src="<?php echo get_template_directory_uri().'/assets/images/arrow.svg' ?>" 
		    alt="">
	    </a>
	</div>

	<p><strong>PROYECTO: </strong><?php the_title() ?></p>
	<p><strong>CLIENTE: </strong><?php the_field('client') ?></p>
	<p><strong>A&Ntilde;O: </strong><?php the_field('year') ?></p>

	<div class="post-content">
	<?php the_content() ?>
	</div>
    </div>
</div>


<?php get_footer() ?>
