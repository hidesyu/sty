<?php
/*
Template Name: ABOUT
*/
?>
<?php get_header(); ?>

<main id="main">

	<!-- <div class="illust illustMain">
		<div>
			<img src="<?#php echo get_theme_file_uri( '../img/about/img_illust_main.png') ?>" alt="">
		</div>
	</div> -->

	<h1 class="ttlMain">
		<span class="langEn"><span>ABOUT</span></span>
		<span class="langJp">STYについて</span>
	</h1>

	<section id="intro" class="section">
		<div class="inner">
			<div class="content animate">
				<h2 class="ttl animate">
					<?php the_field('main_copy_1'); ?>
					<br>
					<?php the_field('main_copy_2'); ?>
				</h2>
				<p class="animate">
					<?php the_field('main_text'); ?>
				</p>
			</div>
		</div>
	</section><!--/#intro-->

	<section id="outline" class="section">
		<div class="inner">
			<h2 class="sectionTtl animate">
				<span class="langEn">OUTLINE</span>
				<span class="langJp">代表概要</span>
			</h2>
			<div class="content animate">
				<div class="detail animate">
					<dl>
						<dt>代表者</dt>
						<dd>
							<?php the_field('ceo'); ?>
							<br class="sp">
						</dd>
					</dl>
					<dl>
						<dt>創業</dt>
						<dd><?php the_field('since'); ?></dd>
					</dl>
					<dl>
						<dt>設立</dt>
						<dd><?php the_field('established'); ?></dd>
					</dl>
					<dl>
						<dt>幹部</dt>
						<dd>
							<span class="position">
								<?php the_field('executive_1_position'); ?>
							</span>
							<?php the_field('executive_1_name'); ?>
							<br>
							<span class="position">
								<?php the_field('executive_2_position'); ?>
							</span>
							<?php the_field('executive_2_name'); ?>
							<br>
							<span class="position">
								<?php the_field('executive_3_position'); ?>
							</span>
							<?php the_field('executive_3_name'); ?>
						</dd>
					</dl>
					<dl>
						<dt>スタッフ</dt>
						<dd>
							<?php the_field('stuff_count'); ?>名（<?php the_field('current_stuff'); ?>現在
						</dd>
					</dl>
				</div>
				<!-- <div id="map" class="map"> -->
					<!-- <div class="mapBox animate clr"> -->
						<!--<div id="mapOsaka" class="mapCanvas"></div>-->
						<!-- <div id="" class="mapCanvas"> -->
							<!-- <iframe src="<?#php echo get_theme_file_uri( 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d328') ?>" width="620" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></div> -->
						<!-- <dl> -->
							<!-- <dt>デュッセルドルフ</dt>
							<dd>
								<address>
									40210<br>
									Immerman strase 61<br>
									Tel.0211 2345 3455
								</address>
								<p>Oststrase駅下車 徒歩4分<br>
									Oststrase駅下車 徒歩6分<br>
									Oststrase駅下車 徒歩6分<br>
									Oststrase駅下車 徒歩10分<br>
									JOststrase駅下車 徒歩11分</p>
							</dd>
						</!-->
					<!-- </div> -->
					<!-- <div class="mapBox animate clr"> -->
						<!--<div id="mapTokyo" class="mapCanvas"></div>-->
						<!-- <div id="" class="mapCanvas">
							<iframe src="<?#php echo get_theme_file_uri( 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3') ?>" width="620" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div> -->
						<!-- <dl>
							<dt>ベルリン</dt>
							<dd>
								<address>
									40210<br>
									Immerman strase 61<br>
									Tel.0211 2345 3455
								</address>
								<p>Oststrase駅下車 徒歩9分<br>
									Oststrase駅下車 徒歩9分<br>
									Oststrase駅下車 徒歩9分<br>
									Oststrase駅下車 徒歩9分<br>
									Oststrase駅下車 徒歩9分</p>
							</dd>
						</dl> -->
					<!-- </div> -->
				<!-- </div> -->
			</div>
		</div>
	</section><!--/#intro-->

		<section id="contactLower">
		<div class="inner clr">
			<h2 class="sectionTtl">
				<span class="langEn">CONTACT</span>
				<span class="langJp">コンタクト</span>
			</h2>
			<div class="information clr">
				<h3 class="ttl">STY</h3>
				<dl>
					<dt>Dusseldorf</dt>
					<dd>
						<!-- 40210<br> -->
						<!-- Immermanstrase 61 Dusseldorf<br> -->
						<ul>
							<li>Tel.<a class="telLink" href="tel:0663439327">0211 3434 5678</a></li>
							<!-- <li>Fax.06-6343-9328</li> -->
						</ul>
					</dd>
				</dl>
			</div>
			<div class="btnContact"><a href="/contact"><span class="btnInner"><span><i class="fas fa-envelope-open"></i>お問い合わせはこちら</span></span></a></div>
		</div>
	</section><!--/#contactLower-->

</main><!--/#main-->

<!-- footer start -->
<?php get_footer(); ?>
