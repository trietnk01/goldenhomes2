<?php
/*
Template name: Template sản phẩm
Template Post Type: post, page
*/
get_header();
global $zController;
$productModel=$zController->getModel("/frontend","ProductModel");
/* start set the_query */
$the_query=null;
if(is_page()){
	$args = array(
		'post_type' => 'zaproduct',  
		'orderby' => 'id',
		'order'   => 'DESC',  				   
	);	
	$the_query = new WP_Query( $args );  		
}else{
	$args = $wp_query->query;
	$args['orderby']='id';
	$args['order']='DESC';
	$wp_query->query($args);
	$the_query=$wp_query;	
}
/* end set the_query */
/* start setup pagination */
$totalItemsPerPage=15;
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
?>
<div class="box-product">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="san-pham-title">
					<?php 
					if(is_page()){
						if(have_posts()){
							while(have_posts()){
								the_post();
								the_title();
							}
							wp_reset_postdata();  
						}
					}else{
						single_cat_title();
					}
					?>
				</h2>
				<div class="lst-category-wrapper">
					<?php			
					$args = array( 
						'menu'              => '', 
						'container'         => '', 
						'container_class'   => '', 
						'container_id'      => '', 
						'menu_class'        => 'category-lst-title',                             
						'echo'              => true, 
						'fallback_cb'       => 'wp_page_menu', 
						'before'            => '', 
						'after'             => '', 
						'link_before'       => '', 
						'link_after'        => '', 
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
						'depth'             => 3, 
						'walker'            => '', 
						'theme_location'    => 'san_pham_menu' ,
						'menu_li_actived'       => 'current-menu-item',
						'menu_item_has_children'=> 'menu-item-has-children',
					);
					wp_nav_menu($args);
					?>        							
					<div class="clr"></div>
				</div>								
			</div>
		</div>
		<?php 
		$k=0;
		if($the_query->have_posts()){
			?>
			<form name="pro-list" method="POST">
				<input type="hidden" name="filter_page" value="1" />
				<?php
				while ($the_query->have_posts()) {
					$the_query->the_post();
					$post_id=$the_query->post->ID;		
					$title=get_the_title($post_id);																
					$permalink=get_the_permalink($post_id);
					$featured_img=get_the_post_thumbnail_url($post_id, 'full');	 
					if($k%3==0){
						echo '<div class="row">';
					}
					?>
					<div class="col-sm-4">
						<div class="wood_box_wp">
							<div class="wood_img">
								<a href="<?php echo @$permalink; ?>" title="<?php echo @$title; ?>">							
									<div class="do_go_img" style="background-image: url(<?php echo @$featured_img; ?>);"></div>						
									<div class="overlay">Chi tiết</div>
								</a>
							</div>
							<h3 class="h3_wood"><a href="<?php echo @$permalink; ?>" title="<?php echo @$title; ?>"><?php echo @$title; ?></a></h3>
							<div class="service_line_wood"></div>					
						</div>					
					</div>
					<?php
					$k++;
					if($k%3==0 || $k==$the_query->post_count){
						echo '</div>';
					}
				}
				wp_reset_postdata();  
				?>
				<div class="row">
					<div class="col">
						<?php echo @$pagination->showPagination();  ?>
					</div>
				</div>
			</form>			
			<?php
		}else{
			?>
			<div class="row">
				<div class="col"><div class="text-center">Đang cập nhật...</div></div>
			</div>
			<?php
		}		
		?>		
	</div>	
</div>
<?php
get_footer(); 
?>