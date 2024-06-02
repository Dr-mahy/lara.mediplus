<!doctype html>
<html class="no-js" lang="zxx">
    <head>
    @include('includes.head')
    </head>
    <body>
	
		<!-- Preloader -->
      @include('includes.preloader')
        <!-- End Preloader -->
		
		<!-- Get Pro Button -->
		@include('includes.probutton')
		<!-- Header Area -->
	@include('includes.header')
		<!-- End Header Area -->
		@yield('crumbs')
	@yield('content')
		
		<!-- Footer Area -->
	@include('includes.footer')
		<!--/ End Footer Area -->
		
		<!-- jquery Min JS -->
      @include('includes.footerjs')
	  @yield('map')
    </body>
</html>