@if($element->title_en === 'aboutus')
@if($branches->isNotEmpty())
<div class="col-lg-12">
    <div class="widget text-center">
        <h4 class="widget-title">{{ trans('general.branches') }}</h4>
        <table class="table-bordered text-center">
            <th class="text-center">{{ trans('general.branch_name') }}</th>
            <th class="text-center">{{ trans('general.branch_phone_name') }}</th>
            <th class="text-center">{{ trans('general.branch_location') }}</th>
            @foreach($branches->chunk(3) as $divided)
            {{--<div class="col-lg-12">--}}
                {{--<ul>--}}
                    @foreach($divided as $branch)
                    <tr>

                        <td class="col-lg-4"
                            style="min-width: 200px;">
                            <a class="btn-sm"
                               href="https://www.google.com/maps/search/?api=1&query={{ $branch->latitude }},{{ $branch->longitude }}">
                                {{ $branch->name }}
                            </a>
                        </td>
                        <td class="col-lg-4">
                            {{ $branch->phone }}</td>
                        <td class="col-lg-4"
                            style="min-width: 200px;">
                            <a class="btn-sm"
                               href="https://www.google.com/maps/search/?api=1&query={{ $branch->latitude }},{{ $branch->longitude }}">
                                {{ trans('general.location') }}
                            </a>
                        </td>

                    </tr>
                    @endforeach
                    {{--</ul>--}}
                {{--</div>--}}
            @endforeach
        </table>
    </div>
</div>
<hr>
<hr class="page-divider small"/>
<div class="col-md-12 text-center">
    <div class="widget">
        <div class="page-header">
            <h4>{{ trans('message.aboutus_message') }}</h4>
        </div>
        <ul class="social-icons"
            style="display: flex; justify-content: center; align-items: center">
            @if($settings->facebook)
            <li><a href="{{ $settings->facebook }}" class="facebook">
                    <i class="fa fa-facebook fa-3x" style="color : lightskyblue"></i>
                </a>
            </li>
            @endif
            @if($settings->twitter)
            <li><a href="{{ $settings->twitter }}" class="twitter">
                    <img
                        class=" img-xs"
                        src="{{ asset('images/twitter.png') }}"
                    >
                </a>
            </li>
            @endif
            @if($settings->youtube)
            <li><a href="{{ $settings->youtube }}" class="twitter">
                    <img
                        class=" img-xs"
                        src="{{ asset('images/youtube.png') }}"
                    >
                </a></li>
            @endif
            @if($settings->instagram)
            <li><a href="{{ $settings->instagram}}" class="twitter">
                    <img
                        class="img-xs"
                        src="{{ asset('images/instagram.png') }}"
                    >
                </a></li>
            @endif
            @if($settings->whatsapp)
            <li>
                <a href="https://api.whatsapp.com/send?phone={{ $settings->whatsapp  }}"
                   class="instagram">
                    <img
                        class=" img-xs"
                        src="{{ asset('images/whatsapp.png') }}"
                    >
                </a></li>
            @endif
            @if($settings->snapchat)
            <li><a href="{{ $settings->snapchat }}" class="snapchat">
                    <img class=" img-xs" src="{{ asset('images/snap.png') }}"/></a></li>
            @endif
        </ul>
    </div>
</div>
@endif
@endif