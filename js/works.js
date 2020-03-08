/* -----------------------------------------------------------------------------

 about.js

----------------------------------------------------------------------------- */

/* transitionDelay
---------------------------------------------------*/
$(function() {
	function transitionDelay() {
		$('#point ul').each(function() {
			$(this).find('li').each(function(i) {
				$(this).css('transition-delay', (i * 100)+200 + 'ms');
			});
		});
		/*$('.worksList').each(function() {
			$(this).find('.worksListBox').each(function(i) {
				$(this).css('transition-delay', (i * 100)+200 + 'ms');
			});
		});*/
	}
	transitionDelay();
});



/* matchHeight
----------------------------------------------*/
$(window).on('load resize', function(){
	setTimeout(function(){
		$('.worksListBox:visible a').matchHeight();
	},500);
});


/* matchHeight
----------------------------------------------*/
$(function(){
	if ($(".slider").length) {
		
		function sliderSetting(){
			var width = $(window).width();
			if(width <= 750){
				$('.slider').not('.slick-initialized').slick({
					dots: false,
					arrows: true,
					infinite: true,
					speed: 500,
					autoplay: true,
					autoplaySpeed: 4000,
					touchThreshold: 10,
					swipe: true
				});
				$('.slick-slide').bind('touchstart', function(){
					return true;
				});
			 }else{
					$('.slider.slick-initialized').slick('unslick');
			 }
		}

		// 初期表示時の実行
		sliderSetting();

		// リサイズ時の実行
		$(window).resize( function() {
			sliderSetting();
		});
		
	}
});




// ソート
$(function(){
	
	var $sort = $('.categoryList li');
	var $box = $('.worksListBox');
	var num = 6;
	
	$box.removeClass('show').addClass("hide")
	//$(".worksListBox:lt("+num+")").removeClass('hide').addClass('show').show();

	$sort.on('click', function(e) {
		e.preventDefault();
		var $this = $(this);
		num = 6;
		
		var sortClass = $(this).attr("class").substring(5);
		var listClass = '.';
		listClass += sortClass;

		if($(this).hasClass('sort-all')){
			$box.removeClass('show').addClass("hide").fadeOut(200).finish().promise().done(function() {
				$(".worksListBox").show();
				$(".worksListBox:lt("+num+")").removeClass('hide').addClass('show').find("a").matchHeight();
			});
		} else {
			$box.removeClass('show').addClass("hide").fadeOut(200).finish().promise().done(function() {
				$(listClass).show();
				$(listClass +":lt("+num+")").removeClass('hide').addClass('show').find("a").matchHeight();
			});
		}
		
		$sort.removeClass('active');
		$this.addClass('active');
		
	});
	
	
	
	// ページ遷移時アクティブ
	var hash = location.hash;
	var hashTxt = hash.slice(1);
	
	if(hash){
		$("html,body").animate({scrollTop:$('#list').offset().top - 80});
		var sortClass = ".sort-" + hashTxt;
		$('.categoryList li').removeClass("active");
		$(sortClass).addClass("active");
		$('.worksListBox').each(function(){
			if($(this).hasClass(hashTxt)){
				$(this).removeClass("hide").addClass("show").finish().promise().done(function() {
					$(this).show();
				});
			} else {
				$(this).addClass("hide").removeClass("show").hide();
			}
		});
	} else {
		$(".worksListBox:lt("+num+")").removeClass('hide').addClass('show').show();
	}

	
	
	
	$(window).on('scroll', function(){
		
		$(".worksListBox.hide").not(":hidden").each(function(){
			var targetPos = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll > targetPos - windowHeight){
				$(this).removeClass("hide").addClass("show");
				var w = $(window).width();
				if (w >= 750) {
					$(".worksListBox").not(":hidden").find("a").matchHeight();
				}
			}
		});
		
	});

});

/* anchor
---------------------------------------------------*/
$(function(){
	
	var param = location.search;
	var paramTxt = param.slice(5);
	
	$(".footerSitemap ul li:nth-child(3) a").click(function(){
		if(param){
			location.reload(true);
			$(".animate").addClass("animated");
			setTimeout(function(){
				scroll();
			},300);
		}
	});
	
	$(window).on('load', function(){
		if(param){
			$(".animate").addClass("animated");
			setTimeout(function(){
				scroll();
			},300);
		}
	});
	
	function scroll() {
		var paramHash = "#" + paramTxt;
		$("html,body").animate({scrollTop:$(paramHash).offset().top - 100});
	}
});

