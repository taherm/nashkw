<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @section('head')
        @include('frontend.partials.head')
    @show
    @section('styles')
        @include('frontend.partials.styles')
    @show
</head>
@mobile
<body id="home" class="wide header-style-5">
@elsemobile
<body id="home" class="wide">
@endmobile
@include('frontend.partials._preloader')
<div class="wrapper">
@section('header')
    @include('frontend.partials.header_one')
    @include('frontend.partials._notification')
@show
@section('content')
    <!-- CONTENT AREA -->
        <div class="content-area">
            @yield('body')
        </div>
        <!-- /CONTENT AREA -->
@show

<!--footer start-->
@section('footer')
    @include('frontend.partials.footer')
@show
<!--footer end-->
</div>
<!--script for this page-->
@section('scripts')
    @include('frontend.partials.scripts')
@show
@include('frontend.partials._pop_up_cart')
</body>
</html>