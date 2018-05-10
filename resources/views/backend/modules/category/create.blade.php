@extends('backend.layouts.app')
@section('content')
    <div class="portlet box blue">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body form">
            <form role="form" method="post" class="form-horizontal"
                  action="{{ route('backend.category.store') }}"
                  enctype="multipart/form-data">
                <div class="form-body">
                    <h3 class="form-section">Create New Category</h3>
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-md-2 control-label">name *</label>
                                <div class="col-md-10">
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                           placeholder="Enter text"
                                           required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group {{ $errors->has('slug_ar') ? ' has-error' : '' }}">
                                <label class="col-md-2 control-label">slug_ar *</label>
                                <div class="col-md-10">
                                    <input type="text" name="slug_ar" value="{{ old('slug_ar') }}"
                                           class="form-control"
                                           placeholder="Enter text"
                                           required autofocus>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="col-md-2 control-label">slug_en *</label>
                                <div class="col-md-10">
                                    <input type="text" name="slug_en" value="{{ old('slug_en') }}"
                                           class="form-control"
                                           placeholder="Enter text"
                                           required autofocus>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-body">
                                <label class="form-label">Active</label>
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio" id="radio53" name="active" value="1"
                                               class="md-radiobtn" {{ old('active') ? "checked" : null }}>
                                        <label for="radio53">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span>active</label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="radio54" name="active" value="0"
                                               class="md-radiobtn" {{ old('active') ? null : "checked" }}>
                                        <label for="radio54">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> N/A</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-body">
                                <label class="form-label">is_home</label>
                                <div class="md-radio-inline">
                                    <div class="md-radio">
                                        <input type="radio" id="radio55" name="is_home" value="1"
                                               class="md-radiobtn" {{ old('is_home') ? "checked" : null }}>
                                        <label for="radio55">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> to show the category on SearchIndex page</label>
                                    </div>
                                    <div class="md-radio">
                                        <input type="radio" id="radio56" name="is_home" value="0" checked
                                               class="md-radiobtn" {{ !old('is_home') ? "checked" : null }}>
                                        <label for="radio56">
                                            <span></span>
                                            <span class="check"></span>
                                            <span class="box"></span> N/A</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('order') ? ' has-error' : '' }}">
                                <label class="col-md-2 control-label">Order *</label>
                                <div class="col-md-10">
                                    <input type="text" name="order" value="{{ old('order') }}" class="form-control"
                                           placeholder="Enter text"
                                           required autofocus>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="col-md-2 control-label">role *</label>
                                <div class="col-md-10">
                                    <select name="role_id" id="role" class="form-control" required>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->id }}" {{ old('role_id') === $role->id  ? 'selected' : null  }}>{{ $role->name }}</option>
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