<?php 
/*

Footer template

*/
?>
<div class="footer">
	<div class="container">		
		<div class="row">
			<div class="col-sm-5">
				<div class="footer_info">
					<h2 class="tru_so_chinh">Trụ sở chính</h2>
					<div class="address_r">
						<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo get_field('dia_chi','option'); ?>
					</div>					
					<div class="telephone_r">						
						<i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;<a href="tel:<?php echo get_field('tel_alo','option'); ?>" title="<?php echo get_field('tel_alo','option'); ?>"><?php echo get_field('sdt','option'); ?></a>
					</div>
					<div class="telephone_r">						
						<i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;<a href="mailto:<?php echo get_field('email_info','option'); ?>" title="<?php echo get_field('email_info','option'); ?>"><?php echo get_field('email_info','option'); ?></a>
					</div>					
					<h2 class="about_us">Về chúng tôi</h2>
					<div class="about_us_intro"><?php echo get_field('op_footer_slogan','option'); ?>
					</div>
				</div>				
			</div>
			<div class="col-sm-7">
				<div class="footer_info san-pham-footer">
					<h2 class="tru_so_chinh">Sản phẩm</h2>
					<?php			
					$args = array( 
						'menu'              => '', 
						'container'         => '', 
						'container_class'   => '', 
						'container_id'      => '', 
						'menu_class'        => 'menu_footer',                             
						'echo'              => true, 
						'fallback_cb'       => 'wp_page_menu', 
						'before'            => '', 
						'after'             => '', 
						'link_before'       => '', 
						'link_after'        => '', 
						'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
						'depth'             => 3, 
						'walker'            => '', 
						'theme_location'    => 'footer_menu' ,
						'menu_li_actived'       => 'current-menu-item',
						'menu_item_has_children'=> 'menu-item-has-children',
					);
					wp_nav_menu($args);
					$source_social=get_field('op_inf_sn_repeat','option');				
					?>        						
					<ul class="footer_social">
						<li><a href="<?php echo @$source_social[0]['op_inf_sn_repeat_link']; ?>" title="tiêu đề tên" target="_blank" rel="nofollow"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="<?php echo @$source_social[1]['op_inf_sn_repeat_link']; ?>" title="tiêu đề tên" target="_blank" rel="nofollow"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						<li><a href="<?php echo @$source_social[2]['op_inf_sn_repeat_link']; ?>" title="tiêu đề tên" target="_blank" rel="nofollow"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="<?php echo @$source_social[3]['op_inf_sn_repeat_link']; ?>" title="tiêu đề tên" target="_blank" rel="nofollow"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>								
				</div>
				<div class="map-box">
					<div class="map-taro">
						<div class="fb-page" data-href="https://www.facebook.com/Golden-Homes-242837869639266/" data-tabs="timeline" data-height="260" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Golden-Homes-242837869639266/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Golden-Homes-242837869639266/">Golden Homes</a></blockquote></div>
					</div>					
					<div class="box-social-map">
						<ul class="footer_social">
							<li><a href="javascript:void(0);" title="tiêu đề tên" target="_blank" rel="nofollow"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="javascript:void(0);" title="tiêu đề tên" target="_blank" rel="nofollow"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
							<li><a href="javascript:void(0);" title="tiêu đề tên" target="_blank" rel="nofollow"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="javascript:void(0);" title="tiêu đề tên" target="_blank" rel="nofollow"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						</ul>	
					</div>
				</div>
				<div class="clr"></div>						
			</div>			
		</div>		
	</div>
	<div class="footer_copyright">
		<span class="copyright">COPYRIGHT BY</span> <span class="golden_home"><a href="javascript:void(0);" title="tiêu đề tên">Golden Homes</a></span> <span class="copyright">|</span> <span class="copyright">POWERD BY</span> <span  class="golden_home"><a href="https://redi.vn" title="REDI - Thiết kế website chuẩn Marketing &amp; giải pháp Digital Marketing" target="_blank" rel="nofollow">REDI</a></span>
	</div>
</div>
<?php
wp_footer();
?>
</body>
</html>
