<?php
/*
Template name: Template khách hàng
Template Post Type: post, page
*/
get_header();
global $zController;
$productModel=$zController->getModel("/frontend","ProductModel");
?>
<div class="box-customer">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="san-pham-title">Khách hàng</h2>
			</div>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>