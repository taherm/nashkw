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
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">name*</label>
                                <input id="name"
                                       type="text"
                                       class="form-control"
                                       name="name"
                                       value="{{ $element->name }}"
                                       placeholder="name"
                                       required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('name') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
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
