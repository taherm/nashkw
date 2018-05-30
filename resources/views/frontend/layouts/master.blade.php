<!doctype html>
<html class="no-js"
      lang="{{ app()->getLocale() }}"
      dir="{{ app()->isLocale('ar') ? 'rtl' : 'ltr'}}"
      xmlns="http://www.w3.org/1999/xhtml"
      xmlns:fb="http://ogp.me/ns/fb#"
>
<head>
@section('head')
    @include('frontend.partials.head')
@show
<!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('img/icon.ico') }}" type="image/x-icon"/>
    @section('styles')
        @include('frontend.partials.styles')
    @show
</head>

<body>
@section('header')
    @include('frontend.partials.header')
    @include('frontend.partials._notification')
    @include('frontend.modules.product.partials.quick-view')
@show
@section('content')
    @yield('body')
@show

<!--footer start-->
@section('footer')
    @include('frontend.partials.footer')
@show
<!--footer end-->

<!--script for this page-->
@section('scripts')
    @include('frontend.partials.scripts')
@show
</body>
</html>