<!DOCTYPE html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mayorque</title>
	<style>
@import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500&display=swap');
	</style>
	<?php wp_head() ?>
    </head>
    <body>

	<div class="header-shadow" id="header">
	    <div id="header-wrapper" class="center">
		<img src="<?php echo get_template_directory_uri().'/assets/images/logo_home.png'  ?>" alt="">
		<div class="push"></div>
		<div class="toggler">
		    <div id="nav-icon">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		    </div>
		</div>
	    </div>
	</div>

	<div id="nav-layout" class="nav-close">
	    <div id="nav-menu" class="center">
		<a href="#portafolio">PORTAFOLIO</a> <br/>
		<a href="#nosotros">NOSOTROS</a> <br />
		<a href="#contacto">CONTACTO</a> <br/>
	    </div>
	</div>
