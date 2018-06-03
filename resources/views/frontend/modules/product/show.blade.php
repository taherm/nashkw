@extends('frontend.layouts.master')

@section('head')
    @parent
    <title>{{ $product->name }}</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url" content="{{ request()->fullUrl() }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="{{ $product->name }}"/>
    <meta property="og:description" content="{!! strip_tags($product->description) !!}"/>
    <meta property="og:image" content="{{asset(env('THUMBNAIL').$product->image)}}"/>
@endsection


@section('body')
    <div class="single-page-area shop-product-area">
        <div class="container">
            <div class="row">
                <div class="shop-head">
                    <ul class="shop-head-menu">
                        <li><i class="fa fa-home"></i>
                            <a class="home" href="{{ url('/') }}">
                                <span>{{ trans('general.home') }}
                                </span>
                            </a>
                        </li>
                        <li>{{ $product->name }}</li>
                    </ul>
                </div>
                <!-- shop head end -->
            </div>
        </div>

        <!-- Single Product details Area -->
        <div class="single-product-details-area">
            <div class="single-product-view-area">
                <div class="container">
                    <div class="row">
                        @include('frontend.partials._product_show_gallery')
                        @include('frontend.partials._product_show_product_data')
                    </div>
                </div>
            </div>
        </div>

        <!--product-Description-area start-->
    @include('frontend.modules.product.partials.productDescription')

    <!--related-products-area start-->
        @if(!$products->isEmpty())

            @include('frontend.modules.product.partials.product_carousel',[$products ,'heading'=> trans('general.related_products'),'backgroundColor'=>'#e7e7e7', 'cols' => 'col-lg-3 col-md-3 col-sm-3'])
        @endif
    </div>
    </div>
    <!-- Single Product Area end -->
    <!-- Creates the bootstrap modal where the image will appear -->
    {{-- moved to modal blade quick view--}}
@endsection
