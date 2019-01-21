<!-- PRELOADER -->
<div id="preloader">
    <div id="preloader-status">
        <div id="preloader-title" style="margin: 20px;"><img class="img-sm" src="{{ asset(env('THUMBNAIL').$settings->logo) }}" alt="{{ $settings->company_ar . $settings->company_en }}"></div>
        <div class="spinner">
            <img src="{{ asset('img/preloader.png') }}" alt="" class="img-xs">
            {{--<div class="rect1"></div>--}}
            {{--<div class="rect2"></div>--}}
            {{--<div class="rect3"></div>--}}
            {{--<div class="rect4"></div>--}}
            {{--<div class="rect5"></div>--}}
        </div>

        <div id="preloader-title" style="margin : 10px;">{{ trans('message.loading') }}</div>
    </div>
</div>
<!-- /PRELOADER -->
