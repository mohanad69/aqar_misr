@extends('site.master')
@section('content')
  
<div id="utf_rev_slider_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;"> 
    <div id="utf_rev_slider_block" class="rev_slider home fullwidthabanner" style="display:none;" data-version="5.0.7">
      <ul>	  
        <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off"> 
          <img src="{{asset('assets/site/images/a.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="112" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"> 
		  <div class="container main_inner_search_block margin-top-100">
			<div class="main_input_search_part">
			  <div class="main_input_search_part_item">
				<input type="text" placeholder="What are you looking for?" value=""/>
			  </div>
			  <div class="main_input_search_part_item location">
				<input type="text" placeholder="Search Location..." value=""/>
				<a href="#"><i class="sl sl-icon-location"></i></a> 
			  </div>
			  <div class="main_input_search_part_item slider_chosen_drop">
				<select data-placeholder="All Categories" class="utf_chosen_select" >
				  <option>Choose Category</option>
				  <option>Food & Restaurants </option>
				  <option>Shop & Education</option>
				  <option>Business</option>
				  <option>Events</option>
				</select>
			  </div>
			  <button class="button" onclick="window.location.">Search</button>
			</div>
		  </div>
            <div class="tp-caption centered utf_custom_caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
				id="utf_slide_layer_item_one" 
				data-x="['center','center','center','center']" data-hoffset="['0']" 
				data-y="['70','30','20','0']" data-voffset="['0']" 
				data-width="['900','620', 640','420','320']"
				data-height="auto"
				data-whitespace="nowrap"
				data-transform_idle="o:1;"	
				data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" 
				data-transform_out="" 
				data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" 
				data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
				data-start="1000" 
				data-responsive_offset="on">			
            <div class="utf_item_title margin-bottom-15"
				id="utf_slide_layer_detail_one"
				data-x="['center','center','center','center']"
				data-hoffset="['0','0','0','0']"
				data-y="['20','20','20','20']"
				data-voffset="['-40','-40','-20','-80']"
				data-fontsize="['56','46','30','34','22']"
				data-lineheight="['70','60','34','30','25']"
				data-width="['960','620', 640','420','320']"
				data-height="none" data-whitespace="normal"
				data-transform_idle="o:1;"
				data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;"
				data-transform_out="opacity:0;s:300;"
				data-start="600"
				data-splitin="none"
				data-splitout="none"
				data-basealign="slide"
				data-responsive_offset="off"
				data-responsive="off"
				style="z-index:6;color:#fff;letter-spacing:0px;font-weight:600;">Find & Explore Top City</div>
            <div class="utf_rev_description_text">Business owners - over a million people view these listings every month - we highly recommend you ensure your business is properly listed.</div>
            <a href="#" class="button medium">View More</a> 
		 </div>
        </li>
        
        <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off"> 
          <img src="{{asset('assets/site/images/b.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="112" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"> 
			<div class="container main_inner_search_block margin-top-100">
			<div class="main_input_search_part">
			  <div class="main_input_search_part_item">
				<input type="text" placeholder="What are you looking for?" value=""/>
			  </div>
			  <div class="main_input_search_part_item location">
				<input type="text" placeholder="Search Location..." value=""/>
				<a href="#"><i class="sl sl-icon-location"></i></a> 
			  </div>
			  <div class="main_input_search_part_item">
				<select data-placeholder="All Categories" class="utf_chosen_select" >
				  <option>Choose Category</option>
				  <option>Food & Restaurants </option>
				  <option>Shop & Education</option>
				  <option>Education</option>
				  <option>Business</option>
				  <option>Events</option>
				</select>
			  </div>
			  <button class="button" onclick="window.location.">Search</button>
			</div>
		  </div>
            <div class="tp-caption centered utf_custom_caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
				id="utf_slide_layer_item_two" 
				data-x="['center','center','center','center']" data-hoffset="['0']" 
				data-y="['70','30','20','0']" data-voffset="['0']" 
				data-width="['900','620', 640','420','320']"
				data-height="auto"
				data-whitespace="nowrap"
				data-transform_idle="o:1;"	
				data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" 
				data-transform_out="" 
				data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" 
				data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
				data-start="1000" 
				data-responsive_offset="on">			
            <div class="utf_item_title margin-bottom-15"
				id="utf_slide_layer_detail_two"
				data-x="['center','center','center','center']"
				data-hoffset="['0','0','0','0']"
				data-y="['20','20','20','20']"
				data-voffset="['-40','-40','-20','-80']"
				data-fontsize="['56','42','30','27','22']"
				data-lineheight="['70','60','34','30','25']"
				data-width="['960','620', 640','420','320']"
				data-height="none" data-whitespace="normal"
				data-transform_idle="o:1;"
				data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;"
				data-transform_out="opacity:0;s:300;"
				data-start="600"
				data-splitin="none"
				data-splitout="none"
				data-basealign="slide"
				data-responsive_offset="off"
				data-responsive="off"
				style="z-index:6;color:#fff;letter-spacing:0px;font-weight:600;">Find & Explore Top Restaurants</div>
            <div class="utf_rev_description_text">Business owners - over a million people view these listings every month - we highly recommend you ensure your business is properly listed.</div>
            <a href="#" class="button medium">View More</a> 
		 </div>
        </li>
		
		<li data-index="rs-3" data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off"> 
          <img src="{{asset('assets/site/images/c.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="112" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"> 
			<div class="container main_inner_search_block margin-top-100">
			<div class="main_input_search_part">
			  <div class="main_input_search_part_item">
				<input type="text" placeholder="What are you looking for?" value=""/>
			  </div>
			  <div class="main_input_search_part_item location">
				<input type="text" placeholder="Search Location..." value=""/>
				<a href="#"><i class="sl sl-icon-location"></i></a> 
			  </div>
			  <div class="main_input_search_part_item">
				<select data-placeholder="All Categories" class="utf_chosen_select" >
				  <option>Choose Category</option>
				  <option>Food & Restaurants </option>
				  <option>Shop & Education</option>
				  <option>Education</option>
				  <option>Business</option>
				  <option>Events</option>
				</select>
			  </div>
			  <button class="button" onclick="window.location.">Search</button>
			</div>
		  </div>
            <div class="tp-caption centered utf_custom_caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
				id="utf_slide_layer_item_three" 
				data-x="['center','center','center','center']" data-hoffset="['0']" 
				data-y="['70','30','20','0']" data-voffset="['0']" 
				data-width="['900','620', 640','420','320']"
				data-height="auto"
				data-whitespace="nowrap"
				data-transform_idle="o:1;"	
				data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" 
				data-transform_out="" 
				data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" 
				data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
				data-start="1000" 
				data-responsive_offset="on">			
            <div class="utf_item_title margin-bottom-15"
				id="utf_slide_layer_detail_three"
				data-x="['center','center','center','center']"
				data-hoffset="['0','0','0','0']"
				data-y="['20','20','20','20']"
				data-voffset="['-40','-40','-20','-80']"
				data-fontsize="['56','46','30','30','22']"
				data-lineheight="['70','60','34','30','25']"
				data-width="['960','620', 640','420','320']"
				data-height="none" data-whitespace="normal"
				data-transform_idle="o:1;"
				data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;"
				data-transform_out="opacity:0;s:300;"
				data-start="600"
				data-splitin="none"
				data-splitout="none"
				data-basealign="slide"
				data-responsive_offset="off"
				data-responsive="off"
				style="z-index:6;color:#fff;letter-spacing:0px;font-weight:600;">Find & Explore Nearest Bars</div>
            <div class="utf_rev_description_text">Business owners - over a million people view these listings every month - we highly recommend you ensure your business is properly listed.</div>
            <a href="#" class="button medium">View More</a> 
		 </div>
        </li>
      </ul>
      <div class="tp-static-layers"></div>
    </div>
  </div>
  
  <div class="container">
	<div class="row">
      <div class="col-md-12">
        <h3 class="headline_part centered margin-top-75"> Most Popular Categories<span>Browse the most desirable categories</span></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="container_categories_box margin-top-5 margin-bottom-30"> 
          <a href="listings_list_with_sidebar.html" class="utf_category_small_box_part"> <i class="im im-icon-Hotel"></i>
			<h4>Flats</h4>
			<span>22</span>
          </a> 
          <a href="listings_list_with_sidebar.html" class="utf_category_small_box_part"> <i class="im im-icon-Hamburger"></i>
			<h4>Villas</h4>
			<span>15</span>
          </a> 
          <a href="listings_list_with_sidebar.html" class="utf_category_small_box_part"> <i class="im im-icon-Shop-2"></i>
			<h4>Markets</h4>
			<span>05</span>
          </a> 
          <a href="listings_list_with_sidebar.html" class="utf_category_small_box_part"> <i class="im im-icon-Cocktail"></i>
			<h4>Clinics</h4>
			<span>12</span>
          </a> 
          <a href="listings_list_with_sidebar.html" class="utf_category_small_box_part"> <i class="im im-icon-Electric-Guitar"></i>
			<h4>Business Offices</h4>
			<span>08</span>
          </a> 
		</div>
		<div class="col-md-12 centered_content"> <a href="#" class="button border margin-top-20">View More</a> </div>
      </div>
    </div>
  </div>
  
  <section class="fullwidth_block margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">
    <div class="container">
      <div class="row slick_carousel_slider">
        <div class="col-md-12">
          <h3 class="headline_part centered margin-bottom-45"> Most Visited Places <span>Explore the greates places in the city</span> </h3>
        </div>
		
		<div class="row">
			<div class="col-md-12">
				<div class="simple_slick_carousel_block utf_dots_nav"> 
				  <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
					<div class="utf_listing_item"> <img src="{{asset('assets/site/images/d.jpg')}}" alt=""> <span class="tag"><i class="im im-icon-Chef-Hat"></i> Villas</span> <span class="featured_tag">Featured</span>
					  <span class="utf_open_now">Available</span>
					  <div class="utf_listing_item_content">
					    <div class="utf_listing_prige_block">							
							<span class="utf_meta_listing_price"><i class="fa fa-tag"></i> 50000</span>							
							<span class="utp_approve_item"><i class="utf_approve_listing"></i></span>
						</div>
						<h3>Chontaduro Barcelona</h3>
						<span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
						<span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>											
					  </div>					  
					</div>
					<div class="utf_star_rating_section" data-rating="4.5">
						<div class="utf_counter_star_rating">(4.5)</div>
						<span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
						<span class="like-icon"></span>
					</div>
					</a> 
				  </div>
				  
				  <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
					<div class="utf_listing_item"> <img src="{{asset('assets/site/images/e.jpg')}}" alt=""> <span class="tag"><i class="im im-icon-Electric-Guitar"></i> Flats</span><span class="utf_open_now">Available</span>
					  <div class="utf_listing_item_content">
					    <div class="utf_listing_prige_block">							
							<span class="utf_meta_listing_price"><i class="fa fa-tag"></i> 150000</span>							
						</div>
						<h3>The Lounge & Bar</h3>
						<span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
						<span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>												
					  </div>
					</div>
					<div class="utf_star_rating_section" data-rating="4.5">
						<div class="utf_counter_star_rating">(4.5)</div>
						<span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
						<span class="like-icon"></span>
					</div>
					</a> 
				  </div>
				  
				  <div class="utf_carousel_item"> <a href="listings_single_page_1.html" class="utf_listing_item-container compact">
					<div class="utf_listing_item"> <img src="{{asset('assets/site/images/f.jpg')}}" alt=""> <span class="tag"><i class="im im-icon-Hotel"></i> Markets</span>
					  <span class="utf_closed">Closed</span>
					  <div class="utf_listing_item_content">
					    <div class="utf_listing_prige_block">							
							<span class="utf_meta_listing_price"><i class="fa fa-tag"></i> 230000</span>							
						</div>
						<h3>Westfield Sydney</h3>
						<span><i class="sl sl-icon-location"></i> The Ritz-Carlton, Hong Kong</span>
						<span><i class="sl sl-icon-phone"></i> (415) 796-3633</span>												
					  </div>
					</div>
					<div class="utf_star_rating_section" data-rating="4.5">
						<div class="utf_counter_star_rating">(4.5)</div>
						<span class="utf_view_count"><i class="fa fa-eye"></i> 822+</span>
						<span class="like-icon"></span>
					</div>
					</a> 
				  </div>
				</div>
			  </div>
		  </div>
	   </div>
    </div>
  </section>
  
  
  
  <a href="listings_grid_full_width.html" class="flip-banner parallax" data-background="{{asset('assets/site/images/d.jpg')}}" data-color="#000" data-color-opacity="0.85" data-img-width="2500" data-img-height="1666">
	  <div class="flip-banner-content">
		<h2 class="flip-visible">Browse Listings Attractions List</h2>    
	  </div>
  </a>
  
  <section class="utf_testimonial_part fullwidth_block padding-top-75 padding-bottom-75"> 
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h3 class="headline_part centered">What Say Our Customers <span class="margin-top-15">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since...</span> </h3>
        </div>
      </div>
    </div>
    <div class="fullwidth_carousel_container_block margin-top-20">
      <div class="utf_testimonial_carousel testimonials"> 
        <div class="utf_carousel_review_part">
          <div class="utf_testimonial_box">
            <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</div>
          </div>
          <div class="utf_testimonial_author"> <img src="{{asset('assets/site/images/happy-client-02.jpg')}}" alt="">
            <h4>Denwen Evil <span>Web Developer</span></h4>
          </div>
        </div>
        <div class="utf_carousel_review_part">
          <div class="utf_testimonial_box">
            <div class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</div>
          </div>
          <div class="utf_testimonial_author"> <img src="{{asset('assets/site/images/happy-client-02.jpg')}}" alt="">
            <h4>Adam Alloriam <span>Web Developer</span></h4>
          </div>
        </div>
      </div>
    </div>
  </section>   
  
  <div class="container padding-bottom-70">
    <div class="row">
      <div class="col-md-12">
        <h3 class="headline_part centered margin-bottom-35 margin-top-70">Most Popular Cities/Towns <span>Discover best things to do restaurants, shopping, hotels, cafes and places<br>around the world by categories.</span></h3>
      </div>
      <div class="col-md-3"> 
         <a href="listings_list_with_sidebar.html" class="img-box" data-background-image="{{asset('assets/site/images/g.jpg')}}">
			<div class="utf_img_content_box visible">
			  <h4>France </h4>
			  <span>18 Listings</span> 
			</div>
         </a> 
	  </div>
      <div class="col-md-3"> 
         <a href="listings_list_with_sidebar.html" class="img-box" data-background-image="{{asset('assets/site/images/h.jpg')}}">
			<div class="utf_img_content_box visible">
			  <h4>Italy</h4>
			  <span>24 Listings</span> 
			</div>
         </a> 
	  </div>
      <div class="col-md-6"> 
         <a href="listings_list_with_sidebar.html" class="img-box" data-background-image="{{asset('assets/site/images/i.jpg')}}">
			<div class="utf_img_content_box visible">
			  <h4>Germany</h4>
			  <span>17 Listings</span> 
			</div>
         </a> 
	  </div>
      <div class="col-md-6"> 
         <a href="listings_list_with_sidebar.html" class="img-box" data-background-image="{{asset('assets/site/images/j.jpg')}}">
			<div class="utf_img_content_box visible">
			  <h4>Dubai</h4>
			  <span>12 Listings</span> 
			</div>
         </a> 
	  </div>
      <div class="col-md-3"> 
         <a href="listings_list_with_sidebar.html" class="img-box" data-background-image="{{asset('assets/site/images/k.jpg')}}">
			<div class="utf_img_content_box visible">
			  <h4>Cairo</h4>
			  <span>14 Listings</span> 
			</div>
         </a> 
	  </div>
      <div class="col-md-3"> 
         <a href="listings_list_with_sidebar.html" class="img-box" data-background-image="{{asset('assets/site/images/d.jpg')}}">
			<div class="utf_img_content_box visible">
			  <h4>New York</h4>
			  <span>9 Listings</span> 
			</div>
         </a>
	  </div>
	  <div class="col-md-12 centered_content"> <a href="#" class="button border margin-top-20">View More Categories</a> </div>
    </div>
  </div>
  <section class="fullwidth_block margin-bottom-0 padding-top-30 padding-bottom-65" data-background-color="linear-gradient(to bottom, #f9f9f9 0%, rgba(255, 255, 255, 1))">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 class="headline_part centered margin-bottom-40 margin-top-30">Our Company Logos</h3>
			</div>
			<div class="col-md-12">
				<div class="companie-logo-slick-carousel utf_dots_nav margin-bottom-10">
					<div class="item">
						<img src="{{asset('assets/site/images/brand_logo_01.png')}}" alt="">
					</div>
					<div class="item">
						<img src="{{asset('assets/site/images/brand_logo_02.png')}}" alt="">
					</div>
					<div class="item">
						<img src="{{asset('assets/site/images/brand_logo_03.png')}}" alt="">
					</div>
					<div class="item">
						<img src="{{asset('assets/site/images/brand_logo_04.png')}}" alt="">
					</div>
					<div class="item">
						<img src="{{asset('assets/site/images/brand_logo_05.png')}}" alt="">
					</div>		
					<div class="item">
						<img src="{{asset('assets/site/images/brand_logo_06.png')}}" alt="">
					</div>	
					<div class="item">
						<img src="{{asset('assets/site/images/brand_logo_07.png')}}" alt="">
					</div>					
				</div>
			</div>
		</div>
	</div>
  </section>
@endsection