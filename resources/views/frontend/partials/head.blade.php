<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>{{ config('app.name') }}</title>
<meta name="{{ config('app.name') }}" content="E-commerce">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{ trans('general.meta_description') }}">
<!-- favicon -->
<link rel="shortcut icon" href="{{ asset('img/icon.ico') }}" type="image/x-icon"/>
@section('styles')
    @include('frontend.partials.styles')
@show