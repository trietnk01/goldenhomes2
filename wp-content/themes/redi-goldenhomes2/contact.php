<?php
/*
Template name: Template liên hệ
Template Post Type: post, page
*/
get_header();
?>
<div class="box-contact">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="san-pham-title">Liên hệ</h2>	
				<div class="gdhomes"><?php echo get_bloginfo( 'name','' ); ?></div>
				<div class="gdhomes-address">
					<span class="contact-marker"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
					<span class="contact-address"><a href="javascript:void(0);"><?php echo get_field('dia_chi','option'); ?></a></span>
				</div>
				<div class="gdhomes-phone">
					<span class="contact-marker"><i class="fa fa-phone" aria-hidden="true"></i></span>
					<span class="contact-address"><a href="tel:<?php echo get_field('tel_alo','option'); ?>"><?php echo get_field('sdt','option'); ?></a></span>
				</div>
				<div class="gdhomes-phone">
					<span class="contact-marker"><i class="fa fa-envelope" aria-hidden="true"></i></span>
					<span class="contact-address"><a href="mailto:<?php echo get_field('email_info','option'); ?>"><?php echo get_field('email_info','option'); ?></a></span>
				</div>			
			</div>
		</div>		
		<div class="row">
			<div class="col-md-6">
				<div class="big-contact">
					<h3 class="nhapthongtinlienhe">Nhập thông tin liên hệ</h3>
					<form name="frm_contact" action=""> 
						<div class="ck_contact"><input type="text" name="fullname" class="form-control" placeholder="Họ tên" required></div>
						<div class="ck_contact">
							<div class="contact-dt"><input type="text" name="phone" class="form-control" placeholder="Điện thoại" required></div>						
							<div class="contact-email"><input type="text" name="email" class="form-control" placeholder="Email" required></div>
							<div class="clr"></div>
						</div>						
						<div class="ck_contact"><input type="text" name="title" class="form-control" placeholder="Tiêu đề" required></div>				
						<div class="ck_contact">
							<textarea name="message" class="form-control" cols="30" rows="10" placeholder="Nhập nội dung" required=""></textarea>
						</div>
						<div class="ck_submit">
							<a href="javascript:void(0);" onclick="contactNow(this);">Gửi</a>
							<div class="ajax_loader_contact"></div>
							<div class="clr"></div>     
						</div>
						<div class="note">Cảm ơn đã đặt phòng tại khách sạn của chúng tôi . Chúng tôi sẽ liên hệ lại bạn trong thời gian sớm nhất.</div>     
					</form>					
				</div>
			</div>
			<div class="col-md-6">
				<div class="big-map">
					<?php echo get_field('google_map','option'); ?>
				</div>				
			</div>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>