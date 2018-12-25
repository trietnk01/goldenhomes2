<?php
/*
	Home template default
*/	
	get_header();
	global $zController;
	$productModel=$zController->getModel("/frontend","ProductModel");
	$source_banner=get_field('op_banner_repeat','option');			
	get_footer();
	?>