@extends('frontend.layouts.master')

@section('body')
    <!-- Checkout area -->
    <div class="checkout-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <!-- Payment Method -->
                    <div class="payment-method">
                        <!-- Panel Gropup -->
                        <div class="panel-group" id="accordion_one">
                            <!-- Panel Default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#checkut1">
                                            <span class="number">1</span>{{ trans('general.login') }}</a>
                                    </h4>
                                </div>
                                <div id="checkut1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            @auth
                                                <div class="col-lg-6 col-sm-6">
                                                    <form class="checkout-form product-form">
                                                        <h2>{{ trans('message.you_are_logged_in_as') }} {{ auth()->user()->name }}</h2>
                                                        <div class="checkout-form-inner">
                                                            <p>{{ trans('message.checkout') }}</p>
                                                        </div>
                                                    </form>
                                                </div>
                                            @endauth
                                            @guest
                                                <div class="col-lg-6 col-sm-6">
                                                    <form class="checkout-form product-form">
                                                        <h2>{{ trans("general.check_in_as_guest_or_user") }}</h2>
                                                        <div class="checkout-form-inner">
                                                            <p>{{ trans("message.register_with_us") }}</p>
                                                            <div class="i-boxb">
                                                                <input class="checkout-radio" type="radio" name="tag"
                                                                       id="credio"/>
                                                                <label class="cradio"
                                                                       for="credio">{{ trans('checkout_as_guest') }}</label>
                                                            </div>
                                                            <div class="i-boxb">
                                                                <input class="checkout-radio" type="radio" name="tag"
                                                                       id="craiot"/>
                                                                <label class="cradio"
                                                                       for="craiot">{{ trans('general.register') }}</label>
                                                            </div>
                                                            <p>
                                                                <span>{{ trans("message.register_and_save_time") }}</span><br/>
                                                            </p>
                                                        </div>
                                                        <div class="user-bottom fix pull-right">
                                                            <a class="btn btn-lg btn-default btn-theme"
                                                               href="{{ route('register') }}"
                                                            >{{ trans('general.register') }}
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-lg-6 col-sm-6">
                                                    <form method="POST" action="{{ route('login') }}"
                                                          class="checkout-form product-form">
                                                        @csrf
                                                        <h2>Login</h2>
                                                        <div class="submit-review">
                                                            <p class="title"><b>Already registered?</b></p>
                                                            <p>Please log in below</p>
                                                            <div class="account-form">
                                                                <div class="form-goroup">
                                                                    <label>Email Address <sup>*</sup></label>
                                                                    <input type="text" required="required"
                                                                           class="form-control">
                                                                </div>
                                                                <div class="form-goroup">
                                                                    <label>Password <sup>*</sup></label>
                                                                    <input type="password" required="required"
                                                                           class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="user-bottom fix">
                                                            <a href="#">Forgot Your Password?</a>
                                                            <button class="btn custom-button" type="button">login
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            @endguest
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Panel Default -->
                            <!-- Panel Default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#checkut2">
                                            <span class="number">2</span>Billing Information</a>
                                    </h4>
                                </div>
                                <div id="checkut2" class="panel-collapse collapse in show">
                                    <div class="panel-body">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <form action="{{ route("frontend.cart.store") }}" method="post">
                                                @csrf
                                                <div class="form">
                                                    <div class="card-control">
                                                        <ul>
                                                            <li>
                                                                <div class="field fix">
                                                                    <div class="input-box">
                                                                        <label class="label" for="first">Full Name
                                                                            <em>*</em></label>
                                                                        <input type="text" class=" border-color"
                                                                               name="name"
                                                                               value="{{ auth()->check() ? auth()->user()->name : old('first_name') }}"
                                                                               id="first" required>
                                                                    </div>
                                                                    <div class="input-box">
                                                                        <label class="label" for="email">Email Address
                                                                            <em>*</em></label>
                                                                        <input type="email" class=" border-color"
                                                                               name="email"
                                                                               value="{{ auth()->check() ? auth()->user()->email : old('email') }}"
                                                                               id="email" required>
                                                                    </div>
                                                                    <div class="input-box">
                                                                        <label class="label"
                                                                               for="email">{{ trans('general.mobile') }}
                                                                            <em>*</em></label>
                                                                        <input type="email" class=" border-color"
                                                                               name="email"
                                                                               placeholder="+96566666666"
                                                                               value="{{ auth()->check() ? auth()->user()->mobile : old('mobile') }}"
                                                                               id="email" required>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="field fix">
                                                                    <div class="input-box">
                                                                        <label class="label"
                                                                               for="Telephone">{{ trans("general.phone") }}</label>
                                                                        <input type="text" class=" border-color"
                                                                               name="phone"
                                                                               value="{{ auth()->check() ? auth()->user()->phone : old('phone') }}"
                                                                               id="Telephone">
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="field fix">
                                                                    <div class="input-box inhun">
                                                                        <label class="label"
                                                                               for="addr">{{ trans('general.full_address') }}</label>
                                                                        <input type="text" class=" border-color"
                                                                               name="address"
                                                                               id="addr"
                                                                               value="{{ auth()->check() ? auth()->user()->address : old('address') }}"/>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="field fix">
                                                                    <div class="input-box">
                                                                        <label class="label"
                                                                               for="area">{{ trans('general.area') }}</label>
                                                                        <input type="text" class=" border-color"
                                                                               name="area"
                                                                               value="{{ auth()->check() ? auth()->user()->area : old('area') }}"
                                                                               id="area">
                                                                    </div>
                                                                    <div class="input-box">
                                                                        <label class="label"
                                                                               for="Block">{{ trans('general.block') }}</label>
                                                                        <input type="text" class=" border-color"
                                                                               name="block"
                                                                               value="{{ auth()->check() ? auth()->user()->block : old('block') }}"
                                                                               id="Block">
                                                                    </div>
                                                                    <div class="input-box">
                                                                        <label class="label"
                                                                               for="Building">{{ trans('general.building_no') }}</label>
                                                                        <input type="text" class=" border-color"
                                                                               name="building"
                                                                               value="{{ auth()->check() ? auth()->user()->building : old('building') }}"
                                                                               id="Building">
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="field fix">
                                                                    <div class="input-box">
                                                                        <label class="label"
                                                                               for="street">{{ trans('general.street') }}</label>
                                                                        <input type="text" class=" border-color"
                                                                               name="street"
                                                                               value="{{ auth()->check() ? auth()->user()->street : old('street') }}"
                                                                               id="street">
                                                                    </div>
                                                                    <div class="input-box">
                                                                        <label class="label"
                                                                               for="floor">{{ trans('general.floor') }}</label>
                                                                        <input type="text" class=" border-color"
                                                                               name="floor"
                                                                               value="{{ auth()->check() ? auth()->user()->floor : old('floor') }}"
                                                                               id="floor">
                                                                    </div>
                                                                    <div class="input-box">
                                                                        <label class="label"
                                                                               for="apartment">{{ trans('general.apartment') }}</label>
                                                                        <input type="text" class=" border-color"
                                                                               name="apartment"
                                                                               value="{{ auth()->check() ? auth()->user()->apartment : old('apartment') }}"
                                                                               id="apartment">
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="button-check">
                                                        <div class="">
                                                            <span class="left-btn"><a
                                                                        href="{{ route('frontend.cart.index') }}">{{ trans('general.back') }}</a></span>
                                                            <button type="submit" class="btn right-btn custom-button">
                                                                {{ trans('general.save_information') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Panel Default -->
                            <!-- Panel Default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#checkut4">
                                            <span class="number">3</span>{{ trans('general.shipping_method') }}</a>
                                    </h4>
                                </div>
                                <div id="checkut4" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                @if(request()->has('country_id') && $settings->aramex_service)
                                                    <div id="shipping_aramex_cost" class="hidden"
                                                         value="{{ $shippingCost }}">{{ $shippingCost }}</div>
                                                    <div class="place-headline border-below">
                                                        <h5>{{ trans('cart.estimate_shipping_and_tax') }}</h5>
                                                    </div>
                                                    <br>
                                                    <p>{{ trans('cart.destination') }}</p>

                                                    <p class="pull-left">
                                                        <input type="radio" name="delivery_method" value="aramex"
                                                               checked/>
                                                        {{ trans('general.delivery_within_4_days') }}
                                                    </p>
                                                    <p>
                                                        {{ trans('general.country') }} : {{  $country->name }}
                                                    </p>
                                                    <p>
                                                        {{ trans("general.cost") }}
                                                        : {{ $shippingCost }} {{ trans('general.kd') }}
                                                    </p>
                                                    </span>
                                                    <span class="pull-left">
                                                            <img src="{{ asset('images/aramex.png') }}" alt=""
                                                                 class="img-responsive" style="max-width: 60px;">
                                                        </span>
                                                    <label for="shipping_cost">{{ trans('general.aramex') }}</label>
                                            </div>
                                            @endif
                                            @if($country->code === 'KW' && $settings->delivery_service)
                                                <div class="col-lg-12">
                                                    <div class="place-headline border-below">
                                                        <h5>{{ trans('cart.delivery_charge_cost') }}</h5>
                                                    </div>
                                                    <br>
                                                    <p class="pull-left">
                                                        <input type="radio" name="delivery_method" value="normal"/>
                                                        {{ trans('message.shipping_method_message_with_no_aramex') }}
                                                    </p>
                                                    <p>
                                                        {{ trans('general.country') }} : {{  $country->name }}
                                                    </p>
                                                    <label for="shipping_cost"
                                                           class="pull-right">{{ trans('general.delivery_inside_kuwait') }}
                                                        : </label>
                                                    <span id="delivery_cost" class=""
                                                          value="{{ getDeliveryServiceCost() }}">{{ getDeliveryServiceCost() }}  {{ trans("general.kd") }} </span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Panel Default -->
                            <!-- Panel Default -->
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="check-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#checkut5">
                                    <span class="number">4</span>Payment Information</a>
                            </h4>
                        </div>
                        <div id="checkut5" class="panel-collapse collapse in show">
                            <div class="panel-body">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="">
                                        <p><input type="radio" id="knet" name="payment_method" checked/>
                                            <img class="img-xs"
                                                 src="{{asset('img/k-net-icon.png')}}"
                                                 alt="">
                                            <label for="knet">{{ trans('general.knet') }}</label>
                                        </p>
                                        <p><input type="radio" id="master" name="payment_method"/>
                                            <img class="img-xs-visa"
                                                 src="{{asset('img/payment.png')}}" alt="payment">
                                            <label for="master">{{ trans("general.master_or_visa") }}</label>
                                        </p>
                                        @if($country->code === 'KW' && $settings->delivery_service)
                                            <p><input type="radio" id="delivery" name="payment_method"/>
                                                <img class="img-xs"
                                                     src="{{asset('img/cash-icon.png')}}"
                                                     alt="cash">
                                                <label
                                                        for="delivery">{{ trans("general.cash_on_delivery") }}</label>
                                            </p>
                                        @endif
                                    </div>
                                    <div class="button-check">
                                        <div class="">
                                                    <span class="left-btn"><a
                                                                href="{{ route('frontend.cart.index') }}">{{ trans("general.back") }}</a></span>
                                            <button type="submit" class="btn right-btn custom-button">
                                                Continue
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Panel Default -->
                    <!-- Panel Default -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="check-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#checkut6">
                                    <span class="number">5</span>Order Review</a>
                            </h4>
                        </div>
                        <div id="checkut6" class="panel-collapse collapse in show">
                            <div class="panel-body">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="table-responsive">
                                        <table class="tablec">
                                            <tr>
                                                <td>{{ trans('general.product_name') }}</td>
                                                <td>{{ trans('general.price') }}</td>
                                                <td>{{ trans('general.qty') }}</td>
                                                <td>{{ trans('general.subtotal') }}</td>
                                            </tr>
                                            @foreach($cart as $item)
                                                <tr>
                                                    <td>{{ $item->options->product->name }}</td>
                                                    <td><p class="tabletextp">{{ $item->price }}</p></td>
                                                    <td>{{ $item->qty }}</td>
                                                    <td>
                                                        <p class="tabletextp">{{ session()->get('currency')->symbol }}  {{ $item->price }}</p>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="3">
                                                    <p class="tabletext">{{ trans('general.subtotal') }}</p>
                                                    <p class="tabletext">{{ trans('general.shipping_cost') }}</p>
                                                    <p class="tabletext">{{ trans('general.grand_total') }}</p>
                                                </td>
                                                <td>
                                                    <p class="tabletextp">{{ getCartNetTotal() }} {{ trans('general.kd') }}</p>
                                                    <p class="tabletextp">
                                                        <span id="finalDeliveryCost"></span> {{ trans('general.kd') }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4">
                                                    <div class="button-check">
                                                        <div class="">
                                                                    <span class="left-btn"><a
                                                                                href="{{ route('frontend.cart.index') }}">{{ trans('general.forget_item_edit_here') }}</a></span>
                                                            <button type="submit"
                                                                    class="btn right-btn custom-button">
                                                                {{ trans('general.continue') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Panel Default -->
                </div>
                <!-- End Panel Gropup -->
            </div>
        </div>
    </div>
    <!-- End Payment Method -->
    </div>
    </div>
    <!-- end discount area -->
@endsection