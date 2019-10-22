@extends('site.master')
@section('content')
<div id="titlebar" class="gradient" style="background-image: url({{asset('assets/site/images/a.jpg')}}) !important">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>news</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="index_1.html">Home</a></li>
              <li>news</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container"> 
    <div class="blog-page">
      <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
			<div class="utf_blog_post"> 
				<a href="{{url('/news/item')}}" class="utf_post_img"> <img src="{{asset('assets/site/images/c.jpg')}}" alt=""> </a> 
				<div class="utf_post_content">
				  <h3><a href="{{url('/news/item')}}">Get Alife Insurance for Your Business</a></h3>
				  <ul class="utf_post_text_meta">
					<li>Feb 02, 2019 / 12:52 pm</li>
					<li>By <a href="#">Tips</a> Admin</li>
					<li><a href="#">5 Comments</a></li>
				  </ul>
				  <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
				  <a href="{{url('/news/item')}}" class="read-more">Read More <i class="fa fa-angle-right"></i></a> 			  
				</div>
			  </div>
		  </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
			  <div class="utf_blog_post"> 
				<a href="{{url('/news/item')}}" class="utf_post_img"> <img src="{{asset('assets/site/images/d.jpg')}}" alt=""> </a> 
				<div class="utf_post_content">
				  <h3><a href="{{url('/news/item')}}">Get Alife Insurance for Your Business</a></h3>
				  <ul class="utf_post_text_meta">
					<li>Feb 02, 2019 / 12:52 pm</li>
					<li>By <a href="#">Tips</a> Admin</li>
					<li><a href="#">7 Comments</a></li>
				  </ul>
				  <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
				  <a href="{{url('/news/item')}}" class="read-more">Read More <i class="fa fa-angle-right"></i></a> 
				</div>
			  </div>
          </div>
		  <div class="col-md-4 col-sm-6 col-xs-12">
			  <div class="utf_blog_post"> 
				<a href="{{url('/news/item')}}" class="utf_post_img"> <img src="{{asset('assets/site/images/h.jpg')}}" alt=""> </a> 
				<div class="utf_post_content">
				  <h3><a href="{{url('/news/item')}}">Get Alife Insurance for Your Business</a></h3>
				  <ul class="utf_post_text_meta">
					<li>Feb 02, 2019 / 12:52 pm</li>
					<li>By <a href="#">Tips</a> Admin</li>
					<li><a href="#">12 Comments</a></li>
				  </ul>
				  <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
				  <a href="{{url('/news/item')}}" class="read-more">Read More <i class="fa fa-angle-right"></i></a> 
				</div>
			  </div>
		   </div>
		   <div class="col-md-4 col-sm-6 col-xs-12">
			<div class="utf_blog_post"> 
				<a href="{{url('/news/item')}}" class="utf_post_img"> <img src="{{asset('assets/site/images/f.jpg')}}" alt=""> </a> 
				<div class="utf_post_content">
				  <h3><a href="{{url('/news/item')}}">Get Alife Insurance for Your Business</a></h3>
				  <ul class="utf_post_text_meta">
					<li>Feb 02, 2019 / 12:52 pm</li>
					<li>By <a href="#">Tips</a> Admin</li>
					<li><a href="#">5 Comments</a></li>
				  </ul>
				  <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
				  <a href="{{url('/news/item')}}" class="read-more">Read More <i class="fa fa-angle-right"></i></a> 			  
				</div>
			  </div>
		  </div>
          <div class="clearfix"></div>
            <div class="col-md-12"> 
              <div class="utf_pagination_container_part margin-bottom-70">
                <nav class="pagination">
                  <ul>
				    <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                    <li><a href="#" class="current-page">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
                    <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                  </ul>
                </nav>
              </div>
            </div>
        </div>
    </div>
  </div>
@endsection