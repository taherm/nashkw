<div class="row">
    {{--<div class="feature-product-4 product-carousel derection-key">--}}
        <div class="bestseller-product product-carousel derection-key">
        <!-- single-product start -->
        @foreach($products as $product)
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- single-product end -->
                <div class="single-product">
                    <div class="product-details">
                        <div class="price-box">
                            @if($product->on_sale)
                                <span class="old-price">
                                    {{ $product->convertedPrice }} - {{ $currency->symbol }}
                                </span>
                                <span class="new-price">{{ $product->convertedSalePrice }}
                                    {{ $product->symbol }}
                                </span>
                            @else
                                <span class="new-price">{{ $product->convertedPrice }} - {{ $currency->symbol }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="product-img">
                        @if($product->on_sale)
                            <span class="sale-text">{{ trans('general.sale') }}</span>
                        @elseif($product->created_at)
                            <span class="sale-text new-sale">{{ trans('general.new') }}</span>
                        @endif
                        <a href="{{ route('frontend.product.show',$product->id) }}">
                            <img class="primary-img"
                                 src="{{ asset('uploads/images/thumbnail/'.$product->image) }} "
                                 alt="{{ $product->name }}">

                            @if(isset($product->gallery->images->first()->thumb_url))
                                <img class="secondary-img"
                                     src="{{ asset('uploads/images/thumbnail/'.$product->gallery->images->first()->thumb_url) }} "
                                     alt="{{ $product->name }}">
                            @endif
                        </a>
                        <div class="add-action">
                            <ul>
                                <li>
                                    {{--@if($product->liked())--}}
                                    {{--<a href="{{ route('wishlist.remove',$product->id) }}" data-toggle="tooltip"--}}
                                    {{--title="Remove from Wishlist">--}}
                                    {{--<i class="fa fa-heart" style="color: red"></i>--}}
                                    {{--</a>--}}
                                    {{--@else--}}
                                    {{--<a href="{{ route('wishlist.add',$product->id) }}" data-toggle="tooltip"--}}
                                    {{--title="Add to Wishlist">--}}
                                    {{--<i class="fa fa-heart-o"></i>--}}
                                    {{--</a>--}}
                                    {{--@endif--}}
                                </li>
                                <li class="quickview" data-toggle="tooltip" title="Quick view">
                                    <a href="#" title="Quick view"
                                       data-toggle="modal"
                                       data-target="#productModal"
                                       data-name="{{ $product->name }}"
                                       data-saleprice="{{ $product->convertedFinalPrice  }} KD"
                                       data-price="{{ $product->price }} KD"
                                       data-link="{{ route('frontend.product.show',$product->id) }}"
                                       data-image="{{ asset('uploads/images/medium/'.$product->image) }}"
                                       data-description="{{ $product->description }}">

                                        <i class="fa fa-eye"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-name">
                            <h3>
                                <a href="{{ route('frontend.product.show',$product->id) }}">{{  str_limit($product->name, 20) }}</a>
                            </h3>
                        </div>
                    </div>
                    <div class="add-to-cart" style="padding-top: 15px;">
                        <a href="{{ route('frontend.product.show',$product->id)  }}">{{ ucfirst(trans('general.view_product_details')) }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- carousel-end -->
