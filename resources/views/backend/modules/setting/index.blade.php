@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                @include('backend.partials.forms.form_title')
                <div class="portlet-body">
                    <div class="m-heading-1 border-green m-bordered">
                        <h3>Important Information</h3>
                        <p>
                            Roles are very important for the application.
                        </p>
                        <p> Some Information about roles.
                            <a class="btn red btn-outline" href="http://datatables.net/" target="_blank">the official documentation</a>
                        </p>
                    </div>
                    <section class="product-additional__box" id="Additional">
                        <h3 class="text-uppercase">info Setting </h3>
                        <h5 class="text-uppercase">Contact us</h5>
                        <div class="col-lg-10 col-lg-push-1" style="padding: 10px;">
                            <a href="{{ route('backend.setting.edit',$element->id) }}"
                               class="btn btn-primary pull-right">edit</a>
                        </div>
                        <div class="col-md-8">
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td>name arabic</td>
                                    <td>{{ $element->name_ar }}</td>
                                </tr>
                                <tr>
                                    <td>name english</td>
                                    <td>{{ $element->name_en }}</td>
                                </tr>
                                <tr>
                                    <td>phone</td>
                                    <td>{{ $element->phone }}</td>
                                </tr>
                                <tr>
                                    <td>mobile</td>
                                    <td>{{ $element->mobile }}</td>
                                </tr>
                                <tr>
                                    <td>email</td>
                                    <td>{{ $element->email }}</td>
                                </tr>
                                <tr>
                                    <td>address arabic</td>
                                    <td>{{ $element->address_ar }}</td>
                                </tr>
                                <tr>
                                    <td>address en</td>
                                    <td>{{ $element->address_en }}</td>
                                </tr>
                                <tr>
                                    <td>latitude</td>
                                    <td>{{ $element->latitude }}</td>
                                </tr>
                                <tr>
                                    <td>longitude</td>
                                    <td>{{ $element->longitude }}</td>
                                </tr>
                                <tr>
                                    <td>branches Limit</td>
                                    <td>{{ $element->branches_limit }}</td>
                                </tr>
                                <tr>
                                    <td>images limit</td>
                                    <td>{{ $element->images_limit }}</td>
                                </tr>
                                <tr>
                                    <td>app free</td>
                                    <td>
                                        <span class="label {{ activeLabel($element->app_free) }}">{{ activeText($element->is_company,'app is free') }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Description Arabic</td>
                                    <td>{{ $element->description_ar}}</td>
                                </tr>
                                <tr>
                                    <td>Description english</td>
                                    <td>{{ $element->description_en}}</td>
                                </tr>
                                <tr>
                                    <td>on_home_speech arabic</td>
                                    <td>{{ $element->on_home_speech_ar}}</td>
                                </tr>

                                <tr>
                                    <td>on_home_speech_en</td>
                                    <td>{{ $element->on_home_speech_en}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-2">
                            <img src="{{ asset('storage/uploads/images/large/'.$element->logo) }}"
                                 alt="" class="img-responsive img-thumbnail">
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection