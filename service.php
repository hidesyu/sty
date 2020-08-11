<?php
/*
Template Name: SERVICE
*/
?>
<?php get_header(); ?>

<main id="main">

	<!-- <div class="illust illustMain">
		<div>
			<img class="imgBase" src="<?#php echo get_theme_file_uri( '/img/service/img_illust_main.png') ?>" alt="">
			<img class="imgAnime imgAnime01" src="<?#php echo get_theme_file_uri( '/img/service/img_illust_main_anime01.gif') ?>" alt="">
			<img class="imgAnime imgAnime02" src="<?#php echo get_theme_file_uri( '/img/service/img_illust_main_anime02.gif') ?>" alt="">
			<img class="imgAnime imgAnime03" src="<?#php echo get_theme_file_uri( '/img/service/img_illust_main_anime03.gif') ?>" alt="">
		</div>
	</div> -->

	<h1 class="ttlMain">
		<span class="langEn"><span>SERVICE</span></span>
		<span class="langJp">サービス紹介</span>
	</h1>

	<section id="intro" class="section">
		<div class="inner">
			<div class="content animate">
				<h2 class="ttl animate">
					<?php the_field('main_copy_1'); ?>
					<br class="sp">
					<?php the_field('main_copy_2'); ?>
					<br>
					<?php the_field('main_copy_3'); ?>
				</h2>
				<p class="animate">
					<?php the_field('main_description'); ?>
				</p>
			</div>
		</div>
	</section><!--/#intro-->

	<section id="detail" class="section animate">
		<div class="inner">

			<ul class="tabBtn clr">
				<li id="tab01" class="plan active"><span><?php the_field('service_tab01'); ?><i></i></span></li>
				<li id="tab02" class="creative"><span><?php the_field('service_tab02'); ?><i></i></span></li>
				<li id="tab03" class="analyze"><span><?php the_field('service_tab03'); ?><i></i></span></li>
			</ul>

			<div id="plan" class="serviceContent tabContent">
				<div class="serviceContentHead">
					<h2 class="ttl01 animate">
						<span class="langEn">STUDY ABROAD SUPPORT</span>
						<span class="langJp">留学サポート</span>
					</h2>
					<p>
						<?php the_field('study_support_main_copy_1'); ?>
						<br class="pc">
						<?php the_field('study_support_main_copy_2'); ?>
					</p>
					<!-- <figure class="animate"><img src="<?#php echo get_theme_file_uri( '/img/index/img_service01.gif') ?>" alt=""></figure> -->
				</div>
				<div class="serviceContentBody">
					<section id="digitalContents" class="serviceContentBodySection layout01 clr animate">
						<figure><img src="<?php the_field('each_study_support_img_1'); ?>"></figure>
						<div class="description">
							<h3 class="ttl">
								<?php the_field('each_study_support_title_1'); ?>
							</h3>
							<p>
								<?php the_field('each_study_support_description_1'); ?>
							</p>
							<div class="btn"><a href="/service/language-school"><span>サービスの詳細はこちら</span><svg class="iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg></a></div>
						</div>
					</section>
					<section id="sns" class="serviceContentBodySection layout02 clr animate">
						<figure><img src="<?php the_field('each_study_support_img_2'); ?>"></figure>
						<div class="description">
							<h3 class="ttl">
								<?php the_field('each_study_support_title_2'); ?>
							</h3>
							<p>
								<?php the_field('each_study_support_description_2'); ?>
							</p>
							<div class="btn"><a href="/service/ballet"><span>サービスの詳細はこちら</span><svg class="iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg></a></div>
						</div>
					</section>
					<!-- <section id="ec" class="serviceContentBodySection layout03 clr animate">
						<figure><img src="<?#php echo get_theme_file_uri( '/img/service/img_plan03.jpg') ?>"></figure>
						<div class="description">
							<h3 class="ttl">
								<?#php the_field('each_study_support_title_3'); ?>
							</h3>
							<p>
								<?#php the_field('each_study_support_description_3'); ?>
							</p>
						</div>
					</section>
					<section id="advertisementPlanning" class="serviceContentBodySection layout02 clr animate">
						<figure><img src="<?#php echo get_theme_file_uri( '/img/service/img_plan04.jpg') ?>"></figure>
						<div class="description">
							<h3 class="ttl">
								<?#php the_field('each_study_support_title_4'); ?>
							</h3>
							<p>
								<?#php the_field('each_study_support_description_4'); ?>
							</p>
						</div>
					</section> -->
				</div>
			</div><!--/#plan-->

			<div id="creative" class="serviceContent tabContent">
				<div class="serviceContentHead">
					<h2 class="ttl01 animate">
						<span class="langEn">JOB SUPPORT</span>
						<span class="langJp">就職サポート</span>
					</h2>
					<p>
						<?php the_field('job_support_main_copy_1'); ?>
						<br class="pc">
						<?php the_field('job_support_main_copy_2'); ?>
					</p>
					<!-- <figure class="animate"><img src="<?#php echo get_theme_file_uri( '../img/index/img_service02.gif') ?>" alt=""></figure> -->
				</div>
				<div class="serviceContentBody">
					<section id="contentOperation" class="serviceContentBodySection layout03 clr animate">
						<figure><img src="<?php the_field('each_job_support_img_1'); ?>"></figure>
						<div class="description">
							<h3 class="ttl"><?php the_field('each_job_support_title_1'); ?></h3>
							<p>
								<?php the_field('each_job_support_description_1'); ?>
							</p>
							<!-- <div class="btn"><a href="../works/index.html#contentsOperation"><span>このサービスの事例紹介</span><svg class="iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg></a></div> -->
						</div>
					</section>
					<section id="advertisementOperation" class="serviceContentBodySection layout02 clr animate">
						<figure><img src="<?php the_field('each_job_support_img_2'); ?>" alt="広告の制作／運用"></figure>
						<div class="description">
							<h3 class="ttl"><?php the_field('each_job_support_title_2'); ?></h3>
							<p>
								<?php the_field('each_job_support_description_2'); ?>
							</p>
							<!-- <div class="btn"><a href="../works/index.html#advertisementOperation"><span>このサービスの事例紹介</span><svg class="iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg></a></div> -->
						</div>
					</section>
				</div>
			</div><!--/#creative-->

			<div id="analyze" class="serviceContent tabContent">
				<div class="serviceContentHead">
					<h2 class="ttl01 animate">
						<span class="langEn">OTHER SUPPORT</span>
						<span class="langJp">手続きサポート</span>
					</h2>
					<p>
						<?php the_field('process_support_main_copy_1'); ?>
						<br class="pc">
						<?php the_field('process_support_main_copy_2'); ?>
					</p>
					<!-- <figure class="animate"><img src="<?#php echo get_theme_file_uri( '../img/index/img_service03.gif') ?>" alt=""></figure> -->
				</div>
				<div class="serviceContentBody">
					<section id="accessAnalysis" class="serviceContentBodySection layout03 clr animate">
						<figure><img src="<?php the_field('each_process_support_img_1'); ?>"></figure>
						<div class="description">
							<h3 class="ttl"><?php the_field('each_process_support_title_1'); ?></h3>
							<p>
								<?php the_field('each_process_support_description_1'); ?>
							</p>
						</div>
					</section>
					<section id="ui" class="serviceContentBodySection layout02 clr animate">
						<figure><img src="<?php the_field('each_process_support_img_2'); ?>"></figure>
						<div class="description">
							<h3 class="ttl"><?php the_field('each_process_support_title_2'); ?></h3>
							<p>
								<?php the_field('each_process_support_description_2'); ?>
							</p>
						</div>
					</section>
					<!-- <section id="advertisementMeasurement" class="serviceContentBodySection layout03 clr animate">
						<figure><img src="<?#php echo get_theme_file_uri( '/img/service/img_analyze03.jpg') ?>"></figure>
						<div class="description">
							<h3 class="ttl"><?#php the_field('each_process_support_title_3'); ?></h3>
							<p>
								<?#php the_field('each_process_support_description_3'); ?>
							</p>
						</div>
					</section> -->
				</div>
			</div><!--/#analyze-->

		</div>
	</section><!--/#list-->


		<section id="contactLower">
		<div class="inner clr">
			<h2 class="sectionTtl">
				<span class="langEn">CONTACT</span>
				<span class="langJp">コンタクト</span>
			</h2>
			<div class="information clr">
				<h3 class="ttl">STY</h3>
				<dl>
					<dt>Duesseldorf</dt>
					<dd>
						<!-- 40210<br> -->
						<!-- Immermanstrase 61 Dusseldorf<br> -->
						<ul>
							<li>Tel.<a class="telLink" href="tel:0663439327">0211 3456 56543</a></li>
							<!-- <li>Fax.06-6343-9328</li> -->
						</ul>
					</dd>
				</dl>
			</div>
			<div class="btnContact"><a href="/contact/"><span class="btnInner"><span><i class="fas fa-envelope-open"></i>お問い合わせはこちら</span></span></a></div>
		</div>
	</section><!--/#contactLower-->

</main><!--/#main-->

<!-- footer start -->
<?php get_footer(); ?>
