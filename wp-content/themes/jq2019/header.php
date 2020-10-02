<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
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
				<?php if(!is_user_logged_in()): ?>
					<li><span class="fa fa-user" aria-hidden="true"></span> <a href="<?php echo wp_login_url(); ?>">Đăng nhập hệ thống</a></li>
				<?php endif; ?>	
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
				
						<h3>Chào mừng khách hàng đến với công ty <span>CÔNG TY TNHH MỘT THÀNH VIÊN DỤNG CỤ DU LỊCH JINQUAN VIỆT NAM</span></h3>
						<p>Jinquan là một trong những công ty thiết bị ngoài trời hàng đầu của Trung Quốc.</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="<?php echo get_permalink( get_page_by_path( 'gioi-thieu' ) ); ?>">Xem Giới thiệu</a>
						</div>
					</div>
			</div>
		</div>
	<!--//banner -->
	<?php endif; ?>