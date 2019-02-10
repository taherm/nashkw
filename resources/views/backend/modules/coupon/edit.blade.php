@extends('backend.layouts.app')
@section('content')
    <div class="portlet box blue">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST"
                  action="{{ route('backend.coupon.update', $element->id) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="put">
                <div class="form-body">
                    <h3 class="form-section">Edit Coupon</h3>
                    {{--name arabic / name english --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
                                <label for="value" class="control-label">value*</label>
                                <input id="value"
                                       type="number"
                                       class="form-control"
                                       max="99"
                                       maxlength="3"
                                       name="value"
                                       value="{{ $element->value }}"
                                       placeholder="value"
                                       required autofocus>
                                @if ($errors->has('value'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('value') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('minimum_charge') ? ' has-error' : '' }}">
                                <label for="minimum_charge" class="control-label">minimum_charge*</label>
                                <input id="minimum_charge"
                                       type="number"
                                       class="form-control"
                                       name="minimum_charge"
                                       value="{{ $element->minimum_charge }}"
                                       placeholder="name in arabic"
                                       maxlength="3"
                                       max="999"
                                       required autofocus>
                                @if ($errors->has('minimum_charge'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('minimum_charge') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                                <label for="code" class="control-label">code*</label>
                                <input id="code"
                                       type="text"
                                       class="form-control"
                                       name="code"
                                       value="{{ $element->code }}"
                                       placeholder="code"
                                       required autofocus>
                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('code') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('due_date') ? ' has-error' : '' }}">
                                <label for="due_date" class="control-label">due_date*</label>
                                <input id="due_date"
                                       type="date"
                                       class="form-control"
                                       name="due_date"
                                       minDate="{{ $element->due_date->format('d-m-y') }}"
                                       value="{{ $element->due_date ? $element->due_date->format('Y-m-d') : null }}"
                                       placeholder="due_date in arabic"
                                       maxlength="4"
                                       required autofocus>
                                @if ($errors->has('due_date'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('due_date') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="duration" class="control-label">User *</label>
                                    <select class="form-control input-xlarge" name="user_id" id="user" required>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label sbold">active</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios1"
                                           value="1" {{ $element->active ? 'checked' : null }}> active </label>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios2"
                                           {{ !$element->active ? 'checked' : null  }}
                                           value="0"> not_Active</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label sbold">is percentage</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="is_percentage" id="optionsRadios3"
                                           value="1" {{ $element->is_percentage  ? 'checked' : null}}> is_percentage</label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_percentage" id="optionsRadios4"
                                           {{ !$element->is_percentage ? 'checked' : null }}
                                           value="0">not is_percentage</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label sbold">is_permanent</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="is_permanent" id="optionsRadios3"
                                           value="1" {{ $element->is_permanent  ? 'checked' : null}}> is_permanent</label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_permanent" id="optionsRadios4"
                                           {{ !$element->is_permanent ? 'checked' : null }}
                                           value="0">not is_permanent</label>
                            </div>
                        </div>
                    </div>
                    @include('backend.partials.forms._btn-group')
                </div>
            </form>
        </div>
    </div>
@endsection
