<?php
/*
	Home template default
*/	
	get_header();
	global $zController;
	$productModel=$zController->getModel("/frontend","ProductModel");
	$source_banner=get_field('op_banner_repeat','option');		
	?>
	<h1 style="display: none;"><?php echo get_bloginfo( 'name'); ?></h1>
	<div class="banner_slideshow">
		<div class="owl_carousel_banner owl-carousel owl-theme owl-loaded">		
			<?php 
			foreach ($source_banner as $key => $value) {
				?>
				<div class="item"><img src="<?php echo @$value["op_banner_repeat_img"]; ?>" alt="tên hình"></div>
				<?php
			}
			?>								
		</div>		
	</div>
	<div class="hr_slideshow"></div>
	<div class="bg_ck_mp_tc">		
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="ck_wrapper">
						<div class="ck_mp_tc_left"><img src="<?php echo P_IMG.'/icon-camket.png'; ?>" alt="tên hình"></div>
						<div class="ck_mp_tc_right">Cam kết 100% gỗ thật</div>
						<div class="clr"></div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="mp_wrapper">
						<div class="ck_mp_tc_left"><img src="<?php echo P_IMG.'/icon-mien-phi-thiet-ke-tu-bep.png'; ?>" alt="tên hình"></div>
						<div class="ck_mp_tc_right">Miễn phí thiết kế tủ bếp</div>
						<div class="clr"></div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="tc_wrapper">
						<div class="ck_mp_tc_left"><img src="<?php echo P_IMG.'/icon-thi-cong.png'; ?>" alt="tên hình"></div>
						<div class="ck_mp_tc_right">Thi công đúng tiến độ</div>
						<div class="clr"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-ck-mp-tc-tablet">
		<div class="ck_wrapper">
			<div class="ck_mp_tc_left"><img src="<?php echo P_IMG.'/icon-camket.png'; ?>" alt="tên hình"></div>
			<div class="ck_mp_tc_right">Cam kết 100% gỗ thật</div>
			<div class="clr"></div>
		</div>
		<div class="mp-tc-box">
			<div class="mp-box">
				<div class="mp_wrapper">
					<div class="ck_mp_tc_left"><img src="<?php echo P_IMG.'/icon-mien-phi-thiet-ke-tu-bep.png'; ?>" alt="tên hình"></div>
					<div class="ck_mp_tc_right">Miễn phí thiết kế tủ bếp</div>
					<div class="clr"></div>
				</div>
			</div>
			<div class="tc-box">
				<div class="tc_wrapper">
					<div class="ck_mp_tc_left"><img src="<?php echo P_IMG.'/icon-thi-cong.png'; ?>" alt="tên hình"></div>
					<div class="ck_mp_tc_right">Thi công đúng tiến độ</div>
					<div class="clr"></div>
				</div>
			</div>
			<div class="clr"></div>
		</div>	
	</div>
	<div class="thiet-ke-noi-that-box">		
		<h3 class="box-info-title"><a href="javascript:void(0);">Thiết kế nội thất</a></h3>
		<div class="box-info-excerpt">
			Chúng tôi chuyên sản xuất sản phẩm tủ bếp 100% gỗ công nghiệp An Cường như tủ bếp Acrylic, tủ bếp Laminate, tủ bếp Melamine, tủ bếp MDF, tủ bếp MFC.
		</div>
		<div class="box-info-readmore"><a href="javascript:void(0);"><img src="<?php echo P_IMG.'/detail-info.png'; ?>" alt="hinhanh">&nbsp;&nbsp;&nbsp;Xem chi tiết</a></div>
	</div>
	<div class="thi-cong-noi-that-box">
		<div class="thi-cong-noi-that-info">
			<h3 class="box-info-title"><a href="javascript:void(0);">Thi công nội thất</a></h3>
			<div class="box-info-excerpt">
				Thiết kế nội thất văn phòng có ảnh hưởng nhất định đến tâm lý và hiệu quả công việc. Người thiết kế nội thất văn phòng phải hiểu được điều này để nhân viên văn phòng có thể khai thác hết tư duy và sáng tạo
			</div>
			<div class="box-info-readmore"><a href="javascript:void(0);"><img src="<?php echo P_IMG.'/detail-info.png'; ?>" alt="hinhanh">&nbsp;&nbsp;&nbsp;Xem chi tiết</a></div>
		</div>
		<div class="clr"></div>
	</div>
	<div class="san-pham-rem-cua-box">		
		<h3 class="box-info-title"><a href="javascript:void(0);">Sản phẩm rèm cửa</a></h3>
		<div class="box-info-excerpt">
			Rèm vải chắn sáng từ lâu đã là một vật dụng không thể thiếu trong ngôi nhà, đặc biệt là phòng ngủ, hay những căn nhà hướng tây mặt trời chiếu thẳng vào nhà lâu ngày có thể gây hỏng sàn gỗ...
		</div>
		<div class="box-info-readmore"><a href="javascript:void(0);"><img src="<?php echo P_IMG.'/detail-info.png'; ?>" alt="hinhanh">&nbsp;&nbsp;&nbsp;Xem chi tiết</a></div>
	</div>
	<div class="giay-dan-tuong-box">
		<div class="thi-cong-noi-that-info">
			<h3 class="box-info-title"><a href="javascript:void(0);">Giấy dán tường</a></h3>
			<div class="box-info-excerpt">
				Giấy dán tường là vật liệu trang trí nội thất có cấu tạo bề mặt dưới là giấy mặt trên là nhựa và được in trên đó các hoa văn, họa tiết với đủ các màu sắc khác nhau. 
			</div>
			<div class="box-info-readmore"><a href="javascript:void(0);"><img src="<?php echo P_IMG.'/detail-info.png'; ?>" alt="hinhanh">&nbsp;&nbsp;&nbsp;Xem chi tiết</a></div>
		</div>
		<div class="clr"></div>
	</div>
	<div class="dan-phoi-thong-minh-box">		
		<h3 class="box-info-title"><a href="javascript:void(0);">Dàn phơi thông minh</a></h3>
		<div class="box-info-excerpt">
			Giàn phơi thông minh là một vật dụng được phát minh nhằm hỗ trợ việc phơi  quần áo nhanh và hiệu quả hơn.đặc điểm nổi bật của giàn phơi thông minh là có thể điều khiển thanh phơi nâng lên...
		</div>
		<div class="box-info-readmore"><a href="javascript:void(0);"><img src="<?php echo P_IMG.'/detail-info.png'; ?>" alt="hinhanh">&nbsp;&nbsp;&nbsp;Xem chi tiết</a></div>
	</div>
	<div class="thuong_hieu_box">		
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="dvcchungtoi">Hệ thống thương hiệu</h2>
					<div class="thuong_hieu_box_arrow">
						<div class="owl_carousel_trade owl-carousel owl-theme owl-loaded">							<?php 
						for ($i=1; $i <= 6; $i++) { 
							?>
							<div class="item">
								<a href="javascript:void(0);" title="tiêu đề tên" target="_blank" rel="nofollow">
									<div style="background-image: url(<?php echo P_IMG.'/logo_doitac'.$i.'.png'; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / ( 197 / 93 ))"></div>
								</a>
							</div>
							<?php
						}
						for ($i=1; $i <= 6; $i++) { 
							?>
							<div class="item">
								<a href="javascript:void(0);" title="tiêu đề tên" target="_blank" rel="nofollow"><img src="<?php echo P_IMG.'/logo_doitac'.$i.'.png'; ?>" alt="tên hình"></a>
							</div>
							<?php
						}
						?>
						</div>
					</div>							
				</div>					
			</div>					
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h2 class="content_bottom_h">Tin tức mới nhất</h2>
				<div>
					<?php 
					for($i=1;$i<=2;$i++){
						?>
						<div class="article_box">
							<div class="article_hinh_anh">
								<a href="javascript:void(0);" title="tiêu đề tên">
									<figure>									
										<div class="news-bx-img" style="background-image: url(<?php echo P_IMG.'/img_news1.png'; ?>);">
											
										</div>																			
									</figure>
								</a>
							</div>
							<div class="article_info">
								<div class="article_info_date_post">12.06.2018</div>
								<h3 class="article_info_title"><a href="javascript:void(0);" title="tiêu đề tên">Khoác áo mới cho phòng khách đón hè</a></h3>
								<div class="article_info_intro">
									<?php 
									$intro="Những màu sắc từ mùa đông sang mùa xuân như thảm lông, gối ôm… đã không còn phù hợp với không khí mùa hè. Tuy nhiên bạn không cần.Những màu sắc từ mùa đông sang mùa xuân như thảm lông, gối ôm… đã không còn phù hợp với không khí mùa hè. Tuy nhiên bạn không cần.Những màu sắc từ mùa đông sang mùa xuân như thảm lông, gối ôm… đã không còn phù hợp với không khí mùa hè. Tuy nhiên bạn không cần";
									$intro=mb_substr( $intro, 0,200, 'UTF-8')."...";														
									echo $intro;
									?>									
								</div>
							</div>
							<div class="clr"></div>					
						</div>
						<?php
					}
					?>										
				</div>				
				<div class="readmore2">
					<a href="javascript:void(0)" title="tiêu đề tên">Xem tất cả</a>
				</div>
			</div>
			<div class="col-lg-6">
				<h2 class="content_bottom_h">Hình ảnh</h2>
				<div class="box-gallery2">
					<div class="owl_carousel_gallery2 owl-carousel owl-theme owl-loaded">
						<?php 
						for($i=1;$i<=3;$i++){
							?>
							<div class="item">
								<div>
									<div class="row">
										<div class="col">
											<div class="img_bottom">
												<a href="javascript:void(0);" title="tiêu đề tên">
													<div class="bottom-img-calc" style="background-image: url(<?php echo P_IMG.'/hinhanh1.png'; ?>)"></div>
													<div class="overlay"><i class="fa fa-camera" aria-hidden="true"></i></div>
												</a>
											</div>									
										</div>									
									</div>
								</div>
							</div>
							<?php
						}
						?>
					</div>
				</div>	
				<div class="box-gallery1">
					<div class="owl_carousel_gallery owl-carousel owl-theme owl-loaded">
						<?php 
						for($i=1;$i<=10;$i++){
							?>
							<div class="item">
								<div>
									<div class="row">
										<div class="col-sm-6">
											<div class="img_bottom">
												<a href="javascript:void(0);" title="tiêu đề tên">
													<div class="bottom-img-calc" style="background-image: url(<?php echo P_IMG.'/hinhanh1.png'; ?>)"></div>
													<div class="overlay"><i class="fa fa-camera" aria-hidden="true"></i></div>
												</a>
											</div>									
										</div>
										<div class="col-sm-6">
											<div class="img_bottom">
												<a href="javascript:void(0);" title="tiêu đề tên">
													<div class="bottom-img-calc" style="background-image: url(<?php echo P_IMG.'/hinhanh2.png'; ?>)"></div>
													<div class="overlay"><i class="fa fa-camera" aria-hidden="true"></i></div>
												</a>
											</div>									
										</div>
										<div class="col-sm-6">
											<div class="img_bottom">
												<a href="javascript:void(0);" title="tiêu đề tên">
													<div class="bottom-img-calc" style="background-image: url(<?php echo P_IMG.'/hinhanh3.png'; ?>)"></div>
													<div class="overlay"><i class="fa fa-camera" aria-hidden="true"></i></div>
												</a>
											</div>									
										</div>
										<div class="col-sm-6">
											<div class="img_bottom">
												<a href="javascript:void(0);" title="tiêu đề tên">
													<div class="bottom-img-calc" style="background-image: url(<?php echo P_IMG.'/hinhanh4.png'; ?>)"></div>
													<div class="overlay"><i class="fa fa-camera" aria-hidden="true"></i></div>
												</a>
											</div>									
										</div>
									</div>
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
	<div class="bg_bottom">				
		<div class="container">
			<div class="row">
				<div class="col"><h2 class="tsnhtv_goldenhomes">Tại sao nên hợp tác với Golden Homes</h2></div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-xs-6">
					<div class="why_box">
						<div class="why_box_solieu"><span class="counter">500</span>+</div>
						<div class="why_box_hr"></div>
						<div class="why_box_txt">Khách hàng tiêu biểu</div>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<div class="why_box">
						<div class="why_box_solieu"><span class="counter">30</span>+</div>
						<div class="why_box_hr"></div>
						<div class="why_box_txt">Thợ tay nghề cao</div>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<div class="why_box">
						<div class="why_box_solieu"><span class="counter">9</span>+</div>
						<div class="why_box_hr"></div>
						<div class="why_box_txt">Năm kinh nghiệm</div>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<div class="why_box">
						<div class="why_box_solieu"><span class="counter">99</span>%</div>
						<div class="why_box_hr"></div>
						<div class="why_box_txt">Khách hàng hài lòng</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clr"></div>
	<?php	
	get_footer();
	?>