<?php
/*
Template name: Template sản phẩm
Template Post Type: post, page
*/
get_header();
global $zController;
$productModel=$zController->getModel("/frontend","ProductModel");
?>
<div class="box-product">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="san-pham-title">Sản phẩm</h2>
				<div class="lst-category-wrapper">
					<ul class="category-lst-title">
						<li class="category-title"><a href="javascript:void(0);">Tất cả</a></li>
						<li class="category-title"><a href="javascript:void(0);">Đồ gỗ</a></li>
						<li class="category-title"><a href="javascript:void(0);">Rèm cửa</a></li>
						<li class="category-title"><a href="javascript:void(0);">Giấy dán tường</a></li>
						<li class="category-title"><a href="javascript:void(0);">Dàn phơi thông minh</a></li>										
					</ul>
					<div class="clr"></div>
				</div>								
			</div>
		</div>
		<?php 
		$k=0;
		for ($i=1; $i <= 9; $i++) { 
			if($k%3==0){
				echo '<div class="row">';
			}
			?>
			<div class="col-sm-4">
				<div class="wood_box_wp">
					<div class="wood_img">
						<a href="javascript:void(0)" title="tiêu đề tên">							
							<div class="do_go_img" style="background-image: url(<?php echo P_IMG.'/img_3.png'; ?>);"></div>						
							<div class="overlay">Chi tiết</div>
						</a>
					</div>
					<h3 class="h3_wood"><a href="javascript:void(0);" title="tiêu đề tên">Tủ gỗ #01</a></h3>
					<div class="service_line_wood"></div>					
				</div>					
			</div>
			<?php
			$k++;
			if($k%3==0 || $k==9){
				echo '</div>';
			}
		}
		?>		
	</div>	
</div>
<?php
get_footer(); 
?>