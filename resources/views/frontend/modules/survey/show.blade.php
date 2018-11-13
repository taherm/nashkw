@extends('frontend.layouts.app')

@section('title')
    <title>{{ $element->name }}</title>
@endsection


@section('body')
    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs">
        <div class="container">
            <div class="page-header">
                <h1>{{ $element->name }}</h1>
            </div>
            @include('frontend.partials._breadcrumbs',['name' => $element->slug])
        </div>
    </section>
    <!-- /BREADCRUMBS -->

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">
            <hr class="page-divider small"/>
            <div class="message-box">
                <div class="message-box-inner">
                    <h2>{{ $element->description }}</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- /PAGE -->

    <!-- PAGE -->
    <section class="page-section">
        <div class="container">
            <div class="col-lg-12">
                <h3 class="block-title alt text-center"><i class="fa fa-list-alt"></i>{{ $element->name }}</h3>
                <!-- Contact form -->
                <form name="contact-form" method="post" action="{{ route('frontend.survey.store') }}"
                      class="contact-form">
                    @csrf
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group"><input class="form-control" type="text" name="name" required
                                                       placeholder="{{ trans('general.name') }}"></div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group"><input class="form-control" type="text" name="mobile" required
                                                       placeholder="{{ trans('general.mobile') }}"></div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group"><input class="form-control" type="text" name="email"
                                                       placeholder="{{ trans('general.email') }}"></div>
                    </div>
                    @foreach($element->questions as $q)
                        <div class="col-lg-12">
                            @if($q->is_multi)
                                <h3 class="block-title alt">
                                    <i class="fa fa-question"></i>
                                    @if($q->notes)
                                        <small>
                                            {{ $q->notes }}
                                        </small>
                                    @endif
                                    {{ $q->name }}
                                </h3>
                                @foreach($q->answers as $a)
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="radio" name="question_id[{{ $q->id }}]"
                                                   value="{{ $a->value }}">
                                            @if($a->icon)
                                                &nbsp;<i class="fa fa-fw fa-{{ $a->icon }}"></i>
                                            @endif
                                            @if($a->name)
                                                <label class="label "
                                                       for="question_id[{{ $q->id }}]">{{ str_limit($a->name,20,'') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @elseif($q->is_text)
                                <h3 class="block-title alt"
                                    @if($q->notes)
                                    data-toggle="tooltip" title="{{ $q->notes }}"
                                        @endif
                                ><i class="fa fa-question"></i>{{ $q->name }}</h3>
                                <div class="form-group af-inner">
                                    <label class="sr-only" for="input-message">{{ $q->notes }}</label>
                                    <textarea
                                            name="text[{{ $q->id }}]" placeholder="{{ trans('general.answer') }}"
                                            rows="4"
                                            cols="50"
                                            @if($q->notes)
                                            data-toggle="tooltip" title="{{ $q->notes }}"
                                            @endif
                                            class="form-control placeholder"></textarea>
                                </div>
                            @endif
                        </div>
                    @endforeach
                    <hr class="page-divider">
                    <div class="outer required">
                        <div class="form-group af-inner">
                            <input type="submit" name="submit"
                                   class="form-button form-button-submit btn btn-theme btn-theme-dark"
                                   value="{{ trans('general.submit') }}"/>
                        </div>
                    </div>

                </form>
                <!-- /Contact form -->
            </div>
            <hr class="page-divider small"/>
        </div>
    </section>
    <!-- /PAGE -->
@endsection
