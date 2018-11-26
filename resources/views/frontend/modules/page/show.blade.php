@extends('frontend.layouts.app')

@section('title')
    <title>{{ $element->slug }}</title>
    <meta name="description" content="{!! $element->slug_ar .' '. $element->slug_en !!}">
    <meta name="keywords" content="{{ $element->slug . config('app.name')  }}"/>
@endsection


@section('body')
    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs">
        <div class="container">
            <div class="page-header">
                <h1>{{ $element->slug }}</h1>
            </div>
            @include('frontend.partials._breadcrumbs',['name' => $element->slug])
        </div>
    </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">

            <h2 class="section-title"><span>{{ $element->slug }}</span></h2>
            <div style="min-height: 400px;">
                {!! $element->content !!}
                @if($element->title_en === 'aboutus')
                    @if($branches->isNotEmpty())
                        <div class="col-lg-12">
                            <div class="widget">
                                <h4 class="widget-title">{{ trans('general.branches') }}</h4>
                                @foreach($branches->chunk(3) as $divided)
                                    <div class="col-lg-3">
                                        <ul>
                                            @foreach($divided as $branch)
                                                <li><i class="fa fa-map-marker"></i><a class="btn-sm"
                                                                                       href="https://www.google.com/maps/search/?api=1&query={{ $branch->latitude }},{{ $branch->longitude }}">
                                                        {{ $branch->name }} - {{ $branch->phone }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                @endif
            </div>
            <hr class="page-divider small"/>
        </div>
    </section>
    <!-- /PAGE -->
@endsection
