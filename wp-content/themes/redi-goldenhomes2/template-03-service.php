<?php
/*
Template name: Template dịch vụ
Template Post Type: post, page
*/
get_header();
global $zController;
$productModel=$zController->getModel("/frontend","ProductModel");
?>
<div class="box-service">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="san-pham-title">Dịch vụ</h2>
				<div class="service-bol-1">
					<div class="bol-service-left" style="background-image: url('<?php echo P_IMG.'/bol-service-1.png'; ?>');">
						<div class="outline-box">
							<div class="hinh-binh-hanh">
								<div class="binh-hinh-hanh">
									<h4 class="hanh-binh-title">Thiết kế nội thất</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="bol-service-right">
						<h3 class="service-title"><a href="javascript:void(0);">Thiết kế nội thất</a></h3>
						<div class="service-excerpt">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet ultrices ultricies. Phasellus nec ex sit amet nibh fermentum gravida. Mauris pretium id tortor nec eleifend. Sed fringilla libero sit amet lorem aliquet mollis. Integer vitae lacinia lectus. Maecenas commodo risus eu tellus aliquet bibendum. Cras eget convallis mauris, ut condimentum dolor. 
						</div>
						<div class="service-readmore">
							<a href="javascript:void(0)">Xem chi tiết</a>
						</div>
					</div>
					<div class="clr"></div>
				</div>
				<div class="service-bol-2">
					<div class="bol-service-left">
						<h3 class="service-title"><a href="javascript:void(0);">Thi công nội thất</a></h3>
						<div class="service-excerpt">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum laoreet ultrices ultricies. Phasellus nec ex sit amet nibh fermentum gravida. Mauris pretium id tortor nec eleifend. Sed fringilla libero sit amet lorem aliquet mollis. Integer vitae lacinia lectus. Maecenas commodo risus eu tellus aliquet bibendum. Cras eget convallis mauris, ut condimentum dolor. 
						</div>
						<div class="service-readmore">
							<a href="javascript:void(0)">Xem chi tiết</a>
						</div>						
					</div>
					<div class="bol-service-right"  style="background-image: url('<?php echo P_IMG.'/bol-service-1.png'; ?>');">
						<div class="outline-box">
							<div class="hinh-binh-hanh">
								<div class="binh-hinh-hanh">
									<h4 class="hanh-binh-title">Thi công nội thất</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="clr"></div>
				</div>						
			</div>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>