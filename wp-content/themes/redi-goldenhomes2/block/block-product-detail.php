<div class="support-online-box">
	<div class="ho-tro-tot" style="background-image: url(<?php echo P_IMG.'/ho-tro-truc-tuyen.png'; ?>);">
		<div class="httt">
			<div class="ho-tro">Hỗ trợ</div>
			<div class="truc-tuyen">Trực tuyến</div>
		</div>
	</div>	
	<div class="support-hotline">
		<div class="support-phone-icon"><img src="<?php echo P_IMG.'/telephone.png'; ?>"></div>
		<div class="support-phone-number"><a href="tel:<?php echo get_field('tel_alo','option'); ?>"><?php echo get_field('sdt','option'); ?></a></div>
		<div class="clr"></div>
	</div>
	<div class="call-skype-viber-zalo">
		Call: Skype - Viber - Zalo 
	</div>
	<div class="cara-call-skype-viber-zalo">
		<span><a href="skype:<?php echo get_field('op_option_skype','option'); ?>?chat"><img src="<?php echo P_IMG . '/skype.png'; ?>"></a></span>
		<span><a href="javascript:void(0);"><img src="<?php echo P_IMG . '/viber.png'; ?>"></a></span>
		<span><a href="http://zalo.me/<?php echo get_field('tel_alo'); ?>"><img src="<?php echo P_IMG . '/zalo.png'; ?>"></a></span>
	</div>
	<div class="support-email">
		<a href="mailto:<?php echo get_field('email_info','option'); ?>">Email: <?php echo get_field('email_info','option'); ?></a>
	</div>
</div>
<?php 
$args = array(
	'post_type' => 'post',
	'orderby' => 'id',
	'order'   => 'DESC',  	
	'posts_per_page' => 4,
	'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field'    => 'slug',
			'terms'    => array('dich-vu'),
		)
	),
);
$the_query = new WP_Query( $args );	
if($the_query->have_posts()){
	?>
	<h3 class="cac-dich-vu-chinh">Các dịch vụ chính</h3>
	<div class="main-service">
		<?php 
		while ($the_query->have_posts()) {
			$the_query->the_post();
			$post_id=$the_query->post->ID;                                                                      
			$permalink=get_the_permalink($post_id);					
			$title= wp_trim_words( get_the_title($post_id),10,'...' ) ;
			$excerpt= wp_trim_words( get_the_excerpt($post_id),35,'...' ) ;
			$featured_img=get_the_post_thumbnail_url($post_id, 'full'); 
			$date_post=get_the_date('d.m.Y',@$post_id);		
			?>
			<div class="dvc" style="background-image: url('<?php echo $featured_img; ?>')">
				<h3><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></h3>
			</div>
			<?php					
		}
		wp_reset_postdata();
		?>		
	</div>		
	<?php	
	
}
?>
		