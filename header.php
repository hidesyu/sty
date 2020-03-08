<!DOCTYPE html>
<html lang="ja">
<!-- <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#"> -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon.png">
<title>STY | 留学で生まれる最高の仲間との出会い</title>
<meta name="description" content="つながる科学研究所は、FacebookやTwitterなどのSNSの運用代行など、企業のソーシャルメディアマーケティングを支援する組織です。">
<meta name="keywords" content="つながる科学研究所,つな研,ソーシャルメディアマーケティング,SNS運用">
<!--OGP-->

<!--共通js-->
<script src="<?php echo get_theme_file_uri( '/js/jquery-3.0.0.min.js') ?>"></script>
<script src="<?php echo get_theme_file_uri( '/js/jquery.matchHeight.js') ?>"></script>
<script src="<?php echo get_theme_file_uri( '/js/jquery.mCustomScrollbar.js') ?>"></script>
<script src="<?php echo get_theme_file_uri( '/js/common.js') ?>"></script>
<!--共通css-->
<link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.0.6/css/all.css">
<link rel="stylesheet" href="<?php echo get_theme_file_uri( '/css/default.css') ?>">
<link rel="stylesheet" href="<?php echo get_theme_file_uri( '/css/base.css') ?>">
<link rel="stylesheet" href="<?php echo get_theme_file_uri( '/css/jquery.mCustomScrollbar.css') ?>">

<?php if ( is_home() || is_front_page() ) : ?>
	<!--ページjs-->
	<script src="<?php echo get_theme_file_uri( '/js/slick.js') ?>"></script>
	<script src="<?php echo get_theme_file_uri( '/js/index.js') ?>"></script>
	<!--ページcss-->
	<link rel="stylesheet" href="<?php echo get_theme_file_uri( '/css/slick.css') ?>">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri( '/css/index.css') ?>">
<?php endif; ?>

<?php if ( is_page( 'about' ) ): ?>
	<!--ページjs-->
	<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSy" charset="UTF-8"></script> -->
	<script src="/js/about.js"></script>
	<!--ページcss-->
	<link rel="stylesheet" href="<?php echo get_theme_file_uri( '/css/about.css') ?>">
<?php endif; ?>

<?php if ( is_page( 'service' ) ): ?>
	<!--ページjs-->
	<script src="<?php echo get_theme_file_uri( '/js/service.js') ?>"></script>
	<!--ページcss-->
	<link rel="stylesheet" href="<?php echo get_theme_file_uri( '/css/service.css') ?>">
<?php endif; ?>

<?php if ( is_page( 'works' ) ): ?>
<!--ページjs-->
<script src="<?php echo get_theme_file_uri( '/js/slick.js') ?>"></script>
<script src="<?php echo get_theme_file_uri( '/js/works.js') ?>"></script>
<!--ページcss-->
<link rel="stylesheet" href="<?php echo get_theme_file_uri( '/css/slick.css') ?>">
<link rel="stylesheet" href="<?php echo get_theme_file_uri( '/css/works.css') ?>">
<?php endif; ?>

<?php if ( is_page( 'contact' ) ): ?>
<!--ページjs-->
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyB" charset="UTF-8"></script> -->
<script src="<?php echo get_theme_file_uri( '/js/contact.js') ?>"></script>
<!--ページcss-->
<link rel="stylesheet" href="<?php echo get_theme_file_uri( '/css/contact.css') ?>">
<?php endif; ?>



<!-- Google Tag Manager -->
<!-- End Google Tag Manager -->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<!-- End Google Tag Manager (noscript) -->

<?php if ( is_home() || is_front_page() ) : ?>
	<div class="splash">
		<div class="bg"></div>
		<div class="logo"><img src="<?php echo get_theme_file_uri( '/img/common/logo01.svg') ?>" alt="つながる科学研究所株式会社"></div>
		<div class="paperplane">
			<div>
				<img src="<?php echo get_theme_file_uri( '/img/index/img_paperplane.svg') ?>" alt="">
				<div class="bubblesWrap"><div class="bubbles"></div></div>
			</div>
		</div>
	</div><!--/.splash-->
<?php endif; ?>

<div id="wrapper" class="index">

<header id="header">
	<h1 class="logo"><a href="/">最高の仲間と出会える留学を</a></h1>
	<div class="btnMenu">
		<div>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<nav id="globalNav">
		<div id="globalNavInner">
			<ul>
				<li class="about"><a href="/about/"><span>ABOUT</span></a></li>
				<li class="service"><a href="/service/"><span>SERVICE</span></a></li>
				<li class="works"><a href="/works/"><span>WORKS</span></a></li>
				<!-- <li class="recruit"><a href="/recruit/"><span>RECRUIT</span></a></li> -->
				<!-- <li class="facebook"><a href="/" target="_blank"><span><svg class="iconFacebook"><use xlink:href="#iconFacebook"></use></svg>Facebook</span></a></li> -->
				<li class="facebook"><a href="/" target="_blank"><span><svg class="icon-instagram"><use xlink:href="#icon-instagram"></use></svg>Instagram</span></a></li>
				<li class="contact"><a href="/contact/"><span><i class="fas fa-envelope"></i>CONTACT</span></a></li>
			</ul>
		</div>
	</nav>
	<div id="bgGlobalNav"></div>
</header><!--/#header-->
