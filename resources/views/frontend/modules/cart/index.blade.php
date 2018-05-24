@extends('frontend.layouts.master')
@section('body')
    <div class="feature-product-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="feature-headline section-heading text-center">
                        <h2>{{ trans('cart.shopping_cart') }}</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @if($cart->isEmpty())
                        <div class="text-center">
                            <h1>{{ trans('cart.empty') }}</h1>
                            <p><a href={{route('home')}}> {{trans('cart.browse')}} </a></p>
                        </div>
                    @else
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-remove">{{ trans('cart.remove') }}</th>
                                    <th class="product-thumbnail">{{ trans('cart.image') }}</th>
                                    <th class="product-thumbnail">{{ trans('cart.color') }}</th>
                                    <th class="product-thumbnail">{{ trans('cart.size') }}</th>
                                    <th class="product-name">{{ trans('cart.product_name') }}</th>
                                    <th class="real-product-price">{{ trans('cart.unit_price') }}</th>
                                    <th class="product-quantity">{{ trans('cart.qty') }}</th>
                                    <th class="product-subtotal">{{ trans('cart.sub_total') }}</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($cart as $item)
                                    <tr>
                                        <td class="product-remove">
                                            <a href="{{ route('frontend.cart.remove',$item->id) }}">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>

                                        <td class="product-thumbnail">
                                            <a href="{{ route('frontend.product.show',$item->options->product->id) }}">
                                                <img src="{{ asset('storage/uploads/images/thumbnail/'.$item->options->product->image) }}"
                                                     width="100" height="100" alt="" class="img-rounded img-thumbnail"/>
                                            </a>
                                        </td>

                                        <td class="product-thumbnail">
                                            {{--{{ dd($item->options->colorName) }}--}}
                                            <div class="col-lg-1 col-lg-push-4"
                                                 style="text-align: center; border: 1px solid lightgrey; min-height : 30px; margin: 3px; background-color : {!! $item->options->colorName !!}"></div>
                                        </td>

                                        <td class="product-thumbnail">
                                            <div class="col-lg-1">{{ $item->options->sizeName }}</div>
                                        </td>

                                        <td class="product-name">
                                            <a href="{{ route('frontend.product.show',$item->options->product->id) }}">{{ $item->name }}</a>
                                        </td>

                                        <td class="real-product-price">
                                            <span class="sale_price">{{$item->price}} {{ trans('general.kd') }} </span>
                                            {{--<span class="amounte">{{ $item->options->product->sale_price }} KD </span>--}}
                                        </td>

                                        <td class="product-quantity">
                                            <input type="number" name="quantity_{{$item->options->product->id}}"
                                                   value="{{ $item->qty }}"/>
                                        </td>

                                        <td class="product-subtotal">{{ $item->price * $item->qty }} {{ trans('general.kd') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="cart-s-btn">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                        <div class="buttons-cart">
                                            <a href="{{ route('home') }}">{{ trans('cart.continue_shopping') }}</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-8 col-xs-12 col-md-push-2">
                                        {{--<div class="buttons-cart button-cart-right">--}}
                                        {{--<span class="shopping-btn">--}}
                                        {{--<button type="submit"--}}
                                        {{--class="btn custom-button">{{ trans('cart.update_shopping_cart') }}--}}
                                        {{--</button>--}}
                                        {{--</span>--}}
                                        {{--</div>--}}
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-8 col-xs-12 col-md-push-2">
                                        <div class="place-section" style="padding: 0px;">
                                            <Form action="{{ route('frontend.cart.clear') }}" method="get">
                                                <button type="submit"
                                                        class="col-lg-12 btn custom-button">{{ trans('cart.clear_cart') }}
                                                </button>
                                            </Form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- table end -->
                        <!-- place selection start -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="place-section">
                                    <div class="place-headline">
                                        <h4>{{ trans('general.coupon') }}</h4>
                                        <p>{{ trans('message.have_coupon_message') }}</p>
                                        <form action="{{ route('frontend.cart.coupon') }}" method="post">
                                            @csrf
                                            <div class="code-search">
                                                <input type="text" name="code" value=""
                                                       placeholder="{{ trans('general.coupon_code') }}">
                                                <button type="submit">{{ trans('general.apply_coupon') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
                                <div class="place-section">
                                    {{--                                    {!! Form::open(['route' => ['cart.checkout'], 'method' => 'POST'], ['class'=>'']) !!}--}}
                                    <Form action="{{ route('frontend.cart.checkout') }}" method="get">
                                        <div class="place-headline">
                                            <h4>{{ trans('cart.estimate_shipping_and_tax') }}</h4>
                                            <p>
                                                <span>{{ trans('cart.enter_ur_destination') }}</span></br>
                                                <span class="pull-left">
                                                {{ trans('general.delivery_within_4_days') }}</br>
                                            </span>
                                                <span class="pull-right">
                                            <img src="/meem/frontend/img/aramex.png" alt=""
                                                 class="img-responsive" style="max-width: 60px;">
                                        </span>
                                            </p>
                                            </br>
                                            </br>
                                        </div>
                                        <div class="search-categori">
                                            <h5>{{ trans('general.country') }}</h5>
                                            <div class="category">
                                                <select class="orderby country-dropdown"
                                                        name="shipping_country" id="country"
                                                        placeholder='{{ trans('general.select_country') }}'>
                                                    <option value="">{{ trans('general.country') }}</option>
                                                    @foreach($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="search-categori">
                                            <h5>{{ trans('general.area') }}</h5>
                                            <div class="category">
                                                <select class="disabled country-dropdown" name="area" id="areas">
                                                    <option value="">{{ trans('general.area') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="rate-subtotal">
                                            @if(getCouponValue())
                                                <div class="col-lg-12">
                                                    <h2>{{ trans('general.discount') }}
                                                        <span>{{ getCouponValue() }} {{ trans('general.kd') }}</span>
                                                    </h2>
                                                </div>
                                            @endif
                                            <div class="col-lg-12">
                                                <h2>{{ trans('general.grand_total') }}
                                                    <span>{{ getCartNetTotal() }} {{ trans('general.kd') }}</span></h2>
                                            </div>
                                            <button type="submit" id="forward" disabled
                                                    class="col-lg-12 btn custom-button">{{ trans('cart.proceed_to_checkout') }}
                                            </button>
                                        </div>
                                    </Form>


                                </div>

                            </div>
                        </div>

                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    @parent
    <script type="text/javascript">
        $(document).ready(function() {
            $('#areas').html('<option value="">Select Area</option>');
            $('#country').on('change', function(e) {
                countryCode = e.target.value;
                console.log('countryCode', countryCode);
                $('#areas').html('').toggleClass('disabled');
                $('#forward').attr('disabled', 'disabled');
                $.get('/api/country/' + countryCode, function(data) {
                    return setTimeout(injectAreas(data), 4000);
                });
            });
            $('#areas').on('change', function() {
                return setTimeout($('#forward').removeAttr('disabled'), 2000);
            })

            function injectAreas(data) {
                for (var i in data) {
                    data[i].map(function(v, index) {
                        $('#areas').append(`<option value="${v}">${v}</option>`)
                    });

                }
            }
        });
    </script>
@endsection




