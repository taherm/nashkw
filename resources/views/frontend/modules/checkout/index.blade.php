@extends('frontend.layouts.master')

@section('body')
    <!-- Checkout area -->
    <div class="checkout-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-12">
                    <!-- Payment Method -->
                    <div class="payment-method">
                        <!-- Panel Gropup -->
                        <div class="panel-group" id="accordion_one">
                            <!-- Panel Default -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="check-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#checkut1">
                                            <span class="number">1</span>Checkout Method</a>
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
                                                        <h2>Checkout as a Guest or Register</h2>
                                                        <div class="checkout-form-inner">
                                                            <p>Register with us for future convenience:</p>
                                                            <div class="i-boxb">
                                                                <input class="checkout-radio" type="radio" name="tag"
                                                                       id="credio"/>
                                                                <label class="cradio" for="credio">Checkout as
                                                                    Guest</label>
                                                            </div>
                                                            <div class="i-boxb">
                                                                <input class="checkout-radio" type="radio" name="tag"
                                                                       id="craiot"/>
                                                                <label class="cradio" for="craiot">Register</label>
                                                            </div>
                                                            <p>
                                                                <span>Register and save time!</span><br/>
                                                                Register with us for future convenience:<br/>
                                                                Fast and easy check out<br/>
                                                                Easy access to your order history and status<br/>
                                                            </p>
                                                        </div>
                                                        <div class="user-bottom fix">
                                                            <button class="btn custom-button" type="button">continue
                                                            </button>
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
                                                                               id="first" required/>
                                                                    </div>
                                                                    <div class="input-box">
                                                                        <label class="label" for="email">Email Address
                                                                            <em>*</em></label>
                                                                        <input type="email" class=" border-color"
                                                                               name="email"
                                                                               value="{{ auth()->check() ? auth()->user()->email : old('email') }}"
                                                                               id="email" required/>
                                                                    </div>
                                                                    <div class="input-box">
                                                                        <label class="label"
                                                                               for="email">{{ trans('general.mobile') }}
                                                                            <em>*</em></label>
                                                                        <input type="email" class=" border-color"
                                                                               name="email"
                                                                               placeholder="+96566666666"
                                                                               value="{{ auth()->check() ? auth()->user()->mobile : old('mobile') }}"
                                                                               id="email" required/>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="field fix">
                                                                    <div class="input-box">
                                                                        <label class="label"
                                                                               for="Telephone">{{ trans("general.phone") }}
                                                                            <em>*</em></label>
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
                                                                        href="{{ route('frontend.cart.index') }}"><i
                                                                            class="fa fa-long-arrow-left"></i>{{ trans('general.back') }}</a></span>
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
                                <div id="checkut4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="flatrate">
                                                {{ trans('message.shipping_method') }}
                                            </div>
                                        </div>
                                        @if(request()->has('country_id') && $settings->aramex_service)
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="place-headline">
                                                    <h4>{{ trans('cart.estimate_shipping_and_tax') }}</h4>
                                                    <span>{{ trans('cart.destination') }}</span></br>
                                                    <span class="pull-left">
                                                {{ trans('general.delivery_within_4_days') }}</br>
                                                        {{ trans('general.country') }} : {{  $country->name }}
                                            </span>
                                                    <span class="pull-right">
                                            <img src="{{ asset('images/aramex.png') }}" alt=""
                                                 class="img-responsive" style="max-width: 60px;">
                                                        </span>
                                                </div>
                                                @endif
                                            </div>
                                    </div>
                                </div><!-- End Panel Default -->
                                <!-- Panel Default -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="check-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#checkut5">
                                                <span class="number">4</span>Payment Information</a>
                                        </h4>
                                    </div>
                                    <div id="checkut5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="flatrate">
                                                    <p><input type="radio" id="Money"/><label for="Money">Check / Money
                                                            order </label></p>
                                                    <p><input type="radio" id="Credit"/><label for="Credit">Credit Card
                                                            (saved) </label></p>
                                                </div>
                                                <div class="button-check">
                                                    <div class="">
                                                    <span class="left-btn"><a href=""><i
                                                                    class="fa fa-long-arrow-up"></i>Back</a></span>
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
                                    <div id="checkut6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="table-responsive">
                                                    <table class="tablec">
                                                        <tr>
                                                            <td>Product Name</td>
                                                            <td>Price</td>
                                                            <td>Qty</td>
                                                            <td>Subtotal</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Cras neque metus</td>
                                                            <td><p class="tabletextp">&dollar;155</p></td>
                                                            <td>1</td>
                                                            <td><p class="tabletextp">&dollar;155.00</p></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">
                                                                <p class="tabletext">Subtotal</p>
                                                                <p class="tabletext">Shipping & Handling (Flat Rate -
                                                                    Fixed)</p>
                                                                <p class="tabletext">Grand Total</p>
                                                            </td>
                                                            <td>
                                                                <p class="tabletextp">&dollar;155.00</p>
                                                                <p class="tabletextp">&dollar;5.00</p>
                                                                <p class="tabletextp">&dollar;160.00</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="4">
                                                                <div class="button-check">
                                                                    <div class="">
                                                                        <span class="left-btn"><a href="">Forgot an Item? Edit Your Cart</a></span>
                                                                        <button type="submit"
                                                                                class="btn right-btn custom-button">
                                                                            Continue
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
                        <!-- End Payment Method -->
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="checkout-sidebar">
                            <h4>Checkout Progress</h4>
                            <ul>
                                <li><a href="#">Billing Address</a></li>
                                <li><a href="#">Shipping Address</a></li>
                                <li><a href="#">Shipping Method</a></li>
                                <li><a href="#">Payment Method</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end discount area -->
@endsection