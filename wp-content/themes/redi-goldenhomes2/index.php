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
	<?php	
	get_footer();
	?>