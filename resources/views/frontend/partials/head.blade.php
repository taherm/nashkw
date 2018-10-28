@section('title')
    <title>{{ config('app.name') }}</title>
@show
<meta name="description" content="{{ trans('general.meta_description') }}">
<meta name="keywords" content="{{ trans('general.app_keywords') }}"/>
<meta name="author" content="{{ trans('general.app_author') }}">
<meta name="country" content="{{ $settings->country }}">
<meta name="mobile" content="{{ $settings->mobile }}">
<meta name="phone" content="{{ $settings->phone }}">
<meta name="logo" content="{{ asset(env('LARGE').$settings->logo) }}">
<meta name="email" content="{{ $settings->email }}">
<meta name="address" content="{{ $settings->address }}">
<meta name="name" content="{{ $settings->company }}">
<meta name="google-site-verification" content="fy3pTvV0z024nR79nukGxw-tnOmJ2F5BnMeayo-g4-c" />
<!-- favicon -->
<link rel="shortcut icon" href="{{ asset('images/logo.ico') }}"/>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/logo.jpg') }}">
<link href="{{ asset('images/logo.jpg') }}" rel="shortcut icon" type="image/jpg">