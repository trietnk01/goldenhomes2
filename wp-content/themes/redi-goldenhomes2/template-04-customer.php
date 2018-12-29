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
		<?php
		$k=0; 
		for ($i=1; $i <=6 ; $i++) { 
			if($k%3==0){
				echo '<div class="row">';
			}			
			?>
			<div class="col-md-4">
				<div class="customer-item">
					<div class="customer-item-shadow">
						<div class="customer-item-outline">
							<a href="javascript:void(0);">
								<div class="partner-img" style="background-image: url(<?php echo P_IMG.'/logo-customer-'.$i.'.png'; ?>);"></div>
							</a>							
						</div>
					</div>
					<h3 class="customer-name">
						Gem center
					</h3>	
					<div class="customer-comment">
						“ Pellentesque iaculis eget orci eu laoreet. In et imperdiet lorem. Pellentesque facilisis lobortis consectetur. Nam eget pulvinar ”
					</div>				
				</div>
			</div>			
			<?php
			$k++;
			if($k%3==0 || $k==6){
				echo "</div>";
			}
		}
		?>		
	</div>
</div>
<?php
get_footer(); 
?>