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
						<div class="ck_mp_tc_right"><?php echo get_field('op_hp_slogan_left','option'); ?></div>
						<div class="clr"></div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="mp_wrapper">
						<div class="ck_mp_tc_left"><img src="<?php echo P_IMG.'/icon-mien-phi-thiet-ke-tu-bep.png'; ?>" alt="tên hình"></div>
						<div class="ck_mp_tc_right"><?php echo get_field('op_hp_slogan_center','option'); ?></div>
						<div class="clr"></div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="tc_wrapper">
						<div class="ck_mp_tc_left"><img src="<?php echo P_IMG.'/icon-thi-cong.png'; ?>" alt="tên hình"></div>
						<div class="ck_mp_tc_right"><?php echo get_field('op_hp_slogan_right','option'); ?></div>
						<div class="clr"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-ck-mp-tc-tablet">
		<div class="ck_wrapper">
			<div class="ck_mp_tc_left"><img src="<?php echo P_IMG.'/icon-camket.png'; ?>" alt="tên hình"></div>
			<div class="ck_mp_tc_right"><?php echo get_field('op_hp_slogan_left','option'); ?></div>
			<div class="clr"></div>
		</div>
		<div class="mp-tc-box">
			<div class="mp-box">
				<div class="mp_wrapper">
					<div class="ck_mp_tc_left"><img src="<?php echo P_IMG.'/icon-mien-phi-thiet-ke-tu-bep.png'; ?>" alt="tên hình"></div>
					<div class="ck_mp_tc_right"><?php echo get_field('op_hp_slogan_center','option'); ?></div>
					<div class="clr"></div>
				</div>
			</div>
			<div class="tc-box">
				<div class="tc_wrapper">
					<div class="ck_mp_tc_left"><img src="<?php echo P_IMG.'/icon-thi-cong.png'; ?>" alt="tên hình"></div>
					<div class="ck_mp_tc_right"><?php echo get_field('op_hp_slogan_right','option'); ?></div>
					<div class="clr"></div>
				</div>
			</div>
			<div class="clr"></div>
		</div>	
	</div>
	<div class="thiet-ke-noi-that-box" style="background-image: url(<?php echo get_field('op_hp_banner_thiet_ke_noi_that','option'); ?>);">	
		<div class="tknt-box-ab">
			<h3 class="box-info-title"><a href="<?php echo get_field('op_hp_link_thiet_ke_noi_that','option'); ?>"><?php echo get_field('op_hp_title_thiet_ke_noi_that','option'); ?></a></h3>
			<div class="box-info-excerpt">
				<?php echo get_field('op_hp_content_thiet_ke_noi_that','option'); ?>
			</div>
			<div class="box-info-readmore"><a href="<?php echo get_field('op_hp_link_thiet_ke_noi_that','option'); ?>"><img src="<?php echo P_IMG.'/detail-info.png'; ?>" alt="hinhanh">&nbsp;&nbsp;&nbsp;Xem chi tiết</a></div>
		</div>			
	</div>
	<div class="thi-cong-noi-that-box" style="background-image: url(<?php echo get_field('op_hp_banner_thi_cong_noi_that','option'); ?>);">
		<div class="thi-cong-noi-that-info">
			<h3 class="box-info-title"><a href="<?php echo get_field('op_hp_link_thi_cong_noi_that','option'); ?>"><?php echo get_field('op_hp_title_thi_cong_noi_that','option'); ?></a></h3>
			<div class="box-info-excerpt">
				<?php echo get_field('op_hp_content_thi_cong_noi_that','option'); ?>
			</div>
			<div class="box-info-readmore"><a href="<?php echo get_field('op_hp_link_thi_cong_noi_that','option'); ?>"><img src="<?php echo P_IMG.'/detail-info.png'; ?>" alt="hinhanh">&nbsp;&nbsp;&nbsp;Xem chi tiết</a></div>
		</div>
		<div class="clr"></div>
	</div>
	<div class="san-pham-rem-cua-box" style="background-image: url(<?php echo get_field('op_hp_banner_san_pham_rem_cua','option'); ?>);">	
		<div class="rem-cua-bx">
			<h3 class="box-info-title"><a href="<?php echo get_field('op_hp_link_san_pham_rem_cua','option'); ?>"><?php echo get_field('op_hp_title_san_pham_rem_cua','option'); ?></a></h3>
		<div class="box-info-excerpt">
			<?php echo get_field('op_hp_content_san_pham_rem_cua','option'); ?>
		</div>
		<div class="box-info-readmore"><a href="<?php echo get_field('op_hp_link_san_pham_rem_cua','option'); ?>"><img src="<?php echo P_IMG.'/detail-info.png'; ?>" alt="hinhanh">&nbsp;&nbsp;&nbsp;Xem chi tiết</a></div>
		</div>			
	</div>
	<div class="giay-dan-tuong-box" style="background-image: url(<?php echo get_field('op_hp_banner_giay_gian_tuong','option'); ?>);">
		<div class="thi-cong-noi-that-info">
			<h3 class="box-info-title"><a href="<?php echo get_field('op_hp_link_giay_gian_tuong','option'); ?>"><?php echo get_field('op_hp_title_giay_gian_tuong','option'); ?></a></h3>
			<div class="box-info-excerpt">
				<?php echo get_field('op_hp_content_giay_gian_tuong','option'); ?>
			</div>
			<div class="box-info-readmore"><a href="<?php echo get_field('op_hp_link_giay_gian_tuong','option'); ?>"><img src="<?php echo P_IMG.'/detail-info.png'; ?>" alt="hinhanh">&nbsp;&nbsp;&nbsp;Xem chi tiết</a></div>
		</div>
		<div class="clr"></div>
	</div>
	<div class="dan-phoi-thong-minh-box" style="background-image: url(<?php echo get_field('op_hp_banner_dan_phoi_thong_minh','option'); ?>);">	
		<div class="dan-phoi-box">
			<h3 class="box-info-title"><a href="<?php echo get_field('op_hp_link_dan_phoi_thong_minh','option'); ?>"><?php echo get_field('op_hp_title_dan_phoi_thong_minh','option'); ?></a></h3>
			<div class="box-info-excerpt">
				<?php echo get_field('op_hp_content_dan_phoi_thong_minh','option'); ?>
			</div>
			<div class="box-info-readmore"><a href="<?php echo get_field('op_hp_link_dan_phoi_thong_minh','option'); ?>"><img src="<?php echo P_IMG.'/detail-info.png'; ?>" alt="hinhanh">&nbsp;&nbsp;&nbsp;Xem chi tiết</a></div>
		</div>			
	</div>
	<div class="thuong_hieu_box">		
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="dvcchungtoi">Hệ thống thương hiệu</h2>
					<div class="thuong_hieu_box_arrow">
						<div class="owl_carousel_trade owl-carousel owl-theme owl-loaded">							<?php 
						$source_logo=get_field('op_hp_logo_rpt','option');
						foreach ($source_logo as $key => $value) { 
							?>
							<div class="item">
								<a href="javascript:void(0);" title="tiêu đề tên" target="_blank" rel="nofollow">
									<div style="background-image: url(<?php echo @$value['op_hp_logo_img']; ?>);background-repeat: no-repeat;background-size: cover;padding-top: calc(100% / ( 197 / 93 ))"></div>
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
				<?php 
				
				$args = array(
					'post_type' => 'post',
					'orderby' => 'id',
					'order'   => 'DESC',  	
					'posts_per_page' => 2,
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field'    => 'slug',
							'terms'    => array('tin-tuc'),
						)
					),
				);
				$the_query = new WP_Query( $args );	
				$source_article=array();
				if($the_query->have_posts()){
					while ($the_query->have_posts()) {
						$the_query->the_post();
						$post_id=$the_query->post->ID;                                                                      
						$permalink=get_the_permalink($post_id);					
						$title= wp_trim_words( get_the_title($post_id),10,'...' ) ;
						$excerpt= wp_trim_words( get_the_excerpt($post_id),35,'...' ) ;
						$featured_img=get_the_post_thumbnail_url($post_id, 'full'); 
						$date_post=get_the_date('d.m.Y',@$post_id);							
						$data_hot_article["title"]=$title;
						$data_hot_article["title_tooltip"]= get_the_title($post_id);
						$data_hot_article["permalink"]=$permalink;
						$data_hot_article["featured_img"]=$featured_img;
						$data_hot_article["date_post"]=$date_post;
						$data_hot_article["excerpt"]=$excerpt;
						$source_article[]=$data_hot_article;
					}
					wp_reset_postdata();
				}
				if(count(@$source_article) > 0){
					?>
					<h2 class="content_bottom_h">Tin tức mới nhất</h2>
					<div>
						<?php 
						for ($i=0; $i < count(@$source_article) ; $i++){
							?>
							<div class="article_box">
								<div class="article_hinh_anh">
									<a href="<?php echo @$source_article[$i]['permalink']; ?>" title="<?php echo @$source_article[$i]['title_tooltip']; ?>">
										<figure>									
											<div class="news-bx-img" style="background-image: url(<?php echo @$source_article[$i]['featured_img']; ?>);">

											</div>																			
										</figure>
									</a>
								</div>
								<div class="article_info">
									<div class="article_info_date_post"><?php echo @$source_article[$i]['date_post']; ?></div>
									<h3 class="article_info_title"><a href="<?php echo @$source_article[$i]['permalink']; ?>" title="<?php echo @$source_article[$i]['title_tooltip']; ?>"><?php echo @$source_article[$i]['title']; ?></a></h3>
									<div class="article_info_intro">
										<?php echo @$source_article[$i]['excerpt']; ?>							
									</div>
								</div>
								<div class="clr"></div>					
							</div>
							<?php
						}
						$term_data=get_term_by( 'slug','tin-tuc', 'category' );		
						$term_link=get_term_link( $term_data, 'category' );
						?>										
					</div>				
					<div class="readmore2">
						<a href="<?php echo @$term_link; ?>" title="tiêu đề tên">Xem tất cả</a>
					</div>
					<?php
				}
				?>				
			</div>
			<div class="col-lg-6">
				<h2 class="content_bottom_h">Hình ảnh</h2>
				<div class="box-gallery2">
					<div class="owl_carousel_gallery2 owl-carousel owl-theme owl-loaded">
						<?php 
						$source_gallery=get_field('op_hp_gallery_rpt','option');						
						foreach($source_gallery as $key => $value){
							?>
							<div class="item">
								<div>
									<div class="row">
										<div class="col">
											<div class="img_bottom">
												<a href="<?php echo @$value['op_hp_gallery_img']; ?>" title="tiêu đề tên" class="smlightbox">
													<div class="bottom-img-calc" style="background-image: url(<?php echo @$value['op_hp_gallery_img']; ?>)"></div>
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
						if(count($source_gallery) > 0){
							$k=0;
							foreach($source_gallery as $key => $value){
								if($k%4==0){
									echo '<div class="item"><div><div class="row">';									
								}
								?>
								<div class="col-sm-6">
									<div class="img_bottom">
										<a href="<?php echo @$value['op_hp_gallery_img']; ?>" class="smlightbox" title="tiêu đề tên">
											<div class="bottom-img-calc" style="background-image: url(<?php echo @$value['op_hp_gallery_img']; ?>)"></div>
											<div class="overlay"><i class="fa fa-camera" aria-hidden="true"></i></div>
										</a>
									</div>									
								</div>
								<?php
								$k++;
								if($k%4==0 || $k==count($source_gallery)){
									echo '</div></div></div>';
								}
							}
						}						
						?>
					</div>
				</div>							
			</div>
		</div>
	</div>	
	<div class="bg-bottom2">
		<div class="container">
			<div class="row">
				<div class="col"><h2 class="tsnhtv_goldenhomes"><?php echo get_field('op_hp_hop_tac_slogan','option'); ?></h2></div>
			</div>
			<div class="thong-so">
				<div class="bo-khach-hang-tieu-bieu">
					<div class="why_box">
						<div class="why_box_solieu"><span class="counter"><?php echo get_field('op_hp_hop_tac_so_lieu_khach_hang','option'); ?></span>+</div>
						<div class="why_box_hr"></div>
						<div class="why_box_txt">Khách hàng tiêu biểu</div>
					</div>
					<div class="why_box">
						<div class="why_box_solieu"><span class="counter"><?php echo get_field('op_hp_hop_tac_so_nam_kinh_nghiem','option'); ?></span>+</div>
						<div class="why_box_hr"></div>
						<div class="why_box_txt">Năm kinh nghiệm</div>
					</div>
				</div>
				<div class="bo-tho-tay-nghe-cao">
					<div class="why_box">
						<div class="why_box_solieu"><span class="counter"><?php echo get_field('op_hp_hop_tac_so_lieu_tho_tay_nghe_cao','option'); ?></span>+</div>
						<div class="why_box_hr"></div>
						<div class="why_box_txt">Thợ tay nghề cao</div>
					</div>	
					<div class="why_box">
						<div class="why_box_solieu"><span class="counter"><?php echo get_field('op_hp_hop_tac_so_khach_hai_long','option'); ?></span>%</div>
						<div class="why_box_hr"></div>
						<div class="why_box_txt">Khách hàng hài lòng</div>
					</div>
				</div>
				<div class="clr"></div>
			</div>			
		</div>		
	</div>
	<div class="bg_bottom">				
		<div class="container">
			<div class="row">
				<div class="col"><h2 class="tsnhtv_goldenhomes"><?php echo get_field('op_hp_hop_tac_slogan','option'); ?></h2></div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-xs-6">
					<div class="why_box">
						<div class="why_box_solieu"><span class="counter"><?php echo get_field('op_hp_hop_tac_so_lieu_khach_hang','option'); ?></span>+</div>
						<div class="why_box_hr"></div>
						<div class="why_box_txt">Khách hàng tiêu biểu</div>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<div class="why_box">
						<div class="why_box_solieu"><span class="counter"><?php echo get_field('op_hp_hop_tac_so_lieu_tho_tay_nghe_cao','option'); ?></span>+</div>
						<div class="why_box_hr"></div>
						<div class="why_box_txt">Thợ tay nghề cao</div>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<div class="why_box">
						<div class="why_box_solieu"><span class="counter"><?php echo get_field('op_hp_hop_tac_so_nam_kinh_nghiem','option'); ?></span>+</div>
						<div class="why_box_hr"></div>
						<div class="why_box_txt">Năm kinh nghiệm</div>
					</div>
				</div>
				<div class="col-lg-3 col-xs-6">
					<div class="why_box">
						<div class="why_box_solieu"><span class="counter"><?php echo get_field('op_hp_hop_tac_so_khach_hai_long','option'); ?></span>%</div>
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