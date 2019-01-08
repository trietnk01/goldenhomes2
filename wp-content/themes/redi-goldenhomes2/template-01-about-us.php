<?php
/*
Template name: Template giới thiệu
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
$date_post="";
$term_slug="";
if(have_posts()){
	while (have_posts()) {
		the_post();                            
		$post_id=get_the_ID(); 
		$title=get_the_title($post_id);    
		$excerpt=get_the_excerpt( $post_id );
		$content=get_the_content( $post_id);
		$permalink=get_the_permalink( $post_id );
		$date_post=get_the_date('d/m/Y',@$post_id);    
		$source_term = wp_get_object_terms( $post_id,  'category' ); 
		if(count($source_term) > 0){
			$term_slug=$source_term[0]->slug;
		}         
		$featured_img=get_the_post_thumbnail_url($post_id, 'full');                   
		if(count($source_term) > 0){
			foreach ($source_term as $key => $value) {
				$source_term_id[]=$value->term_id;
			}
		}    
	}
	wp_reset_postdata();  
}
?>
<div class="box-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7">			
				<h2 class="single-title">
					<?php echo get_field('op_gioi_thieu_title','option'); ?>
				</h2>
				<div class="single-content">
					<?php echo get_field('op_gioi_thieu_content','option'); ?>
				</div>
				<?php include get_template_directory() . "/block/block-thong-tin-chi-tiet.php"; ?>					
				<div class="rapidshare">                                            
					<div class="facebook_button">
						<div class="fb-share-button" data-href="<?php echo @$permalink; ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
					</div>       
					<div class="facebook_like_button">
						<div class="fb-like" data-href="<?php echo @$permalink; ?>" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
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
			<div class="col-lg-4 col-md-5">
				<?php include get_template_directory() . "/block/block-product-detail.php"; ?>					
			</div>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>