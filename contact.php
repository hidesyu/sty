<?php
/*
Template Name: CONTACT
*/
?>
<?php get_header(); ?>

<main id="main">

	<!-- <div class="illust illustMain">
		<div>
			<img class="imgBase" src="<?#php echo get_theme_file_uri( '../img/contact/img_illust_main.png') ?>" alt="">
			<img class="imgAnime imgAnime01" src="<?#php echo get_theme_file_uri( '/img/contact/img_illust_main_anime01.gif') ?>" alt="">
			<img class="imgAnime imgAnime02" src="<?#php echo get_theme_file_uri( '/img/contact/img_illust_main_anime02.gif') ?>" alt="">
			<img class="imgAnime imgAnime03" src="<?#php echo get_theme_file_uri( '/img/contact/img_illust_main_anime03.gif') ?>" alt="">
		</div>
	</div> -->

	<h1 class="ttlMain">
		<span class="langEn"><span>CONTACT</span></span>
		<span class="langJp">お問い合わせ</span>
	</h1>

	<section id="formContact" class="section">
		<div class="inner">

			<form method="post" action="./">
			<input type="hidden" name="action" value="confirm" />
			<input type="hidden" name="token" value="2d95111f0c67fef9d1ca7dc97f53c052" />


			<div class="content animate">
				<p class="lead">サービスのお見積もりやご相談の依頼は無料です。<br>以下のフォームに必要事項をご記入いただき、お気軽にお問い合わせください</p>
				<p>後日、担当からご連絡差し上げます。</p>
				<dl class="inquiryBox">
					<dt><i class="fas fa-phone fa-flip-horizontal"></i>お急ぎの場合は下記の電話番号に<br class="sp">お問い合わせください。</dt>
					<dd>
						<ul class="clr">
							<li><span>代表</span><a class="telLink" href="tel:0211322342323">0211 3233 44432</a></li>
							<!-- <li><span>地域</span><a class="telLink" href="tel:03-6416-9208">0211 3234 5343</a></li> -->
						</ul>
					</dd>
				</dl>
				<div class="formGroup">
					<div class="formGroupTitle">
						<label>お問い合わせの種類<span class="required">必須</span></label>
					</div>
					<div class="formGroupDetail">
						<div class="checkBoxWrap">
							<div class="checkBox">
								<input type="checkbox" name="contact_check[1]" value="1" id="formContactType01"  >
								<label for="formContactType01">お見積りのご依頼</label>
							</div>
							<div class="checkBox">
								<input type="checkbox" name="contact_check[2]" value="2" id="formContactType02"  >
								<label for="formContactType02">サービスに関するお問い合わせ</label>
							</div>
							<div class="checkBox">
								<input type="checkbox" name="contact_check[3]" value="3" id="formContactType03"  >
								<label for="formContactType03">その他のお問い合わせ</label>
							</div>
						</div>
					</div>
				</div>
				<div class="formGroup">
					<div class="formGroupTitle">
						<label for="formCompany">会社名<span class="required">必須</span></label>
					</div>
					<div class="formGroupDetail">
						<input type="text" id="company_name" name="company_name" value="">
					</div>
				</div>
				<div class="formGroup">
					<div class="formGroupTitle">
						<label for="formFirstName" >お名前<span class="required">必須</span></label>
					</div>
					<div class="formGroupDetail">
						<div class="formName">
							<input type="text" id="name_sei" name="name_sei" value="" placeholder="姓">
						</div>
						<div class="formName">
							<input type="text" id="name_mei" name="name_mei" value="" placeholder="名">
						</div>
					</div>
				</div>
				<div class="formGroup">
					<div class="formGroupTitle">
						<label for="formMail">メールアドレス<span class="required">必須</span></label>
					</div>
					<div class="formGroupDetail">
						<input type="email" id="email" name="email"  value="">
					</div>
				</div>
				<div class="formGroup">
					<div class="formGroupTitle">
						<label for="formPhone">電話番号（半角）<span class="required">必須</span></label>
					</div>
					<div class="formGroupDetail">
						<input type="tel" id="tel" name="tel"  value="">
					</div>
				</div>
				<div class="formGroup">
					<div class="formGroupTitle">
						<label for="formContent">お問い合わせ内容<span>任意</span></label>
					</div>
					<div class="formGroupDetail">
						<textarea placeholder="お急ぎの場合はお客さまの情報のみご記入いただき送信してください。" name="text" id="text"></textarea>
					</div>
				</div>
				<div class="formGroup rules">
					<dl>
						<dt>ご送信の前に、必ず「<a href="/privacypolicy" target="_blank">個人情報保護方針</a>」を<br class="sp">お読みのうえ、ご同意願います。</dt>
						<dd>
							<div class="checkBox">
								<input type="checkbox" name="checkSubmit" id="formContactType04" >
								<label for="formContactType04">個人情報の取り扱いについて、同意する</label>
							</div>
						</dd>
					</dl>
				</div>
				<div class="btn btnForm btnSubmit btnBlack"><button id="confirm_next" value="入力内容を確認" disabled><span>メールを送信</span><svg class="iconArrowRight"><use xlink:href="#iconArrowRight"></use></svg></button></div>
			</div>
			</form>

		</div>
	</section><!--/#formContact-->
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
					<dd>40210<br>
						Immermanstrase 61 Dusseldorf<br>
						<ul>
							<li>Tel.<a class="telLink" href="tel:0663439327">0211 3456 56543</a></li>
							<!-- <li>Fax.06-6343-9328</li> -->
						</ul>
					</dd>
				</dl>
			</div>
			<div class="btnContact"><a href="/contact""><span class="btnInner"><span><i class="fas fa-envelope-open"></i>お問い合わせはこちら</span></span></a></div>
		</div>
	</section><!--/#contactLower-->
</main><!--/#main-->
<!-- footer start -->
<?php get_footer(); ?>
