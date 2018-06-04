<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        @if(request()->has('country_id') && $settings->aramex_service)
            <div class="col-lg-12">
                <div id="shipping_aramex_cost" class="hidden"
                     value="{{ $shippingCost }}">{{ $shippingCost }}</div>
                <div class="place-headline border-below">
                    <h5>{{ trans('cart.estimate_shipping_and_tax') }}</h5>
                </div>
                <br>
                <p> <h5>{{ trans('cart.destination') }}</h5> {{ trans('general.country') }} : {{  $country->name }}</p>
            </div>
            <div class="col-lg-6">
                <p>
                    <input type="radio" name="delivery_method" value="aramex"
                           checked/>
                    {{ trans('general.delivery_within_4_days') }}

                </p>
            </div>
            <div class="col-lg-6">
                <p>
                    {{ trans("general.cost") }}
                    : {{ $shippingCost }} {{ trans('general.kd') }}
                </p>
            </div>
            <div class="col-lg-1 col-lg-push-5">
                <img src="{{ asset('images/aramex.png') }}" alt="" class="img-responsive img-sm">
            </div>
    </div>
    @endif
    @if($country->code === 'KW' && $settings->delivery_service)
        <div class="col-lg-12">
            <div class="col-lg-12">
                <div class="place-headline border-below">
                    <h5>{{ trans('cart.delivery_charge_cost') }}</h5>
                </div>
                <br>
            </div>
            <div class="col-lg-12">
                <p>
                    <input type="radio" name="delivery_method" value="normal"/>
                    {{ trans('message.shipping_method_message_with_no_aramex') }}
                </p>
            </div>
            <div class="col-lg-6">
                <p>
                    {{ trans('general.country') }} : {{  $country->name }}
                </p>
                <p>
                    {{ trans('general.delivery_inside_kuwait') }} : <span id="delivery_cost" class=""
                                                                          value="{{ getDeliveryServiceCost() }}">{{ getDeliveryServiceCost() }}  {{ trans("general.kd") }} </span>
                </p>
            </div>
            <div class="col-lg-1 col-lg-push-5">
                <img src="{{ asset('img/cash-delivery.png') }}" alt="" class="img-responsive img-sm">
            </div>
        </div>
    @endif
</div>