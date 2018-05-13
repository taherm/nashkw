<ul>
    <li><span>{{ trans('general.language') }}</span>
        <ul style="left: 0px; width: 80px;">
            <li><a href="{{ route('frontend.language.change',['locale' => 'ar']) }}">{{ trans('general.arabic') }}</a></li>
            <li><a href="{{ route('frontend.language.change',['locale' => 'en']) }}">{{ trans('general.english') }}</a></li>
        </ul>
    </li>
    <li class="currency"><span>{{trans('general.currency')}}</span> <img width="20" height="20"
                                                    src="{{asset('img/flags/'.strtolower(session()->get('currency')).'.png')}}"
                                                    style="padding-right: 5px; padding-left: 3px;" id="main-currency-image"/><a
                href="#" id="main-currency-code">{{session()->get('currency') }}</a>
        <ul style="left: 5px;">
            @foreach($currencies as $currency)
                <li>
                    <img width="20" height="20"
                         src="{{asset('img/flags/'.strtolower($currency->code).'.png')}}"
                         style="padding-right: 5px; float: left;padding-top: 9px;padding-left: 3px;" class="currency-images"/>
                    <a href="{{ route('frontend.currency.change',['currency' => strtolower($currency->code)]) }}" class="currency-code">{{ $currency->code }}</a>
                </li>
            @endforeach
            {{--<li><a href="#">eur</a></li>--}}
        </ul>
    </li>
</ul>