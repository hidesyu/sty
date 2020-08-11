<?php
/*
Template Name: TOP
*/
?>
<?php get_header(); ?>

<main id="main">
	<section id="about" class="section">
		<div class="inner clr">
			<div class="paperplane">
				<div>
					<!-- <img src="<?#php echo get_theme_file_uri( '/img/index/img_paperplane.svg') ?>" alt=""> -->
				</div>
			</div>
			<!-- <div class="illust illust01">
				<div>
					<img src="<#?php echo get_theme_file_uri( '/img/index/img_illust01.png') ?>" alt="">
				</div>
			</div> -->
			<!-- <div class="illust illust02">
				<div>
					<img src="<?#php echo get_theme_file_uri( '/img/index/img_illust02.png') ?>" alt="">
					<img class="anime01" src="<?#php echo get_theme_file_uri( '/img/index/img_illust02_anime01.gif') ?>" alt="">
				</div>
			</div> -->

			<div class="box">
				<h2 class="sectionTtl">
					<span class="langEn">
						<span class="block"><?php the_field('main_copy_1'); ?></span>
						<span class="block"><?php the_field('main_copy_2'); ?></span>
						<span class="block"><?php the_field('main_copy_3'); ?></span>
					</span>
					<span class="langJp"><?php the_field('main_copy_sub_1'); ?></span>
				</h2>
				<!-- <p>Abroad Study Support Company<br>STY Since2020.</p> -->
				<div class="btn"><a href="/about/"><span>ABOUT</span><svg class="iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg></a></div>
			</div>
		</div>
	</section><!--/#about-->

	<section id="service" class="section animate change01">
		<div class="inner clr">
			<div class="box">
				<h2 class="sectionTtl">
					<span class="langEn">SERVICE</span>
					<span class="langJp">サービス紹介</span>
				</h2>
				<p class="lead"><?php the_field('service_main_copy_1'); ?><br class="tb">
				<?php the_field('service_main_copy_2'); ?></p>
			</div>
			<svg class="sliderLine" version="1.1" x="0px" y="0px" width="460px" height="460px" viewBox="0 0 460 460">
				<circle class="bg" cx="230" cy="230" r="229"/>
				<circle class="change" cx="230" cy="230" r="229"/>
			</svg>
			<div class="slider">
				<div class="slide slide01">
					<div class="slideDetail">
						<!-- <figure><img src="<?#php echo get_theme_file_uri( '/img/index/img_service01.gif') ?>" alt=""></figure> -->
						<div class="slideTxt">
							<h3 class="ttl"><?php the_field('service_titile_1'); ?></h3>
							<p>
								<?php the_field('service_copy_1-1'); ?>
								<br>
								<?php the_field('service_copy_1-2'); ?>
								<br>
								<?php the_field('service_copy_1-3'); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="slide slide02">
					<div class="slideDetail">
						<!-- <figure><img src="<?#php echo get_theme_file_uri( '/img/index/img_service01.gif') ?>" alt=""></figure> -->
						<div class="slideTxt">
							<h3 class="ttl"><?php the_field('service_titile_2'); ?></h3>
							<p>
								<?php the_field('service_copy_2-1'); ?>
								<br>
								<?php the_field('service_copy_2-2'); ?>
								<br>
								<?php the_field('service_copy_2-3'); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="slide slide03">
					<div class="slideDetail">
						<!-- <figure><img src="<?#php echo get_theme_file_uri( '/img/index/img_service01.gif') ?>" alt=""></figure> -->
						<div class="slideTxt">
							<h3 class="ttl"><?php the_field('service_titile_3'); ?></h3>
							<p>
								<?php the_field('service_copy_3-1'); ?>
								<br>
								<?php the_field('service_copy_3-2'); ?>
								<br>
								<?php the_field('service_copy_3-3'); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="slide slide04">
					<div class="slideDetail">
						<!-- <figure><img src="<?#php echo get_theme_file_uri( '/img/index/img_service01.gif') ?>" alt=""></figure> -->
						<div class="slideTxt">
							<h3 class="ttl"><?php the_field('service_titile_4'); ?></h3>
							<p>
								<?php the_field('service_copy_4-1'); ?>
								<br>
								<?php the_field('service_copy_4-2'); ?>
								<br>
								<?php the_field('service_copy_4-3'); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="slide slide05">
					<div class="slideDetail">
						<!-- <figure><img src="<?#php echo get_theme_file_uri( '/img/index/img_service02.gif') ?>" alt=""></figure> -->
						<div class="slideTxt">
							<h3 class="ttl"><?php the_field('service_titile_5'); ?></h3>
							<p>
								<?php the_field('service_copy_5-1'); ?>
								<br>
								<?php the_field('service_copy_5-2'); ?>
								<br>
								<?php the_field('service_copy_5-3'); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="slide slide06">
					<div class="slideDetail">
						<!-- <figure><img src="<?#php echo get_theme_file_uri( '/img/index/img_service02.gif') ?>" alt=""></figure> -->
						<div class="slideTxt">
							<h3 class="ttl"><?php the_field('service_titile_6'); ?></h3>
							<p>
								<?php the_field('service_copy_6-1'); ?>
								<br>
								<?php the_field('service_copy_6-2'); ?>
								<br>
								<?php the_field('service_copy_6-3'); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="slide slide07">
					<div class="slideDetail">
						<!-- <figure><img src="<?#php echo get_theme_file_uri( '/img/index/img_service03.gif') ?>" alt=""></figure> -->
						<div class="slideTxt">
							<h3 class="ttl"><?php the_field('service_titile_7'); ?></h3>
							<p>
								<?php the_field('service_copy_7-1'); ?>
								<br>
								<?php the_field('service_copy_7-2'); ?>
								<br>
								<?php the_field('service_copy_7-3'); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="slide slide08">
					<div class="slideDetail">
						<!-- <figure><img src="<?#php echo get_theme_file_uri( '/img/index/img_service03.gif') ?>" alt=""></figure> -->
						<div class="slideTxt">
							<h3 class="ttl"><?php the_field('service_titile_8'); ?></h3>
							<p>
								<?php the_field('service_copy_8-1'); ?>
								<br>
								<?php the_field('service_copy_8-2'); ?>
								<br>
								<?php the_field('service_copy_8-3'); ?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="btn btnWhite"><a href="/service/"><span>サービス一覧</span><svg class="iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg></a></div>
		</div>
	</section><!--/#service-->

	<div class="sectionWrap">
		<!-- <div class="illust illust03">
			<div>
				<img class="pc" src="<?#php echo get_theme_file_uri( '/img/index/img_illust03.png') ?>" alt="">
				<img class="sp" src="<?#php echo get_theme_file_uri( '/img/index/img_illust03_sp.png') ?>" alt="">
				<img class="anime01" src="<?#php echo get_theme_file_uri( '/img/index/img_illust03_anime01.gif') ?>" alt="">
				<img class="anime02" src="<?#php echo get_theme_file_uri( '/img/index/img_illust03_anime02.gif') ?>" alt="">
				<img class="anime03" src="<?#php echo get_theme_file_uri( '/img/index/img_illust03_anime03.gif') ?>" alt="">
				<img class="anime04" src="<?#php echo get_theme_file_uri( '/img/index/img_illust03_anime04.gif') ?>" alt="">
				<img class="anime05" src="<?#php echo get_theme_file_uri( '/img/index/img_illust03_anime05.gif') ?>" alt="">
			</div>
		</div> -->
		<!-- <div class="illust illust04">
			<div>
				<img src="<?#php echo get_theme_file_uri( '/img/index/img_illust04.png') ?>" alt="">
				<img class="anime01" src="<?#php echo get_theme_file_uri( '/img/index/img_illust04_anime01.gif') ?>" alt="">
			</div>
		</div> -->

		<!--<section id="casestudy" class="section animate">
			<div class="inner clr">
				<div class="box">
					<h2 class="sectionTtl">
						<span class="langEn">CASE STUDY</span>
						<span class="langJp">解決事例</span>
					</h2>
					<p class="lead">デジタルマーケティングに関わるどのような課題でも、<br>
						ワンストップで解決するソリューションを<br class="sp">用意しております。</p>
					<div class="solution clr">
						<div class="solutionBox solution01">
							<div class="balloon">
								<h3 class="solutionTtl"><i class="fas fa-tag"></i>戦略立案</h3>
								<p>最近クライアントからソーシャルメディア関連のお問い合わせが多いが、対応するための知見が社内に不足している。</p>
							</div>
							<div class="btnLink"><a href="#"><span>解決策を見る<i></i></span></a></div>
						</div>
						<div class="solutionBox solution02">
							<div class="balloon">
								<h3 class="solutionTtl"><i class="fas fa-tag"></i>制作・運用</h3>
								<p>ソーシャルメディア分野の実証的なデータや、研究結果の事例が不足している。情報交換できる事業会社はないか。</p>
							</div>
							<div class="btnLink"><a href="#"><span>解決策を見る<i></i></span></a></div>
						</div>
						<div class="solutionBox solution03">
							<div class="balloon">
								<h3 class="solutionTtl"><i class="fas fa-tag"></i>検証・分析</h3>
								<p>システムやデザインという専門分野からはずれたソーシャルメディアの案件が増えているが、そこまで手が回らない。</p>
							</div>
							<div class="btnLink"><a href="#"><span>解決策を見る<i></i></span></a></div>
						</div>
					</div>
				</div>
			</div>
		</section>--><!--/#casestudy-->

		<!-- <section id="works" class="section animate">
			<div class="inner clr">
				<div class="box">
					<h2 class="sectionTtl">
						<span class="langEn">WORKS</span>
						<span class="langJp">実績紹介</span>
					</h2>
					<p class="lead">
						<?#php the_field('works_copy_1'); ?>
						<br>
						<?#php the_field('works_copy_2'); ?>
					</p>
					<div class="btn"><a href="/works/"><span>実績一覧</span><svg class="iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg></a></div>
				</div>
			</div>
		</section> -->
		<!--/#works-->

		<!-- <div id="gallery">
			<ul class="clr">
				<li><img src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="暮らしあと押しeo"></li>
				<li><img src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="大阪国際大学"></li>
				<li><img src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="KTC KYOTO TOOL"></li>
				<li><img src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="KURABO"></li>
				<li><img src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="Coleman"></li>
				<li><img src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="スシロー"></li>
				<li><img src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="人とモノの間に。TANAX"></li>
				<li><img src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="ytv"></li>

				<li><img src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="暮らしあと押しeo"></li>
				<li><img src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="大阪国際大学"></li>
				<li><img src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="KTC KYOTO TOOL"></li>
				<li><img src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="KURABO"></li>
				<li><img src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="Coleman"></li>
				<li><img src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="スシロー"></li>
				<li><img src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="人とモノの間に。TANAX"></li>
				<li><img src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="ytv"></li>
			</ul>
		</div> -->
		<!--/#gallery-->

		<section id="contact">
			<div class="inner clr">
				<div class="box">
					<h2 class="sectionTtl">
						<span class="langEn">CONTACT</span>
						<span class="langJp">コンタクト</span>
					</h2>
					<div class="btnContact"><a href="/contact/"><span class="btnInner"><span><i class="fas fa-envelope-open"></i>お問い合わせはこちら</span></span></a></div>
					<div class="information clr">
						<h3 class="ttl">STY</h3>
						<dl>
							<dt>Duesseldorf</dt>
							<dd>
								<!-- 40211<br> -->
								<!-- Immermanstrase 41 Duesseldorf<br> -->
								<ul>
									<li>Tel.<a class="telLink" href="tel:0663439327">0120-211-211</a></li>
									<!-- <li>Fax.06-6343-9328</li> -->
								</ul>
							</dd>
						</dl>
						<!-- <dl>
							<dt>Duesseldorf</dt>
							<dd>40211<br>
								Immermanstrase 41 Duesseldorf<br>
								<ul>
									<li>Tel.<a class="telLink" href="tel:0364169208">0120-211-211</a></li>
								</ul>
							</dd>
						</dl> -->
					</div>
				</div>
			</div>
		</section><!--/#contact-->

	</div><!--/.sectionWrap-->

	<!-- <div class="btmWrap"> -->
		<!-- <div class="inner clr"> -->

			<!-- <section id="news">
				<div class="newsHeader">
					<h2 class="sectionTtl">
						<span class="langEn">NEWS</span>
						<span class="langJp">新着情報</span>
					</h2>
					<div class="btn"><a href="/news/"><span>一覧</span><svg class="iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg></a></div>
				</div>
				<div class="newList scrollbar">
					<ul>
						<li><a href="/news/2018/01.html"><span class="time">2020.02.20</span><span class="txt">○○のお知らせ</span></a></li>
					</ul>
				</div>
			</section> -->
			<!--/#news-->

			<!-- <aside id="relation" class="clr">
				<h3 class="ttl">関連サイト</h3>
				<ul class="clr">
					<li class="btnLink">
						<a href="/" target="_blank">
							<img class="logoGpol" src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="Sample Gmbh.">
							<span>Sample Gmbh.<i></i></span>
						</a>
					</li>
					<li class="btnLink">
						<a href="/" target="_blank">
							<img class="logoTongullman" src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="Sample Gmbh.">
							<span>Sample Gmbh.<i></i></span>
						</a>
					</li>
					<li class="btnLink">
						<a href="/" target="_blank">
							<img class="logoMegafoon" src="<?#php echo get_theme_file_uri( '/img/common/logo01.png') ?>" alt="Sample Gmbh.">
							<span>Sample Gmbh.<i></i></span>
						</a>
					</li>
				</ul>
			</aside> -->
			<!--/#relation-->

		<!-- </div> -->
	<!-- </div>/.btmWrap -->

</main><!--/#main-->

<!-- footer start -->
<?php get_footer(); ?>
