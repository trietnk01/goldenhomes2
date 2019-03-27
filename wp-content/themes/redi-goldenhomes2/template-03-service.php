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
				<h2 class="san-pham-title"><?php echo get_field('op_service_title','option'); ?></h2>
				<?php 
				$source_post_id=get_field('op_service_post_rpt','option');	
				$k=0;			
				foreach ($source_post_id as $key => $value) {
					$service_post_id=$value['op_service_post_id'];
					$args = array(
						'p' => $service_post_id
					);
					$the_query=new WP_Query($args);					
					if($the_query->have_posts()){
						while ($the_query->have_posts()) {
							$the_query->the_post();
							$post_id=$the_query->post->ID;                                                                      
							$permalink=get_the_permalink($post_id);					
							$title= wp_trim_words( get_the_title($post_id),9999,'...' ) ;
							$excerpt= wp_trim_words( get_the_excerpt($post_id),9999,'...' ) ;
							$featured_img=get_the_post_thumbnail_url($post_id, 'full'); 
							$date_post=get_the_date('d.m.Y',@$post_id);		
							if($k%2==0){
								?>
								<div class="service-bol-1">
									<div class="bol-service-left" >
										<div class="service-img" style="background-image: url('<?php echo @$featured_img; ?>');">
										</div>	
										<div class="corel">
											<div class="outline-box">
												<div class="hinh-binh-hanh">
													<div class="binh-hinh-hanh">
														<h4 class="hanh-binh-title"><?php echo @$title; ?></h4>
													</div>
												</div>
											</div>
										</div>											
									</div>
									<div class="bol-service-right">
										<h3 class="service-title"><a href="<?php echo @$permalink; ?>"><?php echo @$title; ?></a></h3>
										<div class="service-excerpt">
											<?php echo @$excerpt; ?>
										</div>
										<div class="service-readmore">
											<a href="<?php echo @$permalink; ?>">Xem chi tiết</a>
										</div>
									</div>
									<div class="clr"></div>
								</div>
								<?php
							}else{
								?>
								<div class="service-bol-2">
									<div class="bol-service-left">
										<h3 class="service-title"><a href="<?php echo @$permalink; ?>"><?php echo @$title; ?></a></h3>
										<div class="service-excerpt">
											<?php echo @$excerpt; ?>
										</div>
										<div class="service-readmore">
											<a href="<?php echo @$permalink; ?>">Xem chi tiết</a>
										</div>						
									</div>
									<div class="bol-service-right">
										<div class="service-img" style="background-image: url('<?php echo @$featured_img; ?>');">
										</div>	
										<div class="corel">
											<div class="outline-box">
												<div class="hinh-binh-hanh">
													<div class="binh-hinh-hanh">
														<h4 class="hanh-binh-title"><?php echo @$title; ?></h4>
													</div>
												</div>
											</div>
										</div>		
									</div>
									<div class="clr"></div>
								</div>	
								<?php
							}															
						}						
						wp_reset_postdata();
					}
					$k++;	
				}
				?>								
			</div>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>