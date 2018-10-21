<!-- PRELOADER -->
<div id="preloader">
    <div id="preloader-status">
        <div id="preloader-title" style="margin: 10px;"><img class="img-xs" src="{{ asset(env('THUMBNAIL').$settings->logo) }}" alt="{{ $settings->name }}"></div>
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
        <div id="preloader-title">{{ trans('message.loading') }}</div>
    </div>
</div>
<!-- /PRELOADER -->