/* -----------------------------------------------------------------------------

 about.js

----------------------------------------------------------------------------- */


/* map
---------------------------------------------------*/
function googleMap() {

	var latlng = new google.maps.LatLng(34.695129, 135.493746);
	var myOptions = {
	zoom: 16,
	center: latlng,
	mapTypeControl: false,
	panControl: false,
	streetViewControl: false,
	mapTypeControlOptions: { mapTypeIds: ['style', google.maps.MapTypeId.ROADMAP] }
	};
	var map = new google.maps.Map(document.getElementById('mapOsaka'), myOptions);
	var icon = new google.maps.MarkerImage('/img/common/icon_marker.png',
	new google.maps.Size(75,80),
	new google.maps.Point(0,0)
	);
	var markerOptions = {
	position: latlng,
	map: map,
	icon: icon,
	title: '大阪研究所（本社）',
	animation: google.maps.Animation.DROP
	};
	var marker = new google.maps.Marker(markerOptions);
	var styleOptions = [
		{
			"featureType": "all",
			"elementType": "all",
			"stylers": [
				{
					"hue": "#575b75"
				},
				{
					"saturation": "-80"
				}
			]
		}
	];
	var styledMapOptions = { name: '大阪研究所（本社）' }
	var sampleType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
	map.mapTypes.set('style', sampleType);
	map.setMapTypeId('style');
};

function googleMap2() {

	var latlng = new google.maps.LatLng(35.664411, 139.699414);
	var myOptions = {
	zoom: 16,
	center: latlng,
	mapTypeControl: false,
	panControl: false,
	streetViewControl: false,
	mapTypeControlOptions: { mapTypeIds: ['style', google.maps.MapTypeId.ROADMAP] }
	};
	var map = new google.maps.Map(document.getElementById('mapTokyo'), myOptions);
	var icon = new google.maps.MarkerImage('/img/common/icon_marker.png',
	new google.maps.Size(75,80),
	new google.maps.Point(0,0)
	);
	var markerOptions = {
	position: latlng,
	map: map,
	icon: icon,
	title: '東京研究所',
	animation: google.maps.Animation.DROP
	};
	var marker = new google.maps.Marker(markerOptions);
	var styleOptions = [
		{
			"featureType": "all",
			"elementType": "all",
			"stylers": [
				{
					"hue": "#575b75"
				},
				{
					"saturation": "-80"
				}
			]
		}
	];
	var styledMapOptions = { name: '東京研究所' }
	var sampleType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
	map.mapTypes.set('style', sampleType);
	map.setMapTypeId('style');
};
google.maps.event.addDomListener(window, 'load', function() {
	googleMap();
	googleMap2();
});


/* transitionDelay
---------------------------------------------------*/
$(function() {
	function transitionDelay() {
		$('.detail').each(function() {
			$(this).find('dl').each(function(i) {
				$(this).css('transition-delay', (i * 100) + 'ms');
			});
		});
	}
	transitionDelay();
});

/* anchor
---------------------------------------------------*/
$(function(){
	
	var param = location.search;
	var paramTxt = param.slice(5);
	
	$(".footerSitemap ul li:nth-child(1) a").click(function(){
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

