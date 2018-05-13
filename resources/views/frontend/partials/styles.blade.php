<link rel="stylesheet" href="{{ mix('css/frontend.css') }}">
@if (app()->isLocale('ar'))
    <link rel="stylesheet" href="{{ asset('css/rtl.css') }}">
    {{--<style type="text/css">--}}
        {{--.owl-carousel, .owl-carousel .owl-wrapper {--}}
            {{--position: initial;--}}

        {{--}--}}
        {{--.owl-carousel .owl-item {--}}
            {{--float: right;--}}

        {{--}--}}
        {{--.owl-wrapper-outer{--}}
            {{--z-index: 99;--}}
        {{--}--}}
        {{--.owl-buttons{--}}
            {{--margin-top: -33%;--}}
            {{--position: relative;--}}
            {{--padding-bottom: 33%;--}}
            {{--z-index: 0;--}}

        {{--}--}}
        {{--.owl-prev{--}}
            {{--right: 98% !important;--}}
            {{--top: 22% !important;--}}
        {{--}--}}
        {{--.owl-next{--}}
            {{--right: -12% !important;--}}
            {{--top: 22% !important;--}}
        {{--}--}}

        {{--.single-procuct-view .simpleLens-big-image-container, .single-procuct-view .simpleLens-lens-image{--}}
            {{--direction: ltr;--}}
        {{--}--}}
        {{--div.simpleLens-lens-element {--}}
            {{--left: -112%;--}}
        {{--}--}}
        {{--.add-action ul li {--}}
            {{--left: 10%;--}}
            {{--float: left;--}}
        {{--}--}}
        {{--div.add-action ul {--}}
            {{--width: 115%;--}}
        {{--}--}}
        {{--#size{--}}
            {{--margin-bottom: 8%;--}}
        {{--}--}}
    {{--</style>--}}
@endif

<style type="text/css">
    @font-face {
        font-family: cairo;
        src: url('{!! asset('fonts/Cairo-SemiBold.otf') !!}');
    }

    body, div, a, span, table, p, form, input, h1, h2, h3, h4 {
        font-family: 'cairo', sans-serif !important;
    }
</style>