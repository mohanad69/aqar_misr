@extends('site.master')
@section('content')
<div id="titlebar" class="gradient" style="background-image: url({{asset('assets/site/images/a.jpg')}}) !important">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>News Item</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="index_1.html">Home</a></li>
              <li>News Item</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container"> 
    <div class="blog-page">
      <div class="row"> 
        <div class="col-lg-8 col-md-8"> 
          <div class="utf_blog_post utf_single_post"> 
            <img class="utf_post_img" src="{{asset('assets/site/images/a.jpg')}}" alt=""> 
            <div class="utf_post_content">
              <h3>The 50 Greatest Street Arts In London</h3>
              <ul class="utf_post_text_meta">
                <li>Feb 02, 2019 / 12:52 pm</li>
                <li>By <a href="#">Tips</a> Admin</li>
                <li><a href="#">Source</a></li>
              </ul>
              <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic type setting, remaining essentially unchanged.</p>
			  <div class="social-contact">
				<a href="#" class="facebook-link"><i class="fa fa-facebook"></i> Facebook</a>
				<a href="#" class="twitter-link"><i class="fa fa-twitter"></i> Twitter</a>
				<a href="#" class="instagram-link"><i class="fa fa-instagram"></i> Instagram</a>
				<a href="#" class="linkedin-link"><i class="fa fa-linkedin"></i> Linkedin</a>
				<a href="#" class="youtube-link"><i class="fa fa-youtube-play"></i> Youtube</a>
			  </div>
            </div>
          </div>
          <div class="clearfix"></div>
          <h4 class="headline_part margin-top-20">Related Posts</h4>
          <div class="row"> 
            <div class="col-md-6 col-sm-12"> <a href="#" class="blog_compact_part-container">
              <div class="blog_compact_part"> <img src="{{asset('assets/site/images/b.jpg')}}" alt="">
                <div class="blog_compact_part_content">
				 <h3>The Most Popular New top Places Listing</h3>
                  <ul class="blog_post_tag_part">
                    <li>22 January 2019</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
              </div>
              </a> 
			</div>
            
            <div class="col-md-6 col-sm-12"> <a href="#" class="blog_compact_part-container">
              <div class="blog_compact_part"> <img src="{{asset('assets/site/images/c.jpg')}}" alt="">
                <div class="blog_compact_part_content">
				 <h3>Greatest Event Places in Listing</h3>
                  <ul class="blog_post_tag_part">
                    <li>10 January 2019</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
              </div>
              </a> 
			</div>            
          </div>          
          
          <section class="comments">
            <h4 class="headline_part margin-top-20 margin-bottom-35">Comments <span class="comments-amount">(5)</span></h4>
            <ul>
              <li>
                <div class="avatar"><img src="{{asset('assets/site/images/c.jpg')}}" alt="" /></div>
                <div class="utf_comment_content">
                  <div class="utf_arrow_comment"></div>
				  <div class="utf_star_rating_section" data-rating="4.5"></div>
                  <div class="utf_by_comment">John Doe<span class="date"><i class="fa fa-clock-o"></i> Feb 02, 2019 / 12:52 pm</span></div>
                  <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                </div>
              </li>
              <li>
                <div class="avatar"><img src="{{asset('assets/site/images/g.jpg')}}" alt="" /></div>
                <div class="utf_comment_content">
                  <div class="utf_arrow_comment"></div>
				  <div class="utf_star_rating_section" data-rating="4.5"></div>
                  <div class="utf_by_comment">John Doe<span class="date"><i class="fa fa-clock-o"></i> Feb 02, 2019 / 12:52 pm</span></div>
                  <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                </div>
              </li>
            </ul>
          </section>
          <div class="clearfix"></div>
          
          <div id="utf_add_review" class="utf_add_review-box">             
            <h3 class="utf_listing_headline_part margin-bottom-35">Add Review</h3>            
            <form id="utf_add_comment" class="utf_add_comment">
              <fieldset>
                <div class="row">
                  <div class="col-md-4">
                    <label>Name:</label>
                    <input type="text" placeholder="Name" value=""/>
                  </div>
                  <div class="col-md-4">
                    <label>Email:</label>
                    <input type="text" placeholder="Email" value=""/>
                  </div>
				  <div class="col-md-4">
                    <label>Subject:</label>
                    <input type="text" placeholder="Subject" value=""/>
                  </div>
                </div>
                <div>
                  <label>Comment:</label>
                  <textarea cols="40" placeholder="Your Message..." rows="3"></textarea>
                </div>
              </fieldset>
              <button class="button">Post Comment</button>
              <div class="clearfix"></div>
            </form>
          </div>          
        </div>
        
        <div class="col-lg-4 col-md-4">
          <div class="sidebar right"> 
			<div class="utf_box_widget">
			  <h3><i class="sl sl-icon-folder-alt"></i>Property Categories</h3>
			  <ul class="utf_listing_detail_sidebar">
				<li><i class="fa fa-angle-double-right"></i> <a href="#">Flats</a></li>
				<li><i class="fa fa-angle-double-right"></i> <a href="#">Villas</a></li>
				<li><i class="fa fa-angle-double-right"></i> <a href="#">Offices</a></li>
				<li><i class="fa fa-angle-double-right"></i> <a href="#">Markets</a></li>
				<li><i class="fa fa-angle-double-right"></i> <a href="#">Clinics</a></li>			
			  </ul>
			</div>
						
            <div class="utf_box_widget margin-top-35">
              <h3><i class="sl sl-icon-book-open"></i> Popular Post</h3>
              <ul class="utf_widget_tabs">                
                <li>
                  <div class="utf_widget_content">
                    <div class="utf_widget_thum"> <a href="blog_detail_right_sidebar.html"><img src="{{asset('assets/site/images/h.jpg')}}" alt=""></a> </div>
                    <div class="utf_widget_text">
                      <h5><a href="blog_detail_right_sidebar.html">Lorem ipsum dolor sit amet consectetur...</a></h5>
                      <span><i class="fa fa-clock-o"></i> Feb 02, 2019 at 12:52 pm</span> 
					</div>
                    <div class="clearfix"></div>
                  </div>
                </li>                
                <li>
                  <div class="utf_widget_content">
                    <div class="utf_widget_thum"> <a href="blog_detail_right_sidebar.html"><img src="{{asset('assets/site/images/g.jpg')}}" alt=""></a> </div>
                    <div class="utf_widget_text">
                      <h5><a href="blog_detail_right_sidebar.html">Lorem ipsum dolor sit amet consectetur...</a></h5>
                      <span><i class="fa fa-clock-o"></i> Feb 02, 2019 at 12:52 pm</span>
					</div>
                    <div class="clearfix"></div>
                  </div>
                </li>                
                <li>
                  <div class="utf_widget_content">
                    <div class="utf_widget_thum"> <a href="blog_detail_right_sidebar.html"><img src="{{asset('assets/site/images/e.jpg')}}" alt=""></a> </div>
                    <div class="utf_widget_text">
                      <h5><a href="blog_detail_right_sidebar.html">Lorem ipsum dolor sit amet consectetur...</a></h5>
                      <span><i class="fa fa-clock-o"></i> Feb 02, 2019 at 12:52 pm</span> 
					</div>
                    <div class="clearfix"></div>
                  </div>
                </li>
              </ul>
            </div>
			<div class="utf_box_widget opening-hours margin-top-35">
			  <h3><i class="sl sl-icon-info"></i> Google AdSense</h3>
			  <span><img src="{{asset('assets/site/images/f.jpg')}}" alt="" /></span>
            </div>
            <div class="utf_box_widget opening-hours margin-top-35">
			  <h3><i class="sl sl-icon-info"></i> Google AdSense</h3>
			  <span><img src="{{asset('assets/site/images/i.jpg')}}" alt="" /></span>
			</div>
			
			<div class="utf_box_widget margin-top-35">
			  <h3><i class="sl sl-icon-phone"></i> Quick contact to help?</h3>
			  <p>Excepteur sint occaecat non proident, sunt in culpa officia deserunt mollit anim id est laborum.</p>
			  <ul class="utf_social_icon rounded">
				<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
				<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
				<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
				<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				<li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>				
			  </ul>
			  <a class="utf_progress_button button fullwidth_block margin-top-5" href="{{url('/contact')}}">Contact Us</a> 
			</div> 					
            <div class="clearfix"></div>            
			
          </div>
        </div>
      </div>      
    </div>
  </div>
@endsection