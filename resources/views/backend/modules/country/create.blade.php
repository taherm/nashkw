@extends('backend.layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render(Route::currentRouteName()) }}
@endsection
@section('content')
    <div class="portlet box blue">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form action="{{ route('backend.country.store') }}" role="form" method="post" class="horizontal-form" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <h3 class="form-section">Create New Country</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Name Arabic</label>
                                <input type="text" id="name_ar" name="name_ar" class="form-control" placeholder="Country name in arabic" value="{{ old('name_ar') }}"
                                       required>
                                <span class="help-block"> Country is unique </span>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Name English</label>
                                <input type="text" id="name_en" name="name_en" class="form-control" value="{{ old('name_en') }}"
                                       placeholder="name en" required>
                                {{--<span class="help-block"> This field has error. </span>--}}
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Flag </label>
                                <input id="flag" type="file" class="form-control" name="flag">
                                <span class="help-block"> flag size is 400 X 400 </span>
                            </div>
                        </div>
                        {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                                {{--<label class="control-label">Country Background</label>--}}
                                {{--<input id="bg" type="file" class="form-control" name="bg">--}}
                                {{--<span class="help-block"> flag size is ['1534', '586'] </span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6" style="padding-left : 50px;">
                                <div class="form-group">
                                    <label class="control-label sbold">Is Active</label>
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <input type="radio" name="active" id="optionsRadios1" value="1" {{ old('active') ? 'checked' : null }}
                                                   checked> Active </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="active" id="optionsRadios2" value="0" {{ old('active')  ? 'checked' : null  }}>
                                            Not Active</label>
                                    </div>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Country Mobile Code*</label>
                                <input type="number" id="mobile_code" name="mobile_code" class="form-control" value="{{ old('mobile_code') }}"
                                       placeholder="country mobile_code" required>
                                <span class="help-block"> ex. 00965 </span>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">country_iso_alpha3</label>
                                    <input type="text" id="country_iso_alpha3" name="country_iso_alpha3" class="form-control" placeholder="country_iso_alpha3" value="{{ old('country_iso_alpha3') }}"
                                           required>
                                    <span class="help-block"> country_iso_alpha3 ex. KWT </span>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">order</label>
                                <input type="text" id="order" name="order" class="form-control" placeholder="order" value="{{ old('order') }}"
                                       required>
                                <span class="help-block"> ex. 1  (order is the sequence of the countries that shall appear on app List of Countries in Home Interface)</span>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
            </form>
        @include('backend.partials.forms._btn-group')
            <!-- END FORM-->
        </div>
    </div>
    </div>
@endsection

