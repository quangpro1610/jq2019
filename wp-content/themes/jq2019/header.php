<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>Jinquan Travelling Goods</title>
	<!--/tags -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<!--//tags -->
	<?php wp_head();?>
</head>
<body>
	<!-- header -->
	<div class="agileits_top_menu">
		<div class="w3l_header_left">
				<ul>
					<li><span class="fa fa-phone" aria-hidden="true"></span> +456 123 7890</li>
					<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="mailto:info@example.com">info@example.com</a></li>
				</ul>
			</div>
			<div class="w3l_header_right">
				<div class="w3ls-social-icons text-left">
					<a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
					<a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
					<a class="pinterest" href="#"><span class="fa fa-pinterest"></span></a>
					<a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="content white agile-info">
			<div class="container-fluid">	
				<nav class="mnu navbar-light">
					<div class="logo" id="logo">
						<h1><a href="<?php echo get_home_url();?>">Jinquan Travelling Goods</a></h1>
					</div>
					<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
					<input type="checkbox" id="drop">
					<?php wp_nav_menu(array(
						'menu' => 'primary'
					)); ?>
				</nav>
			</div>
		</div>
	<?php if ( is_front_page() ): ?>	
	<!-- banner -->
	<div class="banner">
			<div class="container">
					<div class="carousel-caption">
				
						<h3>Chào mừng khách hàng đến với công ty <span>Jinquan Travelling Goods VN</span></h3>
						<p>Any successful career starts with good Industrial. Together with us you will have deeper knowledge of the subjects</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="<?php echo get_permalink( get_page_by_path( 'gioi-thieu' ) ); ?>">Xem Giới thiệu</a>
						</div>
					</div>
			</div>
		</div>
	<!--//banner -->
	<?php endif; ?>