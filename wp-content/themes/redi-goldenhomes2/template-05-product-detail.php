<?php
/*
Template name: Template sản phẩm chi tiết
Template Post Type: post, page
*/
get_header();
global $zController;
$productModel=$zController->getModel("/frontend","ProductModel");
?>
<div class="box-product-detail">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">	
				<div class="row">
					<div class="col-lg-6">
						<div class="box_sp_img">
							<div class="box_img_w">
								<a href="<?php echo P_IMG.'/product-detail-1.png'; ?>" class="smlightbox">
									<div class="img-detail" style="background-image: url(<?php echo P_IMG.'/product-detail-1.png'; ?>);"></div>
								</a>
							</div>
							<div class="box-ca">
								<div class="owl_carousel_product_detail owl-carousel owl-theme owl-loaded">		
									<?php 
									for($i=0;$i<9;$i++){
										?>
										<div class="item">
											<a href="javascript:void(0);" onclick="changeImg('<?php echo P_IMG.'/img_3.png'; ?>','tenhinh');">
												<div style="background-image: url(<?php echo P_IMG.'/img_3.png'; ?>);"></div>
											</a>
										</div>
										<?php
									}
									?>																								
								</div>							
							</div>								
						</div>
					</div>
					<div class="col-lg-6">
						<div class="product-info-box">
							<h2 class="info-product-title">Giường gỗ #42</h2>
							<div class="sao-danh-gia">
								<?php 
								for ($i=0; $i < 4; $i++) { 
									?>
									<div class="item-ngoi-sao" >
										<div style="background-image: url(<?php echo P_IMG.'/sao-vang.png'; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (17 / 15))"></div>
									</div>
									<?php
								}
								?>	
								<div class="item-ngoi-sao" >
										<div style="background-image: url(<?php echo P_IMG.'/sao-xam.png'; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / (17 / 15))"></div>
								</div>
								<div class="clr"></div>							
							</div>
							<div class="ma-hang">
								<span class="mahang">Mã hàng:</span>
								<span class="mhdynamic">GN003</span>
							</div>
							<div class="ma-hang">
								<span class="mahang">Lượt xem:</span>
								<span class="mhdynamic">206750</span>
							</div>
							<div class="chat-lieu">
								<span>Chất liệu:</span>
								<span>MDF cao cấp</span>
							</div>
							<div class="product-excerpt">
								Giường kiểu Nhật GN003 được làm bằng gỗ MDF veneer xoan đào nhập khẩu từ Đức cao cấp. Sản phẩm bảo hành 01 năm. Có 2 màu nâu đen và vàng xoan đào.
							</div>
							<div class="hidro-share">
								<div class="rapidshare">                                            
									<div class="facebook_button">
										<div class="fb-share-button" data-href="https://vitoen.com/thang-nhom-chu-a-han-quoc-poongsan-oa-8.html" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
									</div>       									
									<div class="category_twitter_sg"><a href="https://vitoen.com/thang-nhom-chu-a-han-quoc-poongsan-oa-8.html" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
									<div class="category_linkedin_sg">
										<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
										<script type="IN/Share" data-url="https://vitoen.com/thang-nhom-chu-a-han-quoc-poongsan-oa-8.html"></script>
									</div>
									<div class="category_g_plus_sg">
										<div class="g-plus" data-action="share" data-annotation="none" data-height="24" data-href="https://vitoen.com/thang-nhom-chu-a-han-quoc-poongsan-oa-8.html"></div>
									</div>
									<div class="clr"></div>
								</div>  
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">		
			<?php include get_template_directory() . "/block/block-product-detail.php"; ?>					
			</div>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>