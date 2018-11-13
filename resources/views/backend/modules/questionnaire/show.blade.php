@extends('backend.layouts.app')


@section('content')
    <!-- BREADCRUMBS -->
    <section class="page-section breadcrumbs">
        <div class="container">
            <div class="page-header">
                <h1>Name : {{ $element->name }}</h1>
                <h1>Mobile : {{ $element->mobile }}</h1>
                <h1>Email : {{ $element->email }}</h1>
            </div>
        </div>
    </section>
    <!-- /BREADCRUMBS -->

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
                        <div class="form-group"><input disabled class="form-control" type="text" name="name" required
                                                       placeholder="{{ trans('general.name') }}"></div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group"><input disabled class="form-control" type="text" name="mobile" required
                                                       placeholder="{{ trans('general.mobile') }}"></div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="form-group"><input disabled class="form-control" type="text" name="email"
                                                       placeholder="{{ trans('general.email') }}"></div>
                    </div>
                    @foreach($element->results as $r)
                        <div class="col-lg-12">
                            @if($r->question->is_multi)
                                <h3 class="block-title alt">
                                    <i class="fa fa-question"></i>
                                    @if($r->question->notes)
                                        <small>
                                            {{ $r->question->notes }}
                                        </small>
                                    @endif
                                    {{ $r->question->name }}
                                </h3>
                                @foreach($r->question->answers as $a)
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input disabled type="radio" name="question_id[{{ $r->question->id }}]"
                                                   value="{{ $a->value }}">
                                            @if($a->icon)
                                                &nbsp;<i class="fa fa-fw fa-{{ $a->icon }}"></i>
                                            @endif
                                            @if($a->name)
                                                <label class="label "
                                                       for="question_id[{{ $r->question->id }}]">{{ str_limit($a->name,20,'') }}</label>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            @elseif($r->question->is_text)
                                <h3 class="block-title alt"
                                    @if($r->question->notes)
                                    data-toggle="tooltip" title="{{ $r->question->notes }}"
                                        @endif
                                ><i class="fa fa-question"></i>{{ $r->question->name }}</h3>
                                <div class="form-group af-inner">
                                    <label class="sr-only" for="input-message">{{ $r->question->notes }}</label>
                                    <textarea
                                            disabled
                                            name="text[{{ $r->question->id }}]" placeholder="{{ trans('general.answer') }}"
                                            rows="4"
                                            cols="50"
                                            @if($r->question->notes)
                                            data-toggle="tooltip" title="{{ $r->question->notes }}"
                                            @endif
                                            class="form-control placeholder"></textarea>
                                </div>
                            @endif
                        </div>
                    @endforeach
                    <hr class="page-divider">
                    <div class="outer required">
                        <div class="form-group af-inner">
                            <input disabled type="submit" name="submit"
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
