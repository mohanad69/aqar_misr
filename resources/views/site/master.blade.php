<!DOCTYPE html>
<html lang="zxx">
@include('site.includes.head')
<body>

<!-- Wrapper -->
<div id="main_wrapper">
  @include('site.includes.nav')
    @yield('content')
  @include('site.includes.subscripe')  
  @include('site.includes.footer')
</div>

@include('site.includes.script')

<!-- Style Switcher -->
<!-- <div id="color_switcher_preview">
  <h2>Choose Your Color <a href="#"><i class="fa fa-gear fa-spin (alias)"></i></a></h2>	
	<div>
		<ul class="colors" id="color1">
			<li><a href="#" class="stylesheet"></a></li>
			<li><a href="#" class="stylesheet_1"></a></li>
			<li><a href="#" class="stylesheet_2"></a></li>			
			<li><a href="#" class="stylesheet_3"></a></li>						
			<li><a href="#" class="stylesheet_4"></a></li>
			<li><a href="#" class="stylesheet_5"></a></li>			
		</ul>
	</div>		
</div> -->
</body>
</html>