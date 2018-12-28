<?php 
/*

Footer template

*/
?>
<div class="footer">
	<div class="container">		
		<div class="row">
			<div class="col-md-5">
				<div class="footer_info">
					<h2 class="tru_so_chinh">Trụ sở chính</h2>
					<div class="address_r">
						<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;42/1 Đường 17, P. Hiệp Bình Chánh, Q. Thủ Đức, TP.HCm
					</div>					
					<div class="telephone_r">
						<?php 
						$sdt=get_field('sdt','option'); 
						$tel_alo=get_field('tel_alo','option'); 
						?>
						<i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;<a href="tel:<?php echo @$tel_alo; ?>" title="tiêu đề tên"><?php echo @$sdt; ?></a>
					</div>
					<div class="telephone_r">						
						<i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;<a href="mailto:someone@example.com" title="tiêu đề tên">nguyenbaotuoc@gmail.com</a>
					</div>					
					<h2 class="about_us">Về chúng tôi</h2>
					<div class="about_us_intro">Golden Homes được thành lập vào năm 2010 là một trong các công ty hàng đầu trong lĩnh vực thiết kế và thi công nội thất. Chúng tôi là những con người trẻ, tràn đầy nhiệt huyết kinh doanh với tâm huyết 
						là mang đến cho khách hàng những sản phẩm tốt nhất.
					</div>
				</div>				
			</div>
			<div class="col-md-7">
				<div class="footer_info san-pham-footer">
					<h2 class="tru_so_chinh">Sản phẩm</h2>
					<ul class="menu_footer">
						<li><a href="javascript:void(0);">Đồ gỗ</a></li>
						<li><a href="javascript:void(0);">Rèm cửa</a></li>
						<li><a href="javascript:void(0);">Giấy dán tường</a></li>
						<li><a href="javascript:void(0);">Khung treo thông minh</a></li>
					</ul>
					<ul class="footer_social">
						<li><a href="javascript:void(0);" title="tiêu đề tên" target="_blank" rel="nofollow"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="javascript:void(0);" title="tiêu đề tên" target="_blank" rel="nofollow"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						<li><a href="javascript:void(0);" title="tiêu đề tên" target="_blank" rel="nofollow"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="javascript:void(0);" title="tiêu đề tên" target="_blank" rel="nofollow"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>								
				</div>
				<div class="map-box">
					<div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="340" data-height="260" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
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
