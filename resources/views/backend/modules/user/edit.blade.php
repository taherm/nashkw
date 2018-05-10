@extends('backend.layouts.app')
@section('content')
    <div class="portlet box blue">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST"
                  action="{{ route('backend.user.update',$element->id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-body">
                    <input type="hidden" name="_method" value="put">
                    <h3 class="form-section">Edit User</h3>
                    {{--name arabic / name english --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('name_ar') ? ' has-error' : '' }}">
                                <label for="name_ar" class="control-label">name_ar*</label>
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


                    {{-- email + mobile --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">email *</label>
                                <input id="email"
                                       type="text"
                                       class="form-control"
                                       name="email"
                                       value="{{ $element->email }}"
                                       placeholder="email"
                                       required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('email') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                <label for="mobile" class="control-label">mobile *</label>
                                <input id="mobile"
                                       type="text"
                                       class="form-control"
                                       name="mobile"
                                       value="{{ $element->mobile }}"
                                       placeholder="mobile"
                                       required autofocus>
                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('mobile') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    {{-- password + confirm password --}}
                    {{--<div class="row">--}}
                    {{--<div class="col-md-6">--}}
                    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                    {{--<label for="password" class="control-label">password *</label>--}}
                    {{--<input id="password"--}}
                    {{--type="password"--}}
                    {{--class="form-control"--}}
                    {{--name="password"--}}
                    {{--placeholder="password"--}}
                    {{--required autofocus>--}}
                    {{--@if ($errors->has('password'))--}}
                    {{--<span class="help-block">--}}
                    {{--<strong>--}}
                    {{--{{ $errors->first('password') }}--}}
                    {{--</strong>--}}
                    {{--</span>--}}
                    {{--@endif--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                    {{--<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">--}}
                    {{--<label for="password_confirmation" class="control-label">password_confirmation *</label>--}}
                    {{--<input id="password_confirmation"--}}
                    {{--type="password"--}}
                    {{--class="form-control"--}}
                    {{--name="password_confirmation"--}}
                    {{--placeholder="password_confirmation"--}}
                    {{--required autofocus>--}}
                    {{--@if ($errors->has('password_confirmation'))--}}
                    {{--<span class="help-block">--}}
                    {{--<strong>--}}
                    {{--{{ $errors->first('password_confirmation') }}--}}
                    {{--</strong>--}}
                    {{--</span>--}}
                    {{--@endif--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}


                    {{-- phone + fax --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                <label for="mobile" class="control-label">mobile *</label>
                                <input id="mobile"
                                       type="text"
                                       class="form-control"
                                       name="mobile"
                                       value="{{ $element->mobile }}"
                                       placeholder="mobile"
                                       required autofocus>
                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('mobile') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="control-label">phone</label>
                                <input id="phone"
                                       type="text"
                                       class="form-control"
                                       name="phone"
                                       value="{{ $element->phone }}"
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
                                       value="{{ $element->fax }}"
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
                    </div>

                    {{-- whatapp --}}
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group{{ $errors->has('whatsapp') ? ' has-error' : '' }}">
                                <label for="whatsapp" class="control-label">whatsapp </label>
                                <input id="whatsapp"
                                       type="text"
                                       class="form-control"
                                       name="whatsapp"
                                       value="{{ $element->whatsapp }}"
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
                        <div class="col-md-2">
                            <div class="form-group{{ $errors->has('longitude') ? ' has-error' : '' }}">
                                <label for="longitude" class="control-label">longitude </label>
                                <input id="longitude"
                                       type="text"
                                       class="form-control"
                                       name="longitude"
                                       value="{{ $element->longitude }}"
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
                                       value="{{ $element->latitude }}"
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
                                       value="{{ $element->keywords }}"
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
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('address_ar') ? ' has-error' : '' }}">
                                <label for="address_ar" class="control-label">address_ar Arabic</label>
                                <input id="address_ar"
                                       type="text"
                                       class="form-control"
                                       name="address_ar"
                                       value="{{ $element->address_ar }}"
                                       placeholder="name in arabic"
                                       autofocus>
                                @if ($errors->has('address_ar'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('address_ar') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('address_en') ? ' has-error' : '' }}">
                                <label for="address_en" class="control-label">address_en English</label>
                                <input id="address_en"
                                       type="text"
                                       class="form-control"
                                       name="address_en"
                                       value="{{ $element->address_en }}"
                                       placeholder="name in english"
                                       autofocus>
                                @if ($errors->has('address_en'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('address_en') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="duration" class="control-label">role *</label>
                                <select class="form-control input-xlarge" name="role_id" id="role" required>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}" {{ $element->role_id == $role->id ? 'selected' : null  }}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="duration" class="control-label">category *</label>
                            <select class="form-control input-xlarge" name="category_id" id="category" required>
                                @foreach($categories->where('role_id', $element->role_id) as $cat)
                                    <option value="{{ $cat->id }}" {{ $element->category_id === $cat->id ? 'selected' : null }}>{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <label for="country_id" class="control-label">country *</label>
                            <select class="form-control input-xlarge" name="country_id" id="country" required>
                                @foreach($countries as $country)
                                    <option value="{{ $country->id }}" {{ $element->country_id === $country->id ? 'selected' : null  }}>{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="governate_id" class="control-label">governate *</label>
                            <select class="form-control input-medium" name="governate_id" id="governate">
                                <option value="">Select Governate</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="area_id" class="control-label">area *</label>
                            <select class="form-control input-medium" name="area_id" id="area">
                                <option value="">Select Area</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('services_ar') ? ' has-error' : '' }}">
                                <label for="services_ar" class="control-label">service_ar arabic</label>
                                <input id="service_ar"
                                       type="text"
                                       class="form-control"
                                       name="services_ar"
                                       placeholder="services_ar arabic"
                                       autofocus>
                                @if ($errors->has('services_ar'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('services_ar') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('services_en') ? ' has-error' : '' }}">
                                <label for="services_en" class="control-label">services_en english</label>
                                <input id="service_en"
                                       type="text"
                                       class="form-control"
                                       name="services_en"
                                       placeholder="services_en en"
                                       autofocus>
                                @if ($errors->has('services_en'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('services_en') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description_ar" class="control-label">description arabic</label>
                                <textarea type="text" class="form-control" id="description_ar" name="description_ar"
                                          aria-multiline="true"
                                          maxlength="500">
                                    {{ $element->description_ar }}
                                </textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description_en" class="control-label">description english</label>
                                <textarea type="text" class="form-control" id="description_en" name="description_en"
                                          aria-multiline="true"
                                          maxlength="500">
                                    {{ $element->description_en }}
                                </textarea>
                            </div>
                        </div>
                    </div>


                    <div class="row">
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
                                <label class="control-label sbold">verified</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="verified" id="optionsRadios3"
                                           value="1" {{ $element->verified  ? 'checked' : null}}> verified</label>
                                <label class="radio-inline">
                                    <input type="radio" name="verified" id="optionsRadios4"
                                           {{ !$element->verified ? 'checked' : null }}
                                           value="0">not verified</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="control-label sbold">show_offer</label></br>
                                <label class="radio-inline">
                                    <input type="radio" name="show_offer" id="optionsRadios5"
                                           value="1" {{ $element->show_offer ? 'checked' : null }}> show_offer </label>
                                <label class="radio-inline">
                                    <input type="radio" name="show_offer" id="optionsRadios6"
                                           {{ !$element->show_offer ? 'checked' : null }}
                                           value="0"> not_show_offer</label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="file" class="form-control" name="logo" placeholder="logo" autofocus>
                                <label for="form_control_1">logo Image - ['500', '500']*</label>
                                <div class="help-block text-left">
                                    W * H - Best fit 500 x 500 pixels
                                </div>
                            </div>
                            <img src="{{ asset('storage/uploads/images/large/'.$element->logo) }}" alt=""
                                 class="img-sm img-responsive">
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="file" class="form-control" name="gallery[]" placeholder="gallery" multiple>
                                <label for="form_control_1">gallery Image - ['1334', '750']</label>
                                <div class="help-block text-left">
                                    W * H - Best fit ['1334', '750'] pixels
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('backend.partials.forms._btn-group')
                </div>
            </form>
        </div>
    </div>
    <div class="portlet-body">
        <div class="mt-element-card mt-element-overlay">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Gallery</h3>
                </div>
                @foreach($element->images as $image)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="mt-card-item">
                            <div class="mt-card-avatar mt-overlay-1">
                                <img src="{{ asset('storage/uploads/images/thumbnail/'.$image->name) }}" class="img-responsive" style="max-height: 200px"/>
                            </div>
                            <div class="mt-card-content">
                                <div class="mt-card-social">
                                    <ul>
                                        <li>
                                            <form method="post" action="{{ route('backend.image.destroy',$image->id) }}">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="delete"/>
                                                <button type="submit" class="btn btn-circle btn-sm red">
                                                    <i class="fa fa-fw fa-xs fa-remove"></i>
                                                </button>
                                            </form>
                                        </li>
                                        <li>
                                            <a href="{{ route('backend.activation',['model' => 'image','id' => $image->id]) }}">
                                                <i class="fa fa-fw fa-check-circle "></i> toggle active</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
