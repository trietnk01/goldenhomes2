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
	
<?php do_action('p_after_header') ; ?>
