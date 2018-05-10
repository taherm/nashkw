@extends('backend.layouts.app')
@section('content')
    <!-- Bootstrap 3 -->
    <div class="portlet box blue">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form method="post" action="{{ route('backend.role.update', $element->id) }}" class="horizontal-form">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="patch">
                <div class="form-body">
                    <h3 class="form-section">{{ $element->name }} Role</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Usama Ahmed"
                                       value="{{ $element->name }}">
                                <span class="help-block"> Role Name must be unique </span>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Slug Arabic</label>
                                <input type="text" id="slug_ar" name="slug_ar" class="form-control"
                                       placeholder="slug ar" value="{{ $element->slug_ar }}">
                                {{--<span class="help-block"> This field has error. </span>--}}
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Slug English</label>
                                <input type="text" id="slug_ar" name="slug_en" class="form-control"
                                       placeholder="slug en" value="{{ $element->slug_en }}">
                                {{--<span class="help-block"> This field has error. </span>--}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Icon</label>
                                <select class="form-control" name="icon">
                                    @foreach($icons as $k => $v)
                                        <option value="{{ $v }}" {{ $element->icon == $v ? 'selected' : null }}>{{ $v }}</option>
                                    @endforeach
                                </select>
                                <span class="help-block"> <a target="_blank" href="https://fontawesome.com/cheatsheet"
                                                             class="">Check Visual Icons </a></span>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label sbold">Is Active</label>
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <input type="radio" name="active" id="optionsRadios1"
                                                   value="1" {{ $element->active ? 'checked' : null }}> Active </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="active" id="optionsRadios2"
                                                   value="0" {{ $element->active  ? null : 'checked'}}> Not Active</label>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label sbold">Is Admin</label>
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <input type="radio" name="is_admin" id="optionsRadios3"
                                                   value="1" {{ $element->is_admin ? 'checked' : null }}> Admin
                                            Attributes</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_admin" id="optionsRadios4"
                                                   value="0" {{ $element->is_admin  ? null : 'checked'}}> No Admin
                                            Attributes</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label sbold">Is Visible</label>
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <input type="radio" name="visible" id="optionsRadios5"
                                                   value="1" {{ $element->visible ? 'checked' : null }}> Visible </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="visible" id="optionsRadios6"
                                                   value="0" {{ $element->visible  ? null : 'checked'}}> Not Visible</label>
                                    </div>
                                    <span class="help-block"> Visible Means that this role shall appear on Application (ex. admin is invisible)</span>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label sbold">Is Company</label>
                                    <div class="radio-list">
                                        <label class="radio-inline">
                                            <input type="radio" name="is_company" id="optionsRadios7"
                                                   value="1" {{ $element->is_company ? 'checked' : null }}> Company
                                            Attributes</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="is_company" id="optionsRadios8"
                                                   value="0" {{ $element->is_company  ? null : 'checked'}}> No Company
                                            Attributes</label>
                                    </div>
                                    <span class="help-block"> Role that has companies attributes (ex. branches) </span>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <div class="row">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <label>Caption</label>
                                <input type="text" name="caption" class="form-control" value="{{ $element->caption }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Hue (default)</label>
                            {{--<div class="col-md-3">--}}
                                <input type="text" name="color" id="hue-demo" class="form-control demo" data-control="hue" value="{{ $element->color }}">
                            {{--</div>--}}
                        </div>
                        </div>
                    </div>
                    {{--<div class="form-actions right">--}}
                        {{--<button type="button" class="btn default" href="{{ redirect()->back() }}">Cancel</button>--}}
                        {{--<button type="submit" class="btn blue">--}}
                            {{--<i class="fa fa-check"></i> Save--}}
                        {{--</button>--}}
                    {{--</div>--}}
                @include('backend.partials.forms._btn-group')
            </form>
            <!-- END FORM-->
        </div>
    </div>
@endsection

