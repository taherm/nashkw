@extends('backend.layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('backend.product.create') }}
@endsection

@section('content')


    size_chart_image
    description_en
    description_ar
    notes_ar
    notes_en
    image
    start_sale
    end_sale

    <div class="portlet box blue">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST"
                  action="{{ route('backend.product.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <h3 class="form-section">Create Product</h3>
                    {{--name arabic / name english --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('sku') ? ' has-error' : '' }}">
                                <label for="sku" class="control-label">sku *</label>
                                <input id="sku"
                                       type="text"
                                       class="form-control"
                                       name="sku"
                                       value="{{ old('sku') }}"
                                       placeholder="name in arabic"
                                       required autofocus>
                                @if ($errors->has('sku'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('sku') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group {{ $errors->has('name_ar') ? ' has-error' : '' }}">
                                <label for="name_ar" class="control-label">Name Arabic*</label>
                                <input id="name_ar"
                                       type="text"
                                       class="form-control"
                                       name="name_ar"
                                       value="{{ old('name_ar') }}"
                                       placeholder="name in arabic"
                                       required autofocus>
                                @if ($errors->has('name_ar'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('name_ar') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
                                <label for="name_en" class="control-label">Name English*</label>
                                <input id="name_en"
                                       type="text"
                                       class="form-control"
                                       name="name_en"
                                       value="{{ old('name_en') }}"
                                       placeholder="name in english"
                                       required autofocus>
                                @if ($errors->has('name_en'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('name_en') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>


                    {{-- email + mobile --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price" class="control-label">price *</label>
                                <input id="price"
                                       type="text"
                                       class="form-control"
                                       name="price"
                                       value="{{ old('price') }}"
                                       placeholder="price"
                                       maxlength="4"
                                       required autofocus>
                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('price') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('sale_price') ? ' has-error' : '' }}">
                                <label for="sale_price" class="control-label">sale_price *</label>
                                <input id="sale_price"
                                       type="text"
                                       class="form-control"
                                       name="sale_price"
                                       maxlength="4"
                                       value="{{ old('sale_price') }}"
                                       placeholder="sale_price"
                                       required autofocus>
                                @if ($errors->has('sale_price'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('sale_price') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                                <label for="weight" class="control-label">weight *</label>
                                <input id="weight"
                                       type="text"
                                       class="form-control"
                                       name="weight"
                                       maxlength="4"
                                       minlength="1"
                                       value="{{ old('weight') }}"
                                       placeholder="weight"
                                       required autofocus>
                                @if ($errors->has('weight'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('weight') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- password + confirm password --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">password *</label>
                                <input id="password"
                                       type="password"
                                       class="form-control"
                                       name="password"
                                       placeholder="password"
                                       required autofocus>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('password') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password_confirmation" class="control-label">password_confirmation *</label>
                                <input id="password_confirmation"
                                       type="password"
                                       class="form-control"
                                       name="password_confirmation"
                                       placeholder="password_confirmation"
                                       required autofocus>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('password_confirmation') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>


                    {{-- phone + fax --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="control-label">phone</label>
                                <input id="phone"
                                       type="text"
                                       class="form-control"
                                       name="phone"
                                       value="{{ old('phone') }}"
                                       placeholder="phone"
                                        autofocus>
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('phone') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('fax') ? ' has-error' : '' }}">
                                <label for="fax" class="control-label">fax </label>
                                <input id="fax"
                                       type="text"
                                       class="form-control"
                                       name="fax"
                                       value="{{ old('fax') }}"
                                       placeholder="fax"
                                        autofocus>
                                @if ($errors->has('fax'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('fax') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('whatsapp') ? ' has-error' : '' }}">
                                <label for="whatsapp" class="control-label">whatsapp </label>
                                <input id="whatsapp"
                                       type="text"
                                       class="form-control"
                                       name="whatsapp"
                                       value="{{ old('whatsapp') }}"
                                       placeholder="whatsapp"
                                       autofocus>
                                @if ($errors->has('whatsapp'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('whatsapp') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- whatapp --}}
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group{{ $errors->has('longitude') ? ' has-error' : '' }}">
                                <label for="longitude" class="control-label">longitude </label>
                                <input id="longitude"
                                       type="text"
                                       class="form-control"
                                       name="longitude"
                                       value="{{ old('longitude') }}"
                                       placeholder="longitude"
                                       autofocus>
                                @if ($errors->has('longitude'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('longitude') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group{{ $errors->has('latitude') ? ' has-error' : '' }}">
                                <label for="latitude" class="control-label">latitude </label>
                                <input id="latitude"
                                       type="text"
                                       class="form-control"
                                       name="latitude"
                                       value="{{ old('latitude') }}"
                                       placeholder="latitude"
                                        autofocus>
                                @if ($errors->has('latitude'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('latitude') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('keywords') ? ' has-error' : '' }}">
                                <label for="keywords" class="control-label">keywords </label>
                                <input id="keywords"
                                       type="text"
                                       class="form-control"
                                       name="keywords"
                                       value="{{ old('keywords') }}"
                                       placeholder="keywords"
                                        autofocus>
                                @if ($errors->has('keywords'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('keywords') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group{{ $errors->has('start_sale') ? ' has-error' : '' }}">
                                <label for="start_sale" class="control-label">start_sale Arabic</label>
                                <input id="start_sale"
                                       type="date"
                                       class="form-control"
                                       name="start_sale"
                                       value="{{ old('start_sale') }}"
                                       placeholder="name in arabic"
                                        autofocus>
                                @if ($errors->has('start_sale'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('start_sale') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group{{ $errors->has('end_sale') ? ' has-error' : '' }}">
                                <label for="end_sale" class="control-label">end_sale English</label>
                                <input id="end_sale"
                                       type="date"
                                       class="form-control"
                                       name="end_sale"
                                       value="{{ old('end_sale') }}"
                                       placeholder="name in english"
                                        autofocus>
                                @if ($errors->has('end_sale'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('end_sale') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('notes_ar') ? ' has-error' : '' }}">
                                <label for="notes_ar" class="control-label">notes_ar arabic</label>
                                <input id="notes_ar"
                                       type="text"
                                       class="form-control"
                                       name="notes_ar"
                                       placeholder="notes_ar arabic"
                                       autofocus>
                                @if ($errors->has('notes_ar'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('notes_ar') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('notes_en') ? ' has-error' : '' }}">
                                <label for="notes_en" class="control-label">notes_en english</label>
                                <input id="notes_en"
                                       type="text"
                                       class="form-control"
                                       name="notes_en"
                                       placeholder="notes_en arabic"
                                       autofocus>
                                @if ($errors->has('notes_en'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('notes_en') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description" class="control-label">description arabic</label>
                                <textarea type="text" class="form-control" id="description_ar" name="description_ar" aria-multiline="true" maxlength="500"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description" class="control-label">description english</label>
                                <textarea type="text" class="form-control" id="description_en" name="description_en" aria-multiline="true" maxlength="500"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">active</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios3"
                                           value="1"> active</label>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios4" checked
                                    value="0">not active</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">on_sale</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="on_sale" id="optionsRadios3"
                                           value="1"> on_sale</label>
                                <label class="radio-inline">
                                    <input type="radio" name="on_sale" id="optionsRadios4" checked
                                           value="0">not on_sale</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">on_sale_on_homepage</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="on_sale_on_homepage" id="optionsRadios3"
                                           value="1"> on_sale_on_homepage</label>
                                <label class="radio-inline">
                                    <input type="radio" name="on_sale_on_homepage" id="optionsRadios4" checked
                                    value="0">not on_sale_on_homepage</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">on_homepage</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="on_homepage" id="optionsRadios3"
                                           value="1"> on_homepage</label>
                                <label class="radio-inline">
                                    <input type="radio" name="on_homepage" id="optionsRadios4" checked
                                    value="0">not on_homepage</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="file" class="form-control" name="image" placeholder="image" required>
                                <label for="form_control_1">Main Image - ['500', '500']</label>
                                <div class="help-block text-left">
                                    W * H - Best fit 500 x 500 pixels
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="file" class="form-control" name="size_chart_image" placeholder="size_chart_image">
                                <label for="form_control_1">Image Chart- ['500', '500']</label>
                                <div class="help-block text-left">
                                    W * H - Best fit 500 x 500 pixels
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('backend.partials.forms._btn-group')
                </div>
            </form>
        </div>
    </div>
@endsection