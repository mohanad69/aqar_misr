<!-- Scripts --> 
<script src="{{asset('assets/site/scripts/jquery-3.4.1.min.js')}}"></script> 
<script src="{{asset('assets/site/scripts/chosen.min.js')}}"></script> 
<script src="{{asset('assets/site/scripts/slick.min.js')}}"></script> 
<script src="{{asset('assets/site/scripts/rangeslider.min.js')}}"></script> 
<script src="{{asset('assets/site/scripts/magnific-popup.min.js')}}"></script> 
<script src="{{asset('assets/site/scripts/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/site/scripts/mmenu.js')}}"></script> 
<script src="{{asset('assets/site/scripts/tooltips.min.js')}}"></script> 
<script src="{{asset('assets/site/scripts/color_switcher.js')}}"></script>
<script src="{{asset('assets/site/scripts/jquery_custom.js')}}"></script>
<script>
var tpj=jQuery;			
var revapi4;
tpj(document).ready(function() {
if(tpj("#utf_rev_slider_block").revolution == undefined){
	revslider_showDoubleJqueryError("#utf_rev_slider_block");
}else{
	revapi4 = tpj("#utf_rev_slider_block").show().revolution({
		sliderType:"standard",
		jsFileLocation:"scripts/",
		sliderLayout:"auto",
		dottedOverlay:"none",
		delay:6000,
		navigation: {
			keyboardNavigation:"off",
			keyboard_direction: "horizontal",
			mouseScrollNavigation:"off",
			onHoverStop:"on",
			touch:{
				touchenabled:"on",
				swipe_threshold: 75,
				swipe_min_touches: 1,
				swipe_direction: "horizontal",
				drag_block_vertical: false
			}
			,
			arrows: {
				style:"zeus",
				enable:true,
				hide_onmobile:true,
				hide_under:600,
				hide_onleave:true,
				hide_delay:200,
				hide_delay_mobile:1200,
				tmp:'<div class="tp-title-wrap"></div>',
				left: {
					h_align:"left",
					v_align:"center",
					h_offset:40,
					v_offset:0
				},
				right: {
					h_align:"right",
					v_align:"center",
					h_offset:40,
					v_offset:0
				}
			}
			,
			bullets: {
			enable:false,
			hide_onmobile:true,
			hide_under:600,
			style:"hermes",
			hide_onleave:true,
			hide_delay:200,
			hide_delay_mobile:1200,
			direction:"horizontal",
			h_align:"center",
			v_align:"bottom",
			h_offset:0,
			v_offset:30,
			space:6,
			tmp:''
			}
		},
		viewPort: {
		enable:true,
		outof:"pause",
		visible_area:"80%"
	},
	responsiveLevels:[1200,992,768,480],
	visibilityLevels:[1200,992,768,480],
	gridwidth:[1180,1024,778,480],
	gridheight:[565,900,800,800],
	lazyType:"none",
	parallax: {
		type:"mouse",
		origo:"slidercenter",
		speed:2200,
		levels:[2,3,4,5,6,7,12,16,10,25,47,48,49,50,51,55],
		type:"mouse",
	},
	shadow:0,
	spinner:"off",
	stopLoop:"off",
	stopAfterLoops:-1,
	stopAtSlide:-1,
	shuffle:"off",
	autoHeight:"off",
	hideThumbsOnMobile:"off",
	hideSliderAtLimit:0,
	hideCaptionAtLimit:0,
	hideAllCaptionAtLilmit:0,
	debugMode:false,
	fallbacks: {
		simplifyAll:"off",
		nextSlideOnWindowFocus:"off",
		disableFocusListener:false,
	}
});
}
});	
</script> 
<script src="{{asset('assets/site/scripts/extensions/themepunch.tools.min.js')}}"></script> 
<script src="{{asset('assets/site/scripts/extensions/themepunch.revolution.min.js')}}"></script> 
<script src="{{asset('assets/site/scripts/extensions/revolution.extension.actions.min.js')}}"></script> 
<script src="{{asset('assets/site/scripts/extensions/revolution.extension.carousel.min.js')}}"></script> 
<script src="{{asset('assets/site/scripts/extensions/revolution.extension.kenburn.min.js')}}"></script> 
<script src="{{asset('assets/site/scripts/extensions/revolution.extension.layeranimation.min.js')}}"></script> 
<script src="{{asset('assets/site/scripts/extensions/revolution.extension.migration.min.js')}}"></script> 
<script src="{{asset('assets/site/scripts/extensions/revolution.extension.navigation.min.js')}}"></script> 
<script src="{{asset('assets/site/scripts/extensions/revolution.extension.parallax.min.js')}}"></script> 
<script src="{{asset('assets/site/scripts/extensions/revolution.extension.slideanims.min.js')}}"></script> 
<script src="{{asset('assets/site/scripts/extensions/revolution.extension.video.min.js')}}"></script> 