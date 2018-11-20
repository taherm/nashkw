@extends('backend.layouts.app')
@section('content')
    <div class="portlet box blue">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST"
                  action="{{ route('backend.answer.update', $element->id) }}">
                <div class="form-body">
                    <h3 class="form-section">Edit Answer</h3>
                    {{--name arabic / name english --}}
                    <div class="row">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('name_ar') ? ' has-error' : '' }}">
                                <label for="name_ar" class="control-label">name_ar *</label>
                                <input id="name_ar"
                                       type="text"
                                       class="form-control"
                                       name="name_ar"
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
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
                                <label for="name_en" class="control-label">name_en *</label>
                                <input id="name_en"
                                       type="text"
                                       class="form-control"
                                       name="name_en"
                                       value="{{ $element->name_en }}"
                                       placeholder="name_en"
                                       required autofocus>
                            </div>
                        </div>
                        @if($questions->where('is_multi',true)->isNotEmpty())
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Questions List*</label>
                                    <select multiple="multiple" class="multi-select" id="my_multi_select1"
                                            name="questions[]">
                                        @foreach($questions->where('is_multi', true) as $question)
                                            <option value="{{ $question->id }}"
                                                    {{ in_array($question->id,$element->questions->pluck('id')->toArray()) ? 'selected' : null  }}
                                            >{{ $question->name_ar }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        @endif
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label">Assigned Icon</label>
                                <select class="form-control" name="icon">
                                    @foreach(config('icons') as $n => $v)
                                        <option value="{{ $n }}">{{ $v }}</option>
                                    @endforeach
                                </select>
                                <div class="help-block"><a target="_blank"
                                                           href="{{ url('https://origin.fontawesome.com/icons?d=gallery') }}"
                                                           class="btn btn-sm btn-info">View Icons</a></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label sbold">active</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios3" checked
                                           value="1"> active</label>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios4"
                                           value="0">not active</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label sbold">is_multi</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="is_multi" id="optionsRadios5"
                                           {{ $element->is_multi ? 'checked' : null  }}
                                           value="1"> is_multi</label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_multi" id="optionsRadios6"
                                           {{ !$element->is_multi ? 'checked' : null  }}
                                           value="0">not is_multi</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label sbold">value</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="value" id="optionsRadios5"
                                           {{ $element->value ? 'checked' : null }}
                                           value="1"> Yes/true</label>
                                <label class="radio-inline">
                                    <input type="radio" name="value" id="optionsRadios6"
                                           {{ !$element->value ? 'checked' : null  }}
                                           value="0">No/false</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
                                <label for="order" class="control-label">order *</label>
                                <input id="order"
                                       type="text"
                                       class="form-control"
                                       name="order"
                                       value="{{ $element->order }}"
                                       placeholder="order"
                                       maxlength="2"
                                >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            @include('backend.partials.forms._btn-group')
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection