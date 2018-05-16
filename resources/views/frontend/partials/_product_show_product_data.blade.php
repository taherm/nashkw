<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 single-product-details">
    <div class="product-details shop-review ">
        <div class="col-lg-12" style="padding-left: 0px;padding-right: 0px;">
            <div class="col-lg-10" style="padding-left: 0px;padding-right: 0px;">
                <div class="product-name">
                    <h3>{{$product->name}}</h3>
                </div>
            </div>
            <div class="col-lg-2 {{ app()->isLocale('ar') ? 'pull-left' : 'pull-right' }}">
                <div class="sin-product-icons fix">
                    <div class="add-action">
                        <ul>
                            <li>
                                @if($product->favorited)
                                    <a href="{{ route('frontend.favorite.remove',$product->id) }}"
                                       data-toggle="tooltip" title="Remove from Wishlist">
                                        <i class="fa fa-heart" style="color: red"></i>
                                    </a>
                                @else
                                    <a href="{{ route('frontend.favorite.store',$product->id) }}"
                                       data-toggle="tooltip" title="Add to Wishlist">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-name">
            <h3 style="font-size: 15px;">{{ trans('general.sku') }} : ({{$product->sku}})</h3>
        </div>
        @include('frontend.partials._social_btns')
        {{--<div class="price-box" style="border-top: 1px solid grey; padding-top: 20px; margin : 10px">--}}
        {{--@if($product->on_sale)--}}
        {{--<span class="old-price">--}}
        {{--{{ $product->price }}  {{ $currency->symbol }}--}}
        {{--</span>--}}
        {{--<span class="new-price">--}}
        {{--{{ $product->sale_price }}  {{ $currency->symbol }}--}}
        {{--</span>--}}
        {{--@if($currency->symbol !== 'KWD')--}}
        {{--<div>--}}
        {{--<p style="margin: 0px;padding-top: 15px;font-size: 10px;">{{trans('general.approximately')}}</p>--}}
        {{--<span class="old-price" style="font-size: 13px;">--}}
        {{--{{ $product->convertedPrice }}  {{ $currency->symbol }}--}}
        {{--</span>--}}
        {{--<span class="new-price" style="font-size: 13px;">--}}
        {{--{{ $product->convertedSalePrice }}  {{ $currency->symbol }}--}}
        {{--</span>--}}
        {{--</div>--}}
        {{--@endif--}}
        {{--@else--}}
        {{--<span class="new-price">{{ $product->convertedPrice }}  {{ $currency->symbol }}</span>--}}
        {{--@if($currency->symbol != 'KWD')--}}
        {{--<div>--}}
        {{--<p style="margin: 0px;padding-top: 15px;font-size: 10px;">{{ trans('general.approx') }}.</p>--}}
        {{--<span class="new-price"--}}
        {{--style="font-size: 13px;">{{ $product->convertedSalePrice }} - {{ $currency->symbol }}--}}
        {{--</span>--}}
        {{--</div>--}}
        {{--@endif--}}
        {{--@endif--}}

        {{--</div>--}}
        @if($product->totalQty > 0)
            <p class="availability in-stock">{{ trans('general.availability') }}:
                <span>In stock</span></p>
        @else
            <p class="availability in-stock">{{ trans('general.availability') }} : <span
                        style="color: #ff0000;">Out stock</span>
            </p>
            @endif
            {{--<p class="availability in-stock">--}}
            {{--@if(currency()->getCurrency(session()->get('currency')) == 'KWD')--}}
            {{--<i class="fa fa-truck" aria-hidden="true"></i>--}}
            {{--<strong>{{ trans('general.free_delivery_within_24_hours') }}</strong>--}}
            {{--@elseif(currency()->getCurrency(session()->get('currency')) == 'SAR')--}}
            {{--<img src="{{asset('meem/frontend/img/aramex.png')}}" width="40"/>--}}
            {{--@else--}}
            {{--<img src="{{asset('meem/frontend/img/aramex.png')}}" width="40"/>--}}
            {{--<strong>{{ trans('general.delivery_within_3_days') }}</strong>--}}
            {{--@endif--}}
            {{--</p>--}}
            </br>
            <div class="product-review">
                <p>{!! $product->description !!}</p>
            </div>
            @if($product->totalQty > 0)
                <div class="add-to-cart cart-sin-product">
                    <div class="quick-add-to-cart">
                        <form method="post" class="cart">
                            <div class="qty-button">
                                <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty"
                                       name="qty">

                                <div class="box-icon button-plus">
                                    <input type="button" class="qty-increase "
                                           onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;"
                                           value="+">
                                </div>
                                <div class="box-icon button-minus">
                                    <input type="button" class="qty-decrease"
                                           onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;"
                                           value="-">
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <button type="submit">{{ trans('general.add_to_cart') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

            {{-- remove from here --}}
                <div class="add-to-cart cart-sin-product">
                    @if($product->product_attributes->unique('size')->contains(function ($value, $key) {
                    return ($value->size->size != 'none' AND $value->qty > 0);
                    }))
                        <div class="quick-add-to-cart">
                            <div class="col-lg-6">
                                <div>{{ trans('general.size') }}</div>
                            </div>
                            <div class="col-lg-12"
                                 style="padding-left: 0px;padding-right: 0px;">
                                <div class="col-lg-6">

                                    <select class="input-text qty"
                                            name="size" id="size">
                                        <option value="none">{{ trans('general.size_select') }}</option>
                                        @foreach($product->product_attributes->unique('size') as $attribute)
                                            @if($attribute->qty > 0)
                                                <option value="{{$attribute->size->id}}">{{$attribute->size->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                Size Chart Image Table will only Show if the parent category not limited
                                {{--@if(!$product->parent()->first()->limited)--}}
                                    {{--<a href="#" data-toggle="modal" data-target="#imagemodal"--}}
                                       {{--title="Check Item Sizes!"--}}
                                       {{--style="text-decoration: none;border: navajowhite;color: #b2dab7;font-size: 12px;">--}}
                                        {{--{{ trans('general.size_charts') }}</a>--}}
                                {{--@endif--}}
                            </div>
                        </div>
                        <input id="size_attribute" value="found" style="display: none;">
                    @else
                        <input id="size_attribute" value="not-found" style="display: none;">
                    @endif
                    @if($product->product_attributes->unique('color')->contains(function ($value, $key) {
                    return ($value->color->name != 'none' AND $value->qty > 0);
                    }))
                        <div class="quick-add-to-cart">
                            <div class="col-lg-6">{{ trans('general.color') }}</div>
                            <div class="col-lg-12"
                                 style="padding-left: 0px;padding-right: 0px;">
                                <div class="col-lg-6">
                                    <select class="input-text qty" name="color"
                                            id="color">
                                        <option value="none">{{ trans('general.select_color') }}</option>

                                        @foreach($product->product_attributes->unique('color') as $attribute)
                                            @if($attribute->qty > 0)
                                                <option value="{{$attribute->color->id}}">{{$attribute->color->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    @foreach($product->product_attributes->unique('color') as $attribute)
                                        <div class="col-lg-1"
                                             style="border: 1px solid lightgrey; min-height : 30px; margin: 3px; background-color : {!! $attribute->color->code !!}"></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <input id="color_attribute" value="found" style="display: none;">
                    @else
                        <input id="color_attribute" value="not-found" style="display: none;">
                    @endif

                    <div class="quick-add-to-cart col-lg-12" style="padding-top: 3%;">
                        <Form action="{{ route('frontend.cart.add') }}" method="post" class="cart">
                            <input type="hidden" name="product_id" value="{{ $product->id }}" id="productId">
                            <input type="hidden" name="product_attribute_id" value="" id="productAttributeId">
                            <div class="qty-button">
                                <input type="text" class="input-text qty" title="Qty" value="1"
                                       maxlength="3" id="quantity" name="quantity"
                                       style="height: 42px;">
                                <input type="hidden" id="max_qty" value="1"/>
                                <div class="box-icon button-plus">
                                    <input id="increaseQty" type="button" class="qty-increase "
                                           value="+"
                                           style="{{ app()->isLocale('ar') ?  'margin-right: -90px; margin-top: -8px; width:20px;' :  'padding-right: 20px; top: -27px;' }} outline: none;"
                                           disabled>
                                </div>
                                <div class="box-icon button-minus">
                                    <input id="decreaseQty" type="button" class="qty-decrease"
                                           onclick="var qty_el = document.getElementById('quantity'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) qty_el.value--;return false;"
                                           value="-"
                                           style="{{ app()->isLocale('ar') ?  'top: -31px; margin-right: -111px; width:20px;' :  'padding-right: 8px;top: -31px;' }} outline: none;"
                                           disabled>
                                </div>
                            </div>


                            <div class="add-to-cart">
                                <button id="addToCart" type="submit" class="btn custom-button"
                                        disabled>
                                    {{ trans('general.add_to_cart') }}
                                </button>
                            </div>
                        </Form>
                    </div>
                </div>
            <!-- Add to cart end -->
            @endif
    </div>
</div>