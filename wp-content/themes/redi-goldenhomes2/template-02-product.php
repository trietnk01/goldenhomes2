<?php
/*
Template name: Template sản phẩm
Template Post Type: post, page
*/
get_header();
global $zController;
$productModel=$zController->getModel("/frontend","ProductModel");
echo "<pre>".print_r(__FILE__,true)."</pre>";
get_footer(); 
?>