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