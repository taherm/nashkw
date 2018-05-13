<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}" dir="{{ app()->isLocale('ar') ? 'rtl' : 'ltr'}}">
<head>
    @include('frontend.partials.head')
</head>

<body>
@include('frontend.modules.product.partials.quick-view')
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

@include('frontend.partials.header')

@include('frontend.partials._notification')

@section('content')
    @yield('body')
@show

<!--footer start-->
@include('frontend.partials.footer')
<!--footer end-->

<!--script for this page-->
@section('customScripts')
    @include('frontend.partials.scripts')
@show
</body>
</html>