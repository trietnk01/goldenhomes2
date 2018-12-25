<?php unset( $_GET['q'] ); global $acf_pr;  $acf_pr = p_var_ar("acf_pr"); ?>
<!DOCTYPE html>
<html <?php language_attributes() ?> data-user-agent="<?php echo $_SERVER['HTTP_USER_AGENT'] ?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="icon" href="<?php echo p_acf_o("logo_favicon") ? p_acf_o("logo_favicon") : P_IMG  . '/wp.png' ?>" sizes="16x16" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<?php if ( is_singular() && pings_open( get_queried_object())) { ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php } ?>
	<!-- Yoast seo build title,description. (No code title,des,keywords)  -->
	<?php wp_head(); ?>

	
	<?php if( !is_localhost() ) { //  google analytics ?> 
	
	
	<?php } ?>

	<?php do_action("p_add_code_head") ?>
	
</head>
<body <?php body_class() ?> id="body-top">
	<div class="header-top">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tuvan-hotline-email-box">
						<div class="user-box">
							<div><img src="<?php echo P_IMG."/user.png"; ?>"></div>
							<div>Tư vấn 24/7</div>
							<div class="clr"></div>
						</div>
						<div class="phone-box">
							<div><i class="fa fa-phone" aria-hidden="true"></i></div>
							<div><a href="tel:<?php echo get_field('tel_alo','option'); ?>"><?php echo get_field('sdt','option'); ?></a></div>
							<div class="clr"></div>
						</div>
						<div class="email-box">
							<div><i class="fa fa-envelope" aria-hidden="true"></i></div>
							<div><a href="mailto:<?php echo get_field('email_info','option'); ?>"><?php echo get_field('email_info','option'); ?></a></div>
							<div class="clr"></div>
						</div>
						<div class="clr"></div>
					</div>
					<div class="social-box">
						<div>Theo dõi:</div>
						<div>
							<?php 
							$source_social=get_field('op_inf_sn_repeat','option');				
							if(count(@$source_social) > 0){
								?>
								<ul class="social_lst">
									<li>
										<a href="<?php echo @$source_social[0]['op_inf_sn_repeat_link']; ?>" title="tiêu đề tên" target="_blank" rel="nofollow">
											<i class="fa fa-facebook" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="<?php echo @$source_social[1]['op_inf_sn_repeat_link']; ?>" title="tiêu đề tên" target="_blank" rel="nofollow">
											<i class="fa fa-twitter" aria-hidden="true"></i>
										</a>
									</li>
									<li>
										<a href="<?php echo @$source_social[2]['op_inf_sn_repeat_link']; ?>" title="tiêu đề tên" target="_blank" rel="nofollow">
											<i class="fa fa-youtube-play" aria-hidden="true"></i>
										</a>
									</li>					
									<li>
										<a href="<?php echo @$source_social[3]['op_inf_sn_repeat_link']; ?>" title="tiêu đề tên" target="_blank" rel="nofollow">
											<i class="fa fa-google-plus" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
								<?php
							}
							?>
						</div>
						<div class="clr"></div>
					</div>
					<div class="clr"></div>
				</div>
			</div>
		</div>
	</div>	
<?php do_action('p_after_header') ; ?>
