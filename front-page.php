<?php get_header() ?>

<div id="nav-layout" class="nav-close">
    <div id="nav-menu" class="center">
	<a href="#portafolio">PORTAFOLIO</a> <br/>
	<a href="#nosotros">NOSOTROS</a> <br />
	<a href="#contacto">CONTACTO</a> <br/>
    </div>
</div>

<div id="main">

<?php 
include(__DIR__.'/frontpage-parts/home_text.php');
include(__DIR__.'/frontpage-parts/portfolio.php');
include(__DIR__.'/frontpage-parts/nosotros.php');
?>

</div>

<?php
include(__DIR__.'/frontpage-parts/contacto.php');
?>

<?php get_footer() ?>
