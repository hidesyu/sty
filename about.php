<?php
/*
Template Name: ABOUT
*/
?>
<?php get_header(); ?>

<main id="main">

	<div class="illust illustMain">
		<div>
			<img src="<?php echo get_theme_file_uri( '../img/about/img_illust_main.png') ?>" alt="">
		</div>
	</div>

	<h1 class="ttlMain">
		<span class="langEn"><span>ABOUT</span></span>
		<span class="langJp">STYについて</span>
	</h1>

	<section id="intro" class="section">
		<div class="inner">
			<div class="content animate">
				<h2 class="ttl animate">タイトルタイトルタイトルタイトル<br>タイトルタイトルタイトルタイトル</h2>
				<p class="animate">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
					テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
					テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br class="pc">
					テキストテキストテキストテキストテキスト<br>
					テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br class="pc">
					テキストテキストテキストテキストテキストテキストテキストテキスト</p>

				<p class="animate">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
					テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト<br>
					テキストテキストテキストテキストテキストテキストテキストテキスト<br>
					テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
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
						<dd>STY<br class="sp"></dd>
					</dl>
					<dl>
						<dt>創業</dt>
						<dd>2020年3月4日</dd>
					</dl>
					<dl>
						<dt>設立</dt>
						<dd>2020年3月4日</dd>
					</dl>
					<dl>
						<dt>幹部</dt>
						<dd>
							<span class="position">代表</span>山田&nbsp;太郎<br>
							<span class="position">代表</span>山田&nbsp;太郎<br>
							<span class="position">代表</span>山田&nbsp;太郎
						</dd>
					</dl>
					<dl>
						<dt>スタッフ</dt>
						<dd>10名（2020年3月現在）</dd>
					</dl>
				</div>
				<div id="map" class="map">
					<div class="mapBox animate clr">
						<!--<div id="mapOsaka" class="mapCanvas"></div>-->
						<div id="" class="mapCanvas">
							<iframe src="<?php echo get_theme_file_uri( 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d328') ?>" width="620" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></div>
						<dl>
							<dt>デュッセルドルフ</dt>
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
						</dl>
					</div>
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
				</div>
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
				<h3 class="ttl">つながる科学研究所株式会社</h3>
				<dl>
					<dt>OSAKA</dt>
					<dd>〒530-0004<br>
						大阪市北区堂島浜2-2-28堂島アクシスビル 3F<br>
						<ul>
							<li>Tel.<a class="telLink" href="tel:0663439327">06-6343-9327</a></li>
							<li>Fax.06-6343-9328</li>
						</ul>
					</dd>
				</dl>
				<dl>
					<dt>TOKYO</dt>
					<dd>〒150-0041<br>
						東京都渋谷区神南1-6-6 OZAWA BUILDING 5F<br>
						<ul>
							<li>Tel.<a class="telLink" href="tel:0364169208">03-6416-9208</a></li>
							<li>Fax.03-6416-9209</li>
						</ul>
					</dd>
				</dl>
			</div>
			<div class="btnContact"><a href="../contact/index.html"><span class="btnInner"><span><i class="fas fa-envelope-open"></i>お問い合わせはこちら</span></span></a></div>
		</div>
	</section><!--/#contactLower-->

</main><!--/#main-->

<!-- footer start -->
<?php get_footer(); ?>
