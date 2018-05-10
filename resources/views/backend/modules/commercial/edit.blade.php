@extends('backend.layouts.app')
@section('content')
    <div class="portlet box blue">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body form">
            <form role="form" method="post"
                  class="horizontal-form"
                  action="{{ route('backend.commercial.update',$element->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                <div class="form-body">
                    <h3 class="form-section">Edit Commercial</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="file" class="form-control" name="image" placeholder="...">
                                <label for="form_control_1">commercial Image - ['1534', '586']</label>
                                <div class="help-block text-left">
                                    W * H - Best fit 1534 x 586 pixels
                                </div>
                            </div>
                            <img src="{{ asset('storage/uploads/images/large/'.$element->image) }}" alt=""
                                 class="img-sm img-responsive">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-body">
                                <label class="form-label">Active</label>
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio" id="radio53" name="active" value="1"
                                               class="md-radiobtn" {{ $element->active ? "checked" : null }}>
                                        <label for="radio53">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>active</label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="radio54" name="active" value="0"
                                               class="md-radiobtn" {{ $element->active ? null : "checked" }}>
                                        <label for="radio54">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> N/A</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-body">
                                <label class="form-label">is_home</label>
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio" id="radio55" name="is_home" value="1"
                                               class="md-radiobtn" {{ $element->is_home ? "checked" : null }}>
                                        <label for="radio55">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>is_home</label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="radio56" name="is_home" value="0"
                                               class="md-radiobtn" {{ $element->is_home ? null : "checked" }}>
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
                        <div class="col-lg-6">
                            <div class="form-body">
                                <label class="form-label">is_category</label>
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio" id="radio57" name="is_category" value="1"
                                               class="md-radiobtn" {{ $element->is_category ? "checked" : null }}>
                                        <label for="radio57">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>is_category</label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="radio58" name="is_category" value="0"
                                               class="md-radiobtn" {{ $element->is_category ? null : "checked" }}>
                                        <label for="radio58">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> N/A</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-body">
                                <label class="form-label">is_splash</label>
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio" id="radio59" name="is_splash" value="1"
                                               class="md-radiobtn" {{ $element->is_splash ? "checked" : null }}>
                                        <label for="radio59">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>is_splash</label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="radio40" name="is_splash" value="0"
                                               class="md-radiobtn" {{ $element->is_splash ? null : "checked" }}>
                                        <label for="radio40">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> N/A</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-body">
                                <label class="form-label">is_company</label>
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio" id="radio41" name="is_company" value="1"
                                               class="md-radiobtn" {{ $element->is_company ? "checked" : null }}>
                                        <label for="radio41">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>is_company</label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="radio42" name="is_company" value="0"
                                               class="md-radiobtn" {{ $element->is_company ? null : "checked" }}>
                                        <label for="radio42">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> N/A</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-body">
                                <label class="form-label">is_individual</label>
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio" id="radio43" name="is_individual" value="1"
                                               class="md-radiobtn" {{ $element->is_individual ? "checked" : null }}>
                                        <label for="radio43">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>is_individual</label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="radio44" name="is_individual" value="0"
                                               class="md-radiobtn" {{ $element->is_individual ? null : "checked" }}>
                                        <label for="radio44">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> N/A</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('backend.partials.forms._btn-group')
            </form>
        </div>
@endsection