/* -----------------------------------------------------------------------------

 service.js

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

/* anchor
---------------------------------------------------*/
$(function(){
	
	var param = location.search;
	var paramTxt = param.slice(5);
	
	$(".footerSitemap ul li:nth-child(2) a").click(function(){
		if(param){
			location.reload(true);
			$(".animate").addClass("animated");
			setTimeout(function(){
				actTab();
				scroll();
			},300);
		}
	});
	
	$(window).on('load', function(){
		if(param){
			$(".animate").addClass("animated");
			setTimeout(function(){
				actTab();
				scroll();
			},300);
		}
	});
	
	function actTab() {
		
		if(param){
			if(paramTxt === "contentOperation" || paramTxt === "advertisementOperation"){
				$(".tabBtn li").removeClass("active");
				$("#tab02").addClass("active");
				$(".tabContent").hide().removeClass("active");
				$("#creative").show().addClass("active");
			}
			if(paramTxt === "accessAnalysis" || paramTxt === "ui" || paramTxt === "advertisementMeasurement"){
				$(".tabBtn li").removeClass("active");
				$("#tab03").addClass("active");
				$(".tabContent").hide().removeClass("active");
				$("#analyze").show().addClass("active");
			}
		}
	}
	
	function scroll() {
		var paramHash = "#" + paramTxt;
		if (document.documentElement.clientWidth <= 750) {
			var height = 40;
		}else{
			var height = 100;
		}
		$("html,body").animate({scrollTop:$(paramHash).offset().top - height});
	}
});




