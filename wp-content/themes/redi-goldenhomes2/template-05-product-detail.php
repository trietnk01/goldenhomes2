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
							<div class="lienhe">
								<div class="product-size">
									<span>Size:</span>
									<span>1m6x2m</span>
								</div>
								<div class="lienhebtn">
									<a href="javascript:void(0);">Liên hệ</a>
								</div>	
								<div class="clr"></div>							
							</div>
							<div class="giam-gia">
								<div>Giảm</div>
								<div>20%</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="product-tab">
							<div class="tab">
								<button class="tablinks h-title" onclick="openCity(event, 'chi-tiet-san-pham')">Chi tiết sản phẩm</button>
								<button class="tablinks h-title" onclick="openCity(event, 'bao-hanh')">Bảo hành</button>               								
							</div>
							<div>
								<div id="chi-tiet-san-pham" class="tabcontent">
									<div class="tab-chitietsanpham">
										<p>
											Giường ngủ kiểu Nhật  sử dụng nguyên liệu mdf nhập khẩu
											Với nguyên liệu nhập khẩu từ Đức, cho độ bền lên đến 20 năm sử dụng.
											Không cong vênh và mối mọt.
											Không phát ra tiếng động trong quá trình sử dụng.

											Thiết kế của giường hướng đến sự đơn giản và hiện đại
											Mẫu giường ngủ GN003 là mẫu giường mang phong cách thiết kế giường ngủ Nhật Bản, mẫu này tương đối giống với mẫu giường ngủ kiểu Nhật GN214, nhưng được tối giản tuyệt đối từ đầu giường, vai và đuôi giường.
											Thiết kế đơn giản là tiêu chí của phong cách thiết hiện đại hiện nay.
											Màu sắc nâu cánh gián rất dễ dàng phối hợp cùng các sản phẩm nội thất và không gian phòng ngủ bất kỳ.
											​Kích thước phủ bì của giường 1m6 x 2m là 1m92 x 2m16, phù hợp với những gian phòng ngủ có diện tích vừa phải hoặc lớn... Không phù hợp với phòng ngủ có diện tích nhỏ.	
										</p>
										<p>Golden Homes là 1 công ty nội thất có tuổi đời hơn 5 năm kinh nghiệm, phát triển với đội ngũ hơn 50 nhân sự và sẽ còn nhiều hơn thế, Hiện là thương hiệu thiết kế kiến trúc, nội thất nổi tiếng tại Việt Nam, Với sự nỗ lực trong suốt nhiều năm qua, Golden Homes  mong muốn mang lại cho khách hàng những sản phẩm thiết kế tốt nhất và biến những sản phẩm thiết kế đó trở thành hiện thực. Golden Homes  tin rằng với khát vọng đầy tính nhân văn của mình, sẽ tạo được nhiều giá trị thích dụng và bền vững cho toàn xã hội

											Sau khi hoàn thành bản vẽ, Golden Homes tiến hành lập dự toán thi công. Để đảm bảo chi phí thi công được kiểm soát chặt chẽ, Golden Homes tiến hành đề xuất vật liệu, màu sắc, chủng loại phụ kiện, vải rèm, giấy dán tường,.... và bắt đầu vào giai đoạn thi công ngoài công trường. Golden Homes luôn có giám sát thường trực có mặt tại  công trình, để kiểm tra chặt chẽ quy trình và các vướng mắc
										</p>
									</div>
								</div>
								<div id="bao-hanh" class="tabcontent">
									<div class="tab-chitietsanpham">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
									</div>
								</div>          
							</div>														                                            
						</div>   
						<div class="product-related">
								Sản phẩm liên quan
						</div>		
						<div class="clr"></div>		
						<div class="splq-line"></div>
						<div class="product-related-carousel">
							<div class="owl_carousel_product_related owl-carousel owl-theme owl-loaded">		
								<?php 
								for($i=0;$i<99;$i++){
									?>
									<div class="item">
										<div class="wood_box_wp">
											<div class="wood_img">
												<a href="<?php echo site_url( 'chi-tiet-san-pham',  null ); ?>" title="tiêu đề tên">							
													<div class="do_go_img" style="background-image: url(<?php echo P_IMG.'/img_3.png'; ?>);"></div>						
													<div class="overlay">Chi tiết</div>
												</a>
											</div>
											<h3 class="h3_wood"><a href="<?php echo site_url( 'chi-tiet-san-pham',  null ); ?>" title="tiêu đề tên">Tủ gỗ #01</a></h3>
											<div class="service_line_wood"></div>					
										</div>		
									</div>
									<?php
								}
								?>																								
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