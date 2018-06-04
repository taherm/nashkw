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