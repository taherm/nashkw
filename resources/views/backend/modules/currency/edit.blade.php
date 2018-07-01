@extends('backend.layouts.app')


@section('content')
    <div class="portlet box blue">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST"
                  action="{{ route('backend.currency.update',$element->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <input type="hidden" name="_method" value="put">
                    <h3 class="form-section">Edit Currency</h3>
                    {{--name arabic / name english --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('name_ar') ? ' has-error' : '' }}">
                                <label for="name_ar" class="control-label">name_ar*</label>
                                <input id="name_ar"
                                       type="text"
                                       class="form-control"
                                       name_ar="name_ar"
                                       value="{{ $element->name_ar }}"
                                       placeholder="name_ar"
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
                                <label for="name_en" class="control-label">name_en*</label>
                                <input id="name_en"
                                       type="text"
                                       class="form-control"
                                       name_en="name_en"
                                       value="{{ $element->name_en }}"
                                       placeholder="name_en"
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
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('exchange_rate') ? ' has-error' : '' }}">
                                <label for="exchange_rate" class="control-label">exchange_rate*</label>
                                <input id="exchange_rate"
                                       type="text"
                                       class="form-control"
                                       name="exchange_rate"
                                       value="{{ $element->exchange_rate }}"
                                       required autofocus>
                                @if ($errors->has('exchange_rate'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('exchange_rate') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('symbol') ? ' has-error' : '' }}">
                                <label for="symbol" class="control-label">symbol*</label>
                                <input id="symbol"
                                       type="text"
                                       class="form-control"
                                       name="symbol"
                                       value="{{ $element->symbol }}"
                                       placeholder="symbol in arabic"
                                       maxlength="4"
                                       required autofocus>
                                @if ($errors->has('symbol'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('symbol') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="duration" class="control-label">country *</label>
                                    <select class="form-control input-xlarge" name="country_id" id="country" required>
                                        @foreach($allCountries as $country)
                                            <option value="{{ $country->id }}" {{ $country->id == $element->country_id ? 'selected' : null  }}>{{ $country->name }}</option>
                                        @endforeach
                                    </select>
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
