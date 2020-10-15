
@extends('client.layout.layout')

@section('title','Blog')


@section('style')
@endsection


@section('content')
	
	<!-- Banner Section -->
	<section class="page-banner">
		<div class="image-layer" style="background-image:url({{asset('public/client/images/background/image-7.jpg')}});"></div>
		<div class="shape-1"></div>
		<div class="shape-2"></div>
		<div class="banner-inner">
			 <div class="auto-container">
				  <div class="inner-container clearfix">
						<h1>About Us</h1>
						<div class="page-nav">
							 <ul class="bread-crumb clearfix">
							 		<li><a href="{{route('app.home')}}">Home</a></li>
								  	<li class="active">About Us</li>
							 </ul>
						</div>
				  </div>
			 </div>
		</div>
  	</section>
	<!--End Banner Section -->

   @include('client.partials.agency')

   @include('client.partials.parallex')
	
   @include('client.partials.action')
	    
@endsection


@section('modal')
@endsection


@section('javascript')
   
	
  	<script>
  		$(function(){
         'use strict'

         

         

      });
  	</script>

@endsection