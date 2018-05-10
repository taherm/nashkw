@extends('backend.layouts.app')
@section('content')
    <div class="portlet box blue">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body form">
            <form role="form" method="post"
                  class="horizontal-form"
                  action="{{ route('backend.setting.update',$element->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="patch">
                <div class="form-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="name_ar" placeholder="..."
                                           value="{{ $element->name_ar }}">
                                    <label for="form_control_1">Name Ar*</label>
                                    <span class="help-block">Website or Company Name Ar</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="name_en" placeholder="..."
                                           value="{{ $element->name_en }}">
                                    <label for="form_control_1">Name En*</label>
                                    <span class="help-block">Website or Company Name En</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="file" class="form-control" name="logo" placeholder="...">
                                    <label for="form_control_1">Logo*</label>
                                    <span class="help-block">logo will appear in the website</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="facebook_url" placeholder="..."
                                           value="{{ $element->facebook_url }}">
                                    <label for="form_control_1">URL facebook*</label>
                                    <span class="help-block">facebook</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="instagram_url" placeholder="..."
                                           value="{{ $element->instagram_url }}">
                                    <label for="form_control_1">instagram URL*</label>
                                    <span class="help-block">instagram</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-body">
                                <div class="form-group form-md-line-input">
                                    <input type="text" class="form-control" name="twitter_url" placeholder="..."
                                           value="{{ $element->twitter_url }}">
                                    <label for="form_control_1">URL twitter*</label>
                                    <span class="help-block">twitter</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="youtube_url" placeholder="..."
                                       value="{{ $element->youtube_url }}">
                                <label for="form_control_1">youtube</label>
                                <span class="help-block">youtube</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="phone" placeholder="..."
                                       value="{{ $element->phone }}">
                                <label for="form_control_1">phone</label>
                                <span class="help-block">phone</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="mobile" placeholder="..."
                                       value="{{ $element->mobile }}">
                                <label for="form_control_1">mobile</label>
                                <span class="help-block">mobile</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-2">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="email" placeholder="..."
                                       value="{{ $element->email }}">
                                <label for="form_control_1">email</label>
                                <span class="help-block">email</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="address_ar" placeholder="..."
                                       value="{{ $element->address_ar }}">
                                <label for="form_control_1">address_ar</label>
                                <span class="help-block">address_ar</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="address_en" placeholder="..."
                                       value="{{ $element->address_en }}">
                                <label for="form_control_1">address_en</label>
                                <span class="help-block">address_en</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="latitude" placeholder="..."
                                       value="{{ $element->latitude }}">
                                <label for="form_control_1">latitude</label>
                                <span class="help-block">latitude</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="text" class="form-control" name="longitude" placeholder="..."
                                       value="{{ $element->longitude }}">
                                <label for="form_control_1">longitude</label>
                                <span class="help-block">longitude</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="number" class="form-control" name="branches_limit" placeholder="..."
                                       value="{{ $element->branches_limit}}" min="1" max="100">
                                <label for="form_control_1">branches_limit</label>
                                <span class="help-block">branches_limit</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-body">
                            <div class="form-group form-md-line-input">
                                <input type="number" class="form-control" name="images_limit" placeholder="..."
                                       value="{{ $element->images_limit }}" min="2" max="50">
                                <label for="form_control_1">images_limit </label>
                                <span class="help-block">images_limit </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-body">
                            <label class="form-label">app_free</label>
                            <div class="md-radio-inline">
                                <div class="md-radio">
                                    <input type="radio" id="radio55" name="app_free" value="1"
                                           class="md-radiobtn" {{ $element->app_free ? "checked" : null }}>
                                    <label for="radio55">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span>app_free</label>
                                </div>
                                <div class="md-radio">
                                    <input type="radio" id="radio56" name="app_free" value="0"
                                           class="md-radiobtn" {{ $element->app_free ? null : "checked" }}>
                                    <label for="radio56">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> N/A</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description" class="control-label col-lg-2">description_ar</label>
                            <textarea type="text" class="form-control" name="description_ar" aria-multiline="true"
                                      maxlength="500">
                                    {{ $element->description_ar }}
                                </textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description" class="control-label col-lg-2">description_en</label>
                            <textarea type="text" class="form-control" name="description_en" aria-multiline="true"
                                      maxlength="500">
                                    {{ $element->description_en }}
                                </textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description" class="control-label col-lg-2">on_home_speech_ar</label>
                            <textarea type="text" class="form-control" name="on_home_speech_ar" aria-multiline="true"
                                      maxlength="200">
                                    {{ $element->on_home_speech_ar }}
                                </textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description" class="control-label col-lg-2">on_home_speech_en</label>
                            <textarea type="text" class="form-control" name="on_home_speech_en" aria-multiline="true"
                                      maxlength="200">
                                    {{ $element->on_home_speech_en }}
                                </textarea>
                        </div>
                    </div>
                </div>




                @include('backend.partials.forms._btn-group')
            </form>
        </div>
@endsection