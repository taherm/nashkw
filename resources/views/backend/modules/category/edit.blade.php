@extends('backend.layouts.app')

@section('content')
    <div class="portlet box blue">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST"
                  action="{{ route('backend.category.update', $element->id) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="parent_id" value="{{ $element->parent_id }}">
                <input type="hidden" name="id" value="{{ $element->id }}">
                <div class="form-body">
                    <h3 class="form-section">Edit category</h3>
                    {{--name arabic / name english --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('name_ar') ? ' has-error' : '' }}">
                                <label for="name_ar" class="control-label">Name Arabic*</label>
                                <input id="name_ar"
                                       type="text"
                                       class="form-control"
                                       name="name_ar"
                                       value="{{ $element->name_ar }}"
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
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">
                                <label for="name_en" class="control-label">Name English*</label>
                                <input id="name_en"
                                       type="text"
                                       class="form-control"
                                       name="name_en"
                                       value="{{ $element->name_en }}"
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group {{ $errors->has('caption_ar') ? ' has-error' : '' }}">
                                <label for="caption_ar" class="control-label">caption Arabic*</label>
                                <input id="caption_ar"
                                       type="text"
                                       class="form-control"
                                       name="caption_ar"
                                       value="{{ $element->caption_ar }}"
                                       placeholder="name in arabic"
                                       required autofocus>
                                @if ($errors->has('caption_ar'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('caption_ar') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('caption_en') ? ' has-error' : '' }}">
                                <label for="caption_en" class="control-label">caption English*</label>
                                <input id="caption_en"
                                       type="text"
                                       class="form-control"
                                       name="caption_en"
                                       value="{{ $element->caption_en }}"
                                       placeholder="name in english"
                                       required autofocus>
                                @if ($errors->has('caption_en'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('caption_en') }}
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
                                <textarea type="text" class="form-control" id="description_ar" name="description_ar"
                                          aria-multiline="true" maxlength="500">{{ $element->description_ar }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description" class="control-label">description english</label>
                                <textarea type="text" class="form-control" id="description_en" name="description_en"
                                          aria-multiline="true" maxlength="500">{{ $element->description_en }}</textarea>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
                                <label for="order" class="control-label">order *</label>
                                <input id="order"
                                       type="number"
                                       class="form-control"
                                       name="order"
                                       value="{{ $element->order }}"
                                       placeholder="order"
                                       maxlength="2"
                                       autofocus>
                                @if ($errors->has('order'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('order') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="file" class="form-control" name="image" placeholder="image">
                                <label for="form_control_1">Main Image</label>
                                <div class="help-block text-left">
                                    W * H - Best fit ['2313', '1125'] pixels
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('storage/uploads/images/thumbnail/'.$element->image) }}" alt="" class="img-sm">
                        </div>
                    </div>

                    <div class="row">
                        <hr>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">active</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios3" {{ $element->active ? 'checked' : null  }}
                                           value="1"> active</label>
                                <label class="radio-inline">
                                    <input type="radio" name="active" id="optionsRadios4" {{ !$element->active ? 'checked' : null  }}
                                           value="0">not active</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">is_featured</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="is_featured" id="optionsRadios3" {{ $element->is_featured ? 'checked' : null  }}
                                           value="1"> is_featured</label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_featured" id="optionsRadios4" {{ !$element->is_featured ? 'checked' : null  }}
                                           value="0">not is_featured</label>
                            </div>
                        </div>
                        {{--<div class="col-md-3">--}}
                            {{--<div class="form-group">--}}
                                {{--<label class="control-label sbold">limited</label></br>--}}
                                {{--<label class="radio-inline">--}}
                                    {{--<input type="radio" name="limited" id="optionsRadios3" {{ $element->limited ? 'checked' : null  }}--}}
                                           {{--value="1"> limited</label>--}}
                                {{--<label class="radio-inline">--}}
                                    {{--<input type="radio" name="limited" id="optionsRadios4" checked--}}
                                           {{--value="0">not limited</label>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label sbold">is_home</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="is_home" id="optionsRadios3" {{ $element->is_home ? 'checked' : null  }}
                                           value="1"> is_home</label>
                                <label class="radio-inline">
                                    <input type="radio" name="is_home" id="optionsRadios4" {{ !$element->is_home ? 'checked' : null  }}
                                           value="0">not is_home</label>
                            </div>
                        </div>
                    </div>
                    @include('backend.partials.forms._btn-group')
                </div>
            </form>
        </div>
    </div>
@endsection