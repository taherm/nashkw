@extends('frontend.layouts.master')

@section('head')
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
                        <li><i class="fa fa-home"></i><a class="home"
                                                         href="{{ url('/') }}"><span>{{ trans('general.home') }}</span></a>
                        </li>
                        <li>{{ $product->name }}</li>
                    </ul>
                </div>
                <!-- shop head end -->
            </div>
        </div>

        <!-- Single Product details Area -->
        <div class="single-product-details-area">
            <!-- Single Product View Area -->
            <div class="single-product-view-area">
                <div class="container">
                    <div class="row">
                        @include('frontend.partials._product_show_gallery')
                        @include('frontend.partials._product_show_product_data')
                    </div>
                </div>
            </div>
            <!-- End Single Product View Area -->
        </div>
        <!-- End Single details Area -->

        <!--product-Description-area start-->
    @include('frontend.modules.product.partials.productDescription')
    <!--product-Description-area end-->

    @if(!$products->isEmpty())
        <!--related-products-area start-->
        @include('frontend.modules.product.partials.product_carousel',[$products ,'heading'=>'Related Products','backgroundColor'=>'#e7e7e7', 'cols' => 'col-lg-3 col-md-3 col-sm-3'])
        <!--related-products-area end-->
        @endif
    </div>
    </div>
    <!-- Single Product Area end -->
    <!-- Creates the bootstrap modal where the image will appear -->
    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span
                                aria-hidden="true">&times;</span><span
                                class="sr-only">{{ trans('general.close') }}</span></button>
                    <h4 class="modal-title" id="myModalLabel">Size Chart</h4>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <img src="{{ file_exists(asset(env('LARGE').$product->size_chart_image)) ? asset(env('LARGE').$product->size_chart_image) : asset('img/charts.png') }}"
                         id="imagepreview"
                         style="width: 400px; height: 264px;">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customScripts')
    @parent
    <script type="text/javascript">
        $(document).ready(function() {
            $('#increaseQty').click(function() {
                var qty = $('#quantity').val();
                var max_limit = $('#max_qty').val();
                qty++;

                if (!isNaN(qty) && (qty <= max_limit)) {
                    $('#quantity').val(qty);
                }
                return false;
            });

            $('#size').change(function() {
                $('#productAttributeId').val('');
                var attributeId = $('#productAttributeId').val();
                var checkAttribute = false;
                var enableCart = true;
                var checkColorFound = $('#color_attribute').val();
                //Get selected color value
                var color = $('#color').val();
                if ($('#size').val() != 'none') {
                    //request colors related to selected size
                    $.get("/product/" + $('#productId').val() + "/" + $('#size').val())
                        .done(function(data) {
                            //disable all color options
//                                $("#color option").attr('disabled', 'disabled');
                            //check if already selected color available in colors returned from Ajax based on selected size otherwise set color to default
                            $(data).each(function(index, item) {
//                                    $("#color option[value=" + item.color_id + "]").removeAttr('disabled');
                                //if size and color selected set attribute id & enable add to cart button with quantity
                                if (item.color_id == color || checkColorFound === 'not-found') {
                                    attributeId = item.id;
                                    checkAttribute = true;
                                    $('#max_qty').val(item.qty);
                                }
                            });

                            if (!checkAttribute) {
                                if (color !== 'none') {
                                    toastr.warning('Sorry Please Select Another Color', 'Please Select Another Color',
                                        {
                                            "closeButton": true,
                                            "debug": false,
                                            "positionClass": "toast-top-full-width",
                                            "onclick": null,
                                            "showDuration": "1000",
                                            "hideDuration": "1000",
                                            "timeOut": "5000",
                                            "extendedTimeOut": "1000",
                                            "showEasing": "swing",
                                            "hideEasing": "linear",
                                            "showMethod": "fadeIn",
                                            "hideMethod": "fadeOut"
                                        });

                                    $('#color').val('none');
                                }
                                enableCart = false;
                                disableCartActions();
                            } else {
                                $('#productAttributeId').val(attributeId);
                            }
                        });
                    if (enableCart) {
                        enableCartActions();
                    }
                }
            });
            //if color changed
            $('#color').change(function() {
                $('#productAttributeId').val('');
                var attributeId = $('#productAttributeId').val();
                var checkAttribute = false;
                var enableCart = true;
                var checkSizeFound = $('#size_attribute').val();
                //Get selected size value
                var size = $('#size').val();
                if ($('#color').val() != 'none') {
                    //request colors related to selected size
                    $.get("/product-color/" + $('#productId').val() + "/" + $('#color').val())
                        .done(function(data) {
                            //disable all size options
//                                $("#size option").attr('disabled', 'disabled');
                            //check if already selected size available in sizes returned from Ajax based on selected color otherwise set size to default
                            $(data).each(function(index, item) {
//                                    $("#size option[value=" + item.size_id + "]").removeAttr('disabled');
                                //if size and color selected set attribute id & enable add to cart button with quantity
                                if (item.size_id == size || checkSizeFound === 'not-found') {
                                    attributeId = item.id;
                                    checkAttribute = true;
                                    $('#max_qty').val(item.qty);
                                }
                            });
                            if (!checkAttribute) {
                                if (size !== 'none') {
                                    toastr.warning('Sorry Please Select Another Size', 'Please Select Another Size',
                                        {
                                            "closeButton": true,
                                            "debug": false,
                                            "positionClass": "toast-top-full-width",
                                            "onclick": null,
                                            "showDuration": "1000",
                                            "hideDuration": "1000",
                                            "timeOut": "5000",
                                            "extendedTimeOut": "1000",
                                            "showEasing": "swing",
                                            "hideEasing": "linear",
                                            "showMethod": "fadeIn",
                                            "hideMethod": "fadeOut"
                                        });

                                    $('#size').val('none');
                                }

                                enableCart = false;
                                disableCartActions();
                            } else {
                                $('#productAttributeId').val(attributeId);
                            }
                        }).done(function() {
                        if (enableCart) {
                            enableCartActions();
                        }
                    });
                }
            });
        });

        function enableCartActions() {
            $('#increaseQty').removeAttr('disabled');
            $('#decreaseQty').removeAttr('disabled');
            $('#addToCart').removeAttr('disabled');
        }

        function disableCartActions() {
            $('#increaseQty').attr('disabled', 'disabled');
            $('#decreaseQty').attr('disabled', 'disabled');
            $('#addToCart').attr('disabled', 'disabled');
        }
    </script>
    <script async src="https://static.addtoany.com/menu/page.js"></script>
@endsection
