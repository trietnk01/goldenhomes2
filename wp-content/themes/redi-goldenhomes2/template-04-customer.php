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
				<h2 class="san-pham-title"><?php echo get_field('op_partner_name','option'); ?></h2>
			</div>
		</div>
		<?php
		$source_partner=get_field('op_partner_rpt','option');
		$k=0; 
		foreach ($source_partner as $key => $value) { 			
			if($k%3==0){
				echo '<div class="row">';
			}			
			?>
			<div class="col-md-4">
				<div class="customer-item">
					<div class="customer-item-shadow">
						<div class="customer-item-outline">
							<a href="<?php echo @$value['op_partner_logo']; ?>" class="smlightbox">
								<div class="partner-img" style="background-image: url(<?php echo @$value['op_partner_logo']; ?>);"></div>
							</a>							
						</div>
					</div>
					<h3 class="customer-name">
						<?php echo @$value['op_partner_title']; ?>
					</h3>	
					<div class="customer-comment">
						“ <?php echo @$value['op_partner_message']; ?> ”
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