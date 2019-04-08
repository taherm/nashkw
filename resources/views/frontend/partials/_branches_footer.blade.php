@if($branches && $branches->isNotEmpty())
<div class="col-lg-6">
    <div class="widget">
        <h4 class="widget-title">{{ trans('general.branches') }}</h4>
        @foreach($branches->groupBy('country.id') as $group)
        <div class="col-lg-3">
            @if($group->first()->country_id)
            <h4>{{ $group->first()->country->name }}
                <hr>
            </h4>
            @endif
            <ul>
                @foreach($group as $branch)
                <li><i class="fa fa-map-marker"></i>
                    <a class="btn-sm" href="https://www.google.com/maps/search/?api=1&query={{ $branch->latitude }},{{ $branch->longitude }}">
                        {{ $branch->name }} &nbsp; - &nbsp;
                    </a>
                    {{ $branch->phone }}
                </li>
                @endforeach
            </ul>
        </div>
        @endforeach
    </div>
</div>
@endif