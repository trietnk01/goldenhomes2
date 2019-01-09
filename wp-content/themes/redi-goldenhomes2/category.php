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
		$excerpt=wp_trim_words( get_the_excerpt($post_id), 9999, '...' ) ;
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
<form class="box-news" method="POST">
	<input type="hidden" name="filter_page" value="1" />
	<input type="hidden" name="s" value="<?php echo @$s; ?>" />
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="san-pham-title">Tin tức mới nhất</h2>				
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<?php 
				if(count($source_article) > 0){
					?>
					<div class="news-item">
						<a href="<?php echo @$source_article[0]['permalink']; ?>">
							<figure><div class="news-img" style="background-image: url(<?php echo @$source_article[0]['featured_img']; ?>"></div></figure>
						</a>
						<div class="news-date-post"><?php echo @$source_article[0]['date_post']; ?></div>
						<h3 class="news-title">
							<a href="<?php echo @$source_article[0]['permalink']; ?>"><?php echo @$source_article[0]['title']; ?></a>
						</h3>
						<div class="news-excerpt">
							<?php echo @$source_article[0]['excerpt']; ?>
						</div>
					</div>
					<?php
				}
				?>				
			</div>
			<div class="col-lg-6">
				<div class="news-bx-lemon">
					<?php 
					for($i=1;$i<=2;$i++){
						?>
						<div class="article_box">
							<div class="article_hinh_anh">
								<a href="<?php echo @$source_article[$i]['permalink']; ?>" title="<?php echo @$source_article[$i]['title']; ?>">
									<figure>									
										<div class="news-bx-img" style="background-image: url(<?php echo @$source_article[$i]['featured_img']; ?>);">
											
										</div>																			
									</figure>
								</a>
							</div>	
							<div class="article_info">
								<div class="article_info_date_post"><?php echo @$source_article[$i]['date_post']; ?></div>
								<h3 class="article_info_title"><a href="<?php echo @$source_article[$i]['permalink']; ?>" title="<?php echo @$source_article[$i]['title']; ?>"><?php echo @$source_article[$i]['title']; ?></a></h3>
								<div class="article_info_intro">
									<?php echo @$source_article[$i]['excerpt']; ?>			
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
							<a href="<?php echo @$source_article[$i]['permalink']; ?>" title="<?php echo @$source_article[$i]['title']; ?>">
								<figure>									
									<div class="news-bx-img" style="background-image: url(<?php echo @$source_article[$i]['featured_img']; ?>);">

									</div>																			
								</figure>
							</a>
						</div>	
						<div class="article_info">
							<div class="article_info_date_post"><?php echo @$source_article[$i]['date_post']; ?></div>
							<h3 class="article_info_title"><a href="<?php echo @$source_article[$i]['permalink']; ?>" title="<?php echo @$source_article[$i]['title']; ?>"><?php echo @$source_article[$i]['title']; ?></a></h3>
							<div class="article_info_intro">
								<?php echo @$source_article[$i]['excerpt']; ?>										
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
		<div class="row">
			<div class="col"><?php echo @$pagination->showPagination();   ?>	</div>
		</div>
		</div>			
	</div>
</form>
<?php
get_footer();
?>