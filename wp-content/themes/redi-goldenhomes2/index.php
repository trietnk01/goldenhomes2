<?php
/*
	Home template default
*/	
	get_header();
	global $zController;
	$productModel=$zController->getModel("/frontend","ProductModel");
	$source_banner=get_field('op_banner_repeat','option');		
	?>
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
								<a href="javascript:void(0);" title="tiêu đề tên" target="_blank" rel="nofollow"><img src="<?php echo P_IMG.'/logo_doitac'.$i.'.png'; ?>" alt="tên hình"></a>
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
	<?php	
	get_footer();
	?>