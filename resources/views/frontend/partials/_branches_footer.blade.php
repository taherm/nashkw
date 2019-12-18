@if($branches && $branches->isNotEmpty())
<div class="col-lg-6">
    <div class="widget">
        <h4 class="widget-title">{{ trans('general.branches') }}</h4>
        @foreach($branches->groupBy('country.id') as $group)
        <div class="row">
            <div class="col-lg-6">
                @if($group->first()->country_id)
                <h4>{{ $group->first()->country->name }}
                    <hr>
                </h4>
                @endif
                <ul>
                    @foreach($group as $branch)
                    <li>{{--<i class="fa fa-map-marker"></i>--}}
                        {{-- <a class="btn-sm" href="https://www.google.com/maps/search/?api=1&query={{ $branch->latitude }},{{ $branch->longitude }}">
                        <font size="4"> {{ $branch->name }} </font>
                        </a>--}}
                        <a class="btn-sm" href="#">
                            <font size="4"> {{ $branch->name }} </font>
                        </a>
                        <br>
                        <font size="4"> {{ $branch->phone }} </font>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif