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
				<div class="gdhomes">Golden Homes</div>
				<div class="gdhomes-address">
					<span class="contact-marker"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
					<span class="contact-address"><a href="javascript:void(0);">42/1 Đường 17, P. Hiệp Bình Chánh, Q. Thủ Đức, TP.HCM</a></span>
				</div>
				<div class="gdhomes-phone">
					<span class="contact-marker"><i class="fa fa-phone" aria-hidden="true"></i></span>
					<span class="contact-address"><a href="javascript:void(0);">0903 600 002</a></span>
				</div>
				<div class="gdhomes-phone">
					<span class="contact-marker"><i class="fa fa-envelope" aria-hidden="true"></i></span>
					<span class="contact-address"><a href="javascript:void(0);">nguyenbaotuoc@gmail.com</a></span>
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
							<a href="javascript:void(0);" onclick="contactNow();">Gửi</a>
							<div class="ajax_loader_contact"></div>
							<div class="clr"></div>     
						</div>
						<div class="note">Cảm ơn đã đặt phòng tại khách sạn của chúng tôi . Chúng tôi sẽ liên hệ lại bạn trong thời gian sớm nhất.</div>     
					</form>					
				</div>
			</div>
			<div class="col-md-6">
				<div class="big-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d979.7064806422777!2d106.71669060451067!3d10.824630183217087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528840ad6001d%3A0x336a848831cb177f!2zxJDGsOG7nW5nIFPhu5EgMTcsIEhp4buHcCBCw6xuaCBDaMOhbmgsIFRo4bunIMSQ4bupYywgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1546076659991" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>				
			</div>
		</div>
	</div>
</div>
<?php
get_footer(); 
?>