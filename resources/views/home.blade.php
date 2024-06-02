@extends('layoutes.main')

@section('content')
	<!-- Slider Area -->
    @include('includes.slider')
    <!--/ End Slider Area -->
    
    <!-- Start Schedule Area -->
    @include('includes.schedule')
    <!--/End Start schedule Area -->

    <!-- Start Feautes -->
    @include('includes.feautes')
    <!--/ End Feautes -->
    
    <!-- Start Fun-facts -->
    @include('includes.funfacts')
    <!-- Start Why choose -->
    @include('includes.whychoose')
    <!--/ End Why choose -->
    
    <!-- Start Call to action -->
@include('includes.calltoaction')
    <!--/ End Call to action -->
    
    <!-- Start portfolio -->
    @include('includes.portfolio')
    <!--/ End portfolio -->
    
    <!-- Start service -->
    @include('includes.service')
    <!--/ End service -->
    
    <!-- Pricing Table -->
  @include('includes.table')
    <!--/ End Pricing Table -->
    
    
    
    <!-- Start Blog Area -->
   @include('includes.blog')
    <!-- End Blog Area -->
    
    <!-- Start clients -->
   @include('includes.clients')
    <!--/Ens clients -->
    
    <!-- Start Appointment -->
  @include('includes.appointment')
    <!-- End Appointment -->
    
    <!-- Start Newsletter Area -->
   @include('includes.newsletter')
    <!-- /End Newsletter Area -->
@endsection