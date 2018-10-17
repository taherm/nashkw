@extends('frontend.layouts.app')



@section('body')

    <!-- PAGE -->
    <section class="page-section no-padding slider">
        <div class="container full-width">
            @include('frontend.partials.slider')
        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    {{--<section class="page-section">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<div class="thumbnail no-border no-padding thumbnail-banner size-1x3">--}}
    {{--<div class="media">--}}
    {{--<a class="media-link" href="#">--}}
    {{--<div class="img-bg" style="background-image: url('assets/img/preview/shop/banner-1.jpg')"></div>--}}
    {{--<div class="caption">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<h2 class="caption-title"><span>Lorem Ipsum</span></h2>--}}
    {{--<h3 class="caption-sub-title"><span>Dolor Sir Amet Percpectum</span></h3>--}}
    {{--<span class="btn btn-theme btn-theme-sm">Shop Now</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-6">--}}
    {{--<div class="thumbnail no-border no-padding thumbnail-banner size-1x3">--}}
    {{--<div class="media">--}}
    {{--<a class="media-link" href="#">--}}
    {{--<div class="img-bg" style="background-image: url('assets/img/preview/shop/banner-2.jpg')"></div>--}}
    {{--<div class="caption text-right">--}}
    {{--<div class="caption-wrapper div-table">--}}
    {{--<div class="caption-inner div-cell">--}}
    {{--<h2 class="caption-title"><span>Lorem Ipsum</span></h2>--}}
    {{--<h3 class="caption-sub-title"><span>Dolor Sir Amet Percpectum</span></h3>--}}
    {{--<span class="btn btn-theme btn-theme-sm">Shop Now</span>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <!-- /PAGE -->

    <!-- PAGE -->
    {{--<section class="page-section">--}}
    {{--<div class="container">--}}

    {{--<div class="tabs">--}}
    {{--<ul id="tabs" class="nav nav-justified-off"><!----}}
    {{----><li class=""><a href="#tab-1" data-toggle="tab">Featured</a></li><!----}}
    {{----><li class="active"><a href="#tab-2" data-toggle="tab">Newest</a></li><!----}}
    {{----><li class=""><a href="#tab-3" data-toggle="tab">Top Sellers</a></li>--}}
    {{--</ul>--}}
    {{--</div>--}}

    {{--<div class="tab-content">--}}

    {{--<!-- tab 1 -->--}}
    {{--<div class="tab-pane fade" id="tab-1">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">--}}
    {{--<img src="assets/img/preview/shop/product-3.jpg" alt=""/>--}}
    {{--<span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="caption text-center">--}}
    {{--<h4 class="caption-title"><a href="product-details.html">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--<div class="buttons">--}}
    {{--<a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">--}}
    {{--<img src="assets/img/preview/shop/product-4.jpg" alt=""/>--}}
    {{--<span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="caption text-center">--}}
    {{--<h4 class="caption-title"><a href="product-details.html">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--<div class="buttons">--}}
    {{--<a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">--}}
    {{--<img src="assets/img/preview/shop/product-1.jpg" alt=""/>--}}
    {{--<span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="caption text-center">--}}
    {{--<h4 class="caption-title"><a href="product-details.html">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--<div class="buttons">--}}
    {{--<a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">--}}
    {{--<img src="assets/img/preview/shop/product-2.jpg" alt=""/>--}}
    {{--<span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="caption text-center">--}}
    {{--<h4 class="caption-title"><a href="product-details.html">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--<div class="buttons">--}}
    {{--<a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<!-- tab 2 -->--}}
    {{--<div class="tab-pane fade active in" id="tab-2">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">--}}
    {{--<img src="assets/img/preview/shop/product-1.jpg" alt=""/>--}}
    {{--<span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="caption text-center">--}}
    {{--<h4 class="caption-title"><a href="product-details.html">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--<div class="buttons">--}}
    {{--<a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">--}}
    {{--<img src="assets/img/preview/shop/product-2.jpg" alt=""/>--}}
    {{--<span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="caption text-center">--}}
    {{--<h4 class="caption-title"><a href="product-details.html">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--<div class="buttons">--}}
    {{--<a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">--}}
    {{--<img src="assets/img/preview/shop/product-3.jpg" alt=""/>--}}
    {{--<span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="caption text-center">--}}
    {{--<h4 class="caption-title"><a href="product-details.html">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--<div class="buttons">--}}
    {{--<a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">--}}
    {{--<img src="assets/img/preview/shop/product-4.jpg" alt=""/>--}}
    {{--<span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="caption text-center">--}}
    {{--<h4 class="caption-title"><a href="product-details.html">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--<div class="buttons">--}}
    {{--<a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<!-- tab 3 -->--}}
    {{--<div class="tab-pane fade" id="tab-3">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">--}}
    {{--<img src="assets/img/preview/shop/product-2.jpg" alt=""/>--}}
    {{--<span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="caption text-center">--}}
    {{--<h4 class="caption-title"><a href="product-details.html">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--<div class="buttons">--}}
    {{--<a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">--}}
    {{--<img src="assets/img/preview/shop/product-3.jpg" alt=""/>--}}
    {{--<span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="caption text-center">--}}
    {{--<h4 class="caption-title"><a href="product-details.html">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--<div class="buttons">--}}
    {{--<a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">--}}
    {{--<img src="assets/img/preview/shop/product-4.jpg" alt=""/>--}}
    {{--<span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="caption text-center">--}}
    {{--<h4 class="caption-title"><a href="product-details.html">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--<div class="buttons">--}}
    {{--<a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-3 col-sm-6">--}}
    {{--<div class="thumbnail no-border no-padding">--}}
    {{--<div class="media">--}}
    {{--<a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/shop/product-1-big.jpg">--}}
    {{--<img src="assets/img/preview/shop/product-1.jpg" alt=""/>--}}
    {{--<span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="caption text-center">--}}
    {{--<h4 class="caption-title"><a href="product-details.html">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--<div class="buttons">--}}
    {{--<a class="btn btn-theme btn-theme-transparent btn-wish-list" href="#"><i class="fa fa-heart"></i></a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-icon-left" href="#"><i class="fa fa-shopping-cart"></i>Add to Cart</a><!----}}
    {{----><a class="btn btn-theme btn-theme-transparent btn-compare" href="#"><i class="fa fa-exchange"></i></a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</section>--}}
    <!-- /PAGE -->

    <!-- PAGE -->
    {{--<section class="page-section">--}}
    {{--<div class="container">--}}
    {{--<div class="message-box">--}}
    {{--<div class="message-box-inner">--}}
    {{--<h2>Free shipping on all orders over $45</h2>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <!-- /PAGE -->

    <!-- Newest -->
    @include('frontend.partials._product_carousel_lg', ['elements' => $newArrivals, 'title' => trans('general.new_arrival')])
    <!-- /PAGE -->

    <!-- On Sales  -->
    @include('frontend.partials._product_carousel_lg', ['elements' => $onSaleProducts , 'title' => trans('general.on_sale_products')])
    <!-- /PAGE -->

    <!-- Best Sales  -->
    @include('frontend.partials._product_carousel_lg',['elements' => $bestSalesProducts, 'title' => trans('general.best_sale_products')])
    <!-- /PAGE -->

    <!-- PAGE -->
    {{--<section class="page-section">--}}
    {{--<div class="container">--}}
    {{--<a class="btn btn-theme btn-title-more btn-icon-left" href="#"><i class="fa fa-file-text-o"></i>See All Posts</a>--}}
    {{--<h2 class="block-title"><span>Our Recent posts</span></h2>--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<div class="recent-post">--}}
    {{--<div class="media">--}}
    {{--<a class="pull-left media-link" href="#">--}}
    {{--<img class="media-object" src="assets/img/preview/blog/recent-post-1.jpg" alt="">--}}
    {{--<i class="fa fa-plus"></i>--}}
    {{--</a>--}}
    {{--<div class="media-body">--}}
    {{--<p class="media-category"><a href="#">Shoes</a> / <a href="#">Dress</a></p>--}}
    {{--<h4 class="media-heading"><a href="#">Standard Post Comment Header Here</a></h4>--}}
    {{--Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante.--}}
    {{--<div class="media-meta">--}}
    {{--6th June 2014--}}
    {{--<span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>--}}
    {{--<span class="divider">/</span><a href="#"><i class="fa fa-heart"></i>18</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-6">--}}
    {{--<div class="recent-post">--}}
    {{--<div class="media">--}}
    {{--<a class="pull-left media-link" href="#">--}}
    {{--<img class="media-object" src="assets/img/preview/blog/recent-post-2.jpg" alt="">--}}
    {{--<i class="fa fa-plus"></i>--}}
    {{--</a>--}}
    {{--<div class="media-body">--}}
    {{--<p class="media-category"><a href="#">Wedding</a> / <a href="#">Meeting</a></p>--}}
    {{--<h4 class="media-heading"><a href="#">Standard Post Comment Header Here</a></h4>--}}
    {{--Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante.--}}
    {{--<div class="media-meta">--}}
    {{--6th June 2014--}}
    {{--<span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>--}}
    {{--<span class="divider">/</span><a href="#"><i class="fa fa-heart"></i>18</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-6">--}}
    {{--<div class="recent-post">--}}
    {{--<div class="media">--}}
    {{--<a class="pull-left media-link" href="#">--}}
    {{--<img class="media-object" src="assets/img/preview/blog/recent-post-3.jpg" alt="">--}}
    {{--<i class="fa fa-plus"></i>--}}
    {{--</a>--}}
    {{--<div class="media-body">--}}
    {{--<p class="media-category"><a href="#">Children</a> / <a href="#">Kids</a></p>--}}
    {{--<h4 class="media-heading"><a href="#">Standard Post Comment Header Here</a></h4>--}}
    {{--Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante.--}}
    {{--<div class="media-meta">--}}
    {{--6th June 2014--}}
    {{--<span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>--}}
    {{--<span class="divider">/</span><a href="#"><i class="fa fa-heart"></i>18</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-6">--}}
    {{--<div class="recent-post">--}}
    {{--<div class="media">--}}
    {{--<a class="pull-left media-link" href="#">--}}
    {{--<img class="media-object" src="assets/img/preview/blog/recent-post-4.jpg" alt="">--}}
    {{--<i class="fa fa-plus"></i>--}}
    {{--</a>--}}
    {{--<div class="media-body">--}}
    {{--<p class="media-category"><a href="#">Man</a> / <a href="#">Accessories</a></p>--}}
    {{--<h4 class="media-heading"><a href="#">Standard Post Comment Header Here</a></h4>--}}
    {{--Fusce gravida interdum eros a mollis. Sed non lorem varius, volutpat nisl in, laoreet ante.--}}
    {{--<div class="media-meta">--}}
    {{--6th June 2014--}}
    {{--<span class="divider">/</span><a href="#"><i class="fa fa-comment"></i>27</a>--}}
    {{--<span class="divider">/</span><a href="#"><i class="fa fa-heart"></i>18</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <!-- /PAGE -->

    <!-- PAGE -->
    {{--<section class="page-section">--}}
    {{--<div class="container">--}}
    {{--<h2 class="section-title"><span>Brand &amp; Clients</span></h2>--}}
    {{--<div class="partners-carousel">--}}
    {{--<div class="owl-carousel" id="partners">--}}
    {{--<div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>--}}
    {{--<div><a href="#"><img src="assets/img/preview/partners/brand-logo.jpg" alt=""/></a></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <!-- /PAGE -->

    <!-- PAGE -->
    {{--<section class="page-section">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="product-list">--}}
    {{--<a class="btn btn-theme btn-title-more" href="#">See All</a>--}}
    {{--<h4 class="block-title"><span>Top Sellers</span></h4>--}}
    {{--<div class="media">--}}
    {{--<a class="pull-left media-link" href="#">--}}
    {{--<img class="media-object" src="assets/img/preview/shop/top-sellers-1.jpg" alt="">--}}
    {{--<i class="fa fa-plus"></i>--}}
    {{--</a>--}}
    {{--<div class="media-body">--}}
    {{--<h4 class="media-heading"><a href="#">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="media">--}}
    {{--<a class="pull-left media-link" href="#">--}}
    {{--<img class="media-object" src="assets/img/preview/shop/top-sellers-2.jpg" alt="">--}}
    {{--<i class="fa fa-plus"></i>--}}
    {{--</a>--}}
    {{--<div class="media-body">--}}
    {{--<h4 class="media-heading"><a href="#">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="media">--}}
    {{--<a class="pull-left media-link" href="#">--}}
    {{--<img class="media-object" src="assets/img/preview/shop/top-sellers-3.jpg" alt="">--}}
    {{--<i class="fa fa-plus"></i>--}}
    {{--</a>--}}
    {{--<div class="media-body">--}}
    {{--<h4 class="media-heading"><a href="#">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="product-list">--}}
    {{--<a class="btn btn-theme btn-title-more" href="#">See All</a>--}}
    {{--<h4 class="block-title"><span>Top Accessories</span></h4>--}}
    {{--<div class="media">--}}
    {{--<a class="pull-left media-link" href="#">--}}
    {{--<img class="media-object" src="assets/img/preview/shop/top-sellers-4.jpg" alt="">--}}
    {{--<i class="fa fa-plus"></i>--}}
    {{--</a>--}}
    {{--<div class="media-body">--}}
    {{--<h4 class="media-heading"><a href="#">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="media">--}}
    {{--<a class="pull-left media-link" href="#">--}}
    {{--<img class="media-object" src="assets/img/preview/shop/top-sellers-5.jpg" alt="">--}}
    {{--<i class="fa fa-plus"></i>--}}
    {{--</a>--}}
    {{--<div class="media-body">--}}
    {{--<h4 class="media-heading"><a href="#">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="media">--}}
    {{--<a class="pull-left media-link" href="#">--}}
    {{--<img class="media-object" src="assets/img/preview/shop/top-sellers-6.jpg" alt="">--}}
    {{--<i class="fa fa-plus"></i>--}}
    {{--</a>--}}
    {{--<div class="media-body">--}}
    {{--<h4 class="media-heading"><a href="#">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="product-list">--}}
    {{--<a class="btn btn-theme btn-title-more" href="#">See All</a>--}}
    {{--<h4 class="block-title"><span>Top Newest</span></h4>--}}
    {{--<div class="media">--}}
    {{--<a class="pull-left media-link" href="#">--}}
    {{--<img class="media-object" src="assets/img/preview/shop/top-sellers-7.jpg" alt="">--}}
    {{--<i class="fa fa-plus"></i>--}}
    {{--</a>--}}
    {{--<div class="media-body">--}}
    {{--<h4 class="media-heading"><a href="#">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="media">--}}
    {{--<a class="pull-left media-link" href="#">--}}
    {{--<img class="media-object" src="assets/img/preview/shop/top-sellers-8.jpg" alt="">--}}
    {{--<i class="fa fa-plus"></i>--}}
    {{--</a>--}}
    {{--<div class="media-body">--}}
    {{--<h4 class="media-heading"><a href="#">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="media">--}}
    {{--<a class="pull-left media-link" href="#">--}}
    {{--<img class="media-object" src="assets/img/preview/shop/top-sellers-9.jpg" alt="">--}}
    {{--<i class="fa fa-plus"></i>--}}
    {{--</a>--}}
    {{--<div class="media-body">--}}
    {{--<h4 class="media-heading"><a href="#">Standard Product Header</a></h4>--}}
    {{--<div class="rating">--}}
    {{--<span class="star"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span><!----}}
    {{----><span class="star active"></span>--}}
    {{--</div>--}}
    {{--<div class="price"><ins>$400.00</ins> <del>$425.00</del></div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <!-- /PAGE -->

    <!-- PAGE -->
    {{--<section class="page-section no-padding-top">--}}
    {{--<div class="container">--}}
    {{--<div class="row blocks shop-info-banners">--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="block">--}}
    {{--<div class="media">--}}
    {{--<div class="pull-right"><i class="fa fa-gift"></i></div>--}}
    {{--<div class="media-body">--}}
    {{--<h4 class="media-heading">Buy 1 Get 1</h4>--}}
    {{--Proin dictum elementum velit. Fusce euismod consequat ante.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="block">--}}
    {{--<div class="media">--}}
    {{--<div class="pull-right"><i class="fa fa-comments"></i></div>--}}
    {{--<div class="media-body">--}}
    {{--<h4 class="media-heading">Call to Free</h4>--}}
    {{--Proin dictum elementum velit. Fusce euismod consequat ante.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<div class="block">--}}
    {{--<div class="media">--}}
    {{--<div class="pull-right"><i class="fa fa-trophy"></i></div>--}}
    {{--<div class="media-body">--}}
    {{--<h4 class="media-heading">Money Back!</h4>--}}
    {{--Proin dictum elementum velit. Fusce euismod consequat ante.--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
    <!-- /PAGE -->

@endsection
