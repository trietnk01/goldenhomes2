<?php 
get_header();
global $zController;
$productModel=$zController->getModel("/frontend","ProductModel");
$args = $wp_query->query;	
$args['orderby']='id';
$args['order']='DESC';		
$s="";
if(isset($_POST["s"])){
	$s=trim($_POST["s"]);
}
if(!empty(@$s)){		
	$args["s"] =@$s;
}	 
$wp_query->query($args);
$the_query=$wp_query;	
/* start setup pagination */
$totalItemsPerPage=get_option( 'posts_per_page' );
$pageRange=3;
$currentPage=1; 
if(!empty(@$_POST["filter_page"]))          {
	$currentPage=@$_POST["filter_page"];  
}
$productModel->setWpQuery($the_query);   
$productModel->setPerpage($totalItemsPerPage);        
$productModel->prepare_items();               
$totalItems= $productModel->getTotalItems();               
$arrPagination=array(
	"totalItems"=>$totalItems,
	"totalItemsPerPage"=>$totalItemsPerPage,
	"pageRange"=>$pageRange,
	"currentPage"=>$currentPage   
);    
$pagination=$zController->getPagination("Pagination",$arrPagination); 
/* end setup pagination */
$source_article=array();
if($the_query->have_posts()){
	while ($the_query->have_posts()) {
		$the_query->the_post();
		$post_id=$the_query->post->ID;                                                                      
		$permalink=get_the_permalink($post_id);         
		$title=get_the_title($post_id);
		$excerpt=wp_trim_words( get_the_excerpt($post_id), 20, '...' ) ;
		$featured_img=get_the_post_thumbnail_url($post_id, 'full'); 
		$date_post='';
		$date_post=get_the_date('d/m/Y',@$post_id);      
		$row_article["title"]=$title;
		$row_article["permalink"]=$permalink;
		$row_article["featured_img"]=$featured_img;
		$row_article["date_post"]=$date_post;
		$row_article["excerpt"]=$excerpt;
		$source_article[]=$row_article;
	}
	wp_reset_postdata();	
}  
?>
<div class="box-news">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="san-pham-title">Tin tức mới nhất</h2>				
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="news-item">
					<a href="javascript:void(0);">
						<figure><div class="news-img" style="background-image: url(<?php echo P_IMG.'/news-1.png'; ?>);"></div></figure>
					</a>
					<div class="news-date-post">12.06.2018</div>
					<h3 class="news-title">
						<a href="javascript:void(0);">Hướng dẫn dọn dẹp tủ quần áo một cách chuyên nghiệp</a>
					</h3>
					<div class="news-excerpt">
						Trước khi bắt tay vào việc dọn dẹp tủ quần áo hãy viết tất cả mọi thứ bạn muốn “vứt” ra giấy. Có như vậy công việc dọn dẹp sẽ được giải quyết khoa học và nhanh chóng hơn.
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="news-bx-lemon">
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
			</div>
		</div>
		<div class="news-kadric">
			<?php
		$k=0; 
		for ($i=1; $i <= 8 ; $i++) { 
			if($k%2 == 0){
				echo '<div class="row">';
			}
			?>
			<div class="col-lg-6">
				<div class="box-art">
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
				</div>								
			</div>
			<?php
			$k++;
			if($k%2 == 0 || $k == 8){
				echo '</div>';
			}
		}
		?>
		</div>			
	</div>
</div>
<?php
get_footer();
?>