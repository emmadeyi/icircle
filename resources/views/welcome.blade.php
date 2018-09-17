@extends('site.layouts.app')

@section('contents')
<!-- Start Slider Area -->
@include('site.layouts.slider')
<!-- End Slider Area -->

<!-- Start About area -->
@include('site.layouts.about')
<!-- End About area -->

<!-- Start Service area -->
@include('site.layouts.services')
<!-- End Service area -->

<!-- Faq area start -->
@include('site.layouts.faqs')
<!-- End Faq Area -->

<!-- Start Wellcome Area -->
@include('site.layouts.subscribe')
<!-- End Wellcome Area -->      

<!-- Start portfolio Area -->
@include('site.layouts.portfolio')
<!-- awesome-portfolio end -->

<!-- start pricing area -->
@include('site.layouts.pricing')
<!-- End pricing table area -->

<!-- Start Testimonials if any-->
@include('site.layouts.testimonials')
<!-- End Testimonials -->

<!-- Start Blog Area for News and public notification-->
@include('site.layouts.blog')
<!-- End Blog -->        

<!-- Start contact Area -->
@include('site.layouts.contact')
<!-- End Contact Area -->
@endsection
