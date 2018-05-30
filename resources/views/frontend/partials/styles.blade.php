{{--<link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
<link rel="stylesheet" href="{{ mix('css/frontend.css') }}">
@if (app()->isLocale('ar'))
        <link rel="stylesheet" href="{{ mix('css/rtl.css') }}">
        <link rel="stylesheet" href="{{ mix('css/frontend-custom-ar.css') }}">
@endif
