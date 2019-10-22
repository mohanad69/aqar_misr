@extends('site.master')
@section('content')
<!-- Content --> 
<div class="utf_contact_map margin-bottom-70"> 
    <div id="utf_single_listing_map_block">
<iframe id="utf_single_listingmap"  
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110518.17234742556!2d31.289387423977665!3d30.045667495384983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584106635f3941%3A0x1214c66b8890814f!2s4Deve!5e0!3m2!1sar!2seg!4v1571645662256!5m2!1sar!2seg" 
width="1450" height="450" 
allowfullscreen=""></iframe>

    
    </div>   
  </div>
  <div class="clearfix"></div>
  
  <div class="container">
    <div class="row"> 
      <div class="col-md-8">
        <section id="contact" class="margin-bottom-70">
          <h4><i class="sl sl-icon-phone"></i> Contact Form</h4>          
          <form id="contactform">
            <div class="row">
              <div class="col-md-6">  
				  <input name="name" type="text" placeholder="Frist Name" required />                
              </div>
              <div class="col-md-6">                
                  <input name="name" type="text" placeholder="Last Name" required />                
              </div>
              <div class="col-md-6">                
                  <input name="email" type="email" placeholder="Email" required />                
              </div>
              <div class="col-md-6">
                  <input name="subject" type="text" placeholder="Subject" required />              
              </div>
			  <div class="col-md-12">
				  <textarea name="comments" cols="40" rows="2" id="comments" placeholder="Your Message" required></textarea>
			  </div>
            </div>            
            <input type="submit" class="submit button" id="submit" value="Submit" />
          </form>
        </section>
      </div>
      
      <div class="col-md-4">
		<div class="utf_box_widget margin-bottom-70">
			<h3><i class="sl sl-icon-map"></i> Office Address</h3>
			<div class="utf_sidebar_textbox">
			  <ul class="utf_contact_detail">
				<li><strong>Phone:-</strong> <span>+ 001 245 0154</span></li>
				<li><strong>Web:-</strong> <span><a href="#">www.sitename.com</a></span></li>
				<li><strong>E-Mail:-</strong> <span><a href="mailto:info@example.com">info@example.com</a></span></li>
				<li><strong>Address:-</strong> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</span></li>
			  </ul>
			</div>	
		</div>
      </div>
    </div>
  </div>
  @include('site.includes.map_js')
@endsection