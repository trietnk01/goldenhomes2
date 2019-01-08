<?php
/*
Template name: Template sản phẩm chi tiết
Template Post Type: post, page
*/
get_header();
$post_id=0;
$title="";
$excerpt="";
$content="";
$featured_img="";
$source_term_id=array();
$permalink="";
$sku="";
$material="";
$intro="";
$size="";
$warranty="";
$sale="";
if(have_posts()){
	while (have_posts()) {
		the_post();                            
        $post_id=get_the_ID(); 
        $title=get_the_title($post_id);    
        $excerpt=get_the_excerpt( $post_id );        
        $permalink=get_the_permalink( $post_id );
        $source_term = wp_get_object_terms( $post_id,  'za_category' );                 
        $featured_img=get_the_post_thumbnail_url($post_id, 'full');   
        $sku=get_field('op_product_sku',$post_id);    
        $intro=get_field('op_product_intro',$post_id);
        $size=get_field('op_product_size',$post_id);
        $warranty=get_field('op_product_warranty',$post_id);
        $sale=get_field('op_product_sale',$post_id);
        /* start count view post */            
        $count_view_post=get_post_meta( $post_id,'count_view_post', true );           
        $count  =   0;  
        if(!empty($count_view_post)){
            $count  =   (int)$count_view_post;                
        }           
        $count++;        
        update_post_meta($post_id, 'count_view_post', $count);    
        /* end count view post */
        if(count($source_term) > 0){
            foreach ($source_term as $key => $value) {
                $source_term_id[]=$value->term_id;
            }
        }    
        $source_material = wp_get_object_terms( $post_id,  'za_material' );         
        if(count(@$source_material) > 0){
        	$material=@$source_material[0]->name;
        }        	
	}
	wp_reset_postdata();  
}
$source_thumbnail_rpt=get_field('op_product_thumbnail_rpt',$post_id);
$source_thumbnail_img=array();
$source_thumbnail_img[]=$featured_img;
if( !empty($source_thumbnail_rpt) ){
	foreach ($source_thumbnail_rpt as $key => $value) {
		$source_thumbnail_img[]=$value['op_product_thumbnail_img'];
	}
}
?>
<div class="box-product-detail">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7">	
				<div class="row">
					<div class="col-lg-6">
						<div class="box_sp_img">
							<div class="box_img_w">
								<a href="<?php echo $featured_img; ?>" class="smlightbox">
									<div class="img-detail" style="background-image: url(<?php echo $featured_img; ?>);"></div>
								</a>
							</div>
							<div class="box-ca">
								<div class="owl_carousel_product_detail owl-carousel owl-theme owl-loaded">		
									<?php 
									if(count($source_thumbnail_img) > 0){
										foreach($source_thumbnail_img as $key => $value){
											?>
											<div class="item">
												<a href="javascript:void(0);" onclick="changeImg('<?php echo P_IMG.'/img_3.png'; ?>','tenhinh');" title="<?php echo $title; ?>">
													<div style="background-image: url(<?php echo $value; ?>);"></div>
												</a>
											</div>
											<?php
										}
									}									
									?>																								
								</div>							
							</div>								
						</div>
					</div>
					<div class="col-lg-6">
						<div class="product-info-box">							
							<h2 class="info-product-title"><?php echo @$title; ?></h2>
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
								<span class="mhdynamic"><?php echo @$sku; ?></span>
							</div>
							<div class="ma-hang">
								<span class="mahang">Lượt xem:</span>
								<span class="mhdynamic"><?php echo @$count; ?></span>
							</div>
							<div class="chat-lieu">
								<span>Chất liệu:</span>
								<span><?php echo @$material; ?></span>
							</div>
							<div class="product-excerpt">
								<?php echo @$intro; ?>
							</div>
							<div class="hidro-share">
								<div class="rapidshare">                                            
									<div class="facebook_button">
										<div class="fb-share-button" data-href="<?php echo @$permalink; ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
									</div>       									
									<div class="category_twitter_sg"><a href="<?php echo @$permalink; ?>" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
									<div class="category_linkedin_sg">
										<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
										<script type="IN/Share" data-url="<?php echo @$permalink; ?>"></script>
									</div>
									<div class="category_g_plus_sg">
										<div class="g-plus" data-action="share" data-annotation="none" data-height="24" data-href="<?php echo @$permalink; ?>"></div>
									</div>
									<div class="clr"></div>
								</div>  
							</div>
							<div class="lienhe">
								<div class="product-size">
									<span>Size:</span>
									<span><?php echo @$size; ?></span>
								</div>
								<div class="lienhebtn">
									<a href="javascript:void(0);" data-toggle="modal" data-target="#baogiamodal">Liên hệ</a>
								</div>	
								<div class="clr"></div>							
							</div>
							<?php 
							if((int)@$sale > 0){
								?>
								<div class="giam-gia">
								<div>Giảm</div>
								<div><?php echo @$sale; ?>%</div>
							</div>
								<?php
							}
							?>							
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
										<?php 
										if(have_posts()){
											while (have_posts()) {
												the_post(); 
												the_content();
											}
										}
										?>
									</div>
								</div>
								<div id="bao-hanh" class="tabcontent">
									<div class="tab-chitietsanpham">
										<?php echo @$warranty; ?>
									</div>
								</div>          
							</div>														                                            
						</div> 
						<?php 
						$args = array(
							'post_type' => 'zaproduct',  
							'orderby' => 'id',
							'order'   => 'DESC',  
							'posts_per_page' => -1,        
							'post__not_in'=>array($post_id),
							'tax_query' => array(
								array(
									'taxonomy' => 'za_category',
									'field'    => 'term_id',
									'terms'    => @$source_term_id,                   
								),
							),
						);
						$the_query=new WP_Query($args);  
						if($the_query->have_posts()){
							?>
							<div class="product-related">
								Sản phẩm liên quan
							</div>		
							<div class="clr"></div>		
							<div class="splq-line"></div>
							<div class="product-related-carousel">
								<div class="owl_carousel_product_related owl-carousel owl-theme owl-loaded">		
									<?php 
									while($the_query->have_posts()){
										$the_query->the_post();
										$post_id=$the_query->post->ID;
										$permalink=get_the_permalink($post_id);
										$title=get_the_title($post_id);
										$featured_img=get_the_post_thumbnail_url($post_id, 'full'); 
										?>
										<div class="item">
											<div class="wood_box_wp">
												<div class="wood_img">
													<a href="<?php echo $permalink; ?>" title="<?php echo $title; ?>">							
														<div class="do_go_img" style="background-image: url(<?php echo @$featured_img; ?>);"></div>						
														<div class="overlay">Chi tiết</div>
													</a>
												</div>
												<h3 class="h3_wood"><a href="<?php echo $permalink; ?>" title="<?php echo $title; ?>"><?php echo $title; ?></a></h3>
												<div class="service_line_wood"></div>					
											</div>		
										</div>
										<?php
									}
									wp_reset_postdata();
									?>																								
								</div>		
							</div>	        
							<?php
						}  
						?>  						                           
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-5">		
			<?php include get_template_directory() . "/block/block-product-detail.php"; ?>					
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="baogiamodal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">			
			<div class="modal-body">
				<div class="cbblose">
					<a href="javascript:void(0);" data-dismiss="modal">
						<i class="fa fa-times" aria-hidden="true"></i>
					</a>							
				</div>	
				<div class="radialmodal"></div>
				<form class="info_modal" name="frm_dk_bg">
					<h4 class="info_title">Đăng ký nhận báo giá</h4>
					<div class="ck_contact"><input type="text" name="fullname" class="form-control" placeholder="Họ tên" required></div>
					<div class="ck_contact"><input type="text" name="phone" class="form-control" placeholder="Điện thoại" required></div>
					<div class="ck_contact"><input type="text" name="email" class="form-control" placeholder="Email" required></div>
					<div class="ck_contact">
						<textarea name="message" class="form-control" cols="30" rows="10" placeholder="Ghi chú thêm" required=""></textarea>
					</div>
					<div class="ck_submit">
						<a href="javascript:void(0);" onclick="registerNow(this);">Đặt mua</a>
						<div class="ajax_loader_contact"></div>
                		<div class="clr"></div>     
					</div>
					<div class="note">Cảm ơn đã đặt phòng tại khách sạn của chúng tôi . Chúng tôi sẽ liên hệ lại bạn trong thời gian sớm nhất.</div>
				</form>	
				<div class="clr"></div>			
			</div>			
		</div>
	</div>
</div>
<?php
get_footer(); 
?>