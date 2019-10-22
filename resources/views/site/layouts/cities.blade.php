@extends('site.master')
@section('content')
<div id="titlebar" class="gradient margin-bottom-0" style="background-image: url({{asset('assets/site/images/a.jpg')}}) !important">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Cities</h2>          
          <nav id="breadcrumbs">
            <ul>
              <li><a href="index_1.html">Home</a></li>
              <li>Cities</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container">
	<div class="row">
      <div class="col-md-12">
        <h3 class="headline_part centered margin-top-75"> Browse Categorie List<span>Browse the most desirable categories</span></h3>
      </div>
    </div>
    <div class="row margin-bottom-60">
      <div class="col-md-4"> 
         <a href="listings_list_with_sidebar.html" class="img-box" data-background-image="{{asset('assets/site/images/a.jpg')}}">
			<div class="utf_img_content_box visible">
			  <h4>Cairo </h4>
			  <span>18 Listings</span> 
			</div>
         </a> 
	  </div>
      <div class="col-md-4"> 
         <a href="listings_list_with_sidebar.html" class="img-box" data-background-image="{{asset('assets/site/images/b.jpg')}}">
			<div class="utf_img_content_box visible">
			  <h4>Dubai</h4>
			  <span>24 Listings</span> 
			</div>
         </a> 
	  </div>
      <div class="col-md-4"> 
         <a href="listings_list_with_sidebar.html" class="img-box" data-background-image="{{asset('assets/site/images/c.jpg')}}">
			<div class="utf_img_content_box visible">
			  <h4>Italy</h4>
			  <span>17 Listings</span> 
			</div>
         </a> 
	  </div>
      <div class="col-md-4"> 
         <a href="listings_list_with_sidebar.html" class="img-box" data-background-image="{{asset('assets/site/images/d.jpg')}}">
			<div class="utf_img_content_box visible">
			  <h4>France</h4>
			  <span>12 Listings</span> 
			</div>
         </a> 
	  </div>
      <div class="col-md-4"> 
         <a href="listings_list_with_sidebar.html" class="img-box" data-background-image="{{asset('assets/site/images/d.jpg')}}">
			<div class="utf_img_content_box visible">
			  <h4>Alex</h4>
			  <span>14 Listings</span> 
			</div>
         </a> 
	  </div>
      <div class="col-md-4"> 
         <a href="listings_list_with_sidebar.html" class="img-box" data-background-image="{{asset('assets/site/images/g.jpg')}}">
			<div class="utf_img_content_box visible">
			  <h4>New York</h4>
			  <span>9 Listings</span> 
			</div>
         </a>
	  </div>
    </div>
  </div>
@endsection