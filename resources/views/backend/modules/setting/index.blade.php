@extends('backend.layouts.app')

@section('content')
    <div class="portlet light ">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="m-heading-1 border-green m-bordered">
                        <h3>Important Information</h3>
                        <p>
                            Roles are very important for the application.
                        </p>
                        <p> Some Information about roles.
                            <a class="btn red btn-outline" href="http://datatables.net/" target="_blank">the official
                                documentation</a>
                        </p>
                    </div>
                    <div class="col-lg-12">
                        <h3 class="text-uppercase">info Setting </h3>
                        <hr>
                        <div class="col-md-6">
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td>name arabic</td>
                                    <td>{{ $element->company_ar }}</td>
                                </tr>
                                <tr>
                                    <td>name english</td>
                                    <td>{{ $element->company_en }}</td>
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
                                    <td>whatsapp</td>
                                    <td>{{ $element->whatsapp}}</td>
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
                                    <td>instagram</td>
                                    <td>{{ $element->instagram}}</td>
                                </tr>
                                <tr>
                                    <td>facebook</td>
                                    <td>{{ $element->facebook}}</td>
                                </tr
                                <tr>
                                    <td>twitter</td>
                                    <td>{{ $element->twitter }}</td>
                                </tr>
                                <tr>
                                    <td>snapchat</td>
                                    <td>{{ $element->snapchat}}</td>
                                </tr>
                                <tr>
                                    <td>youtube</td>
                                    <td>{{ $element->youtube }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-3">
                            <h5>logo</h5>
                            <img src="{{ asset('storage/uploads/images/large/'.$element->logo) }}"
                                 alt="" class="img-responsive img-thumbnail">
                        </div>
                        <div class="col-lg-3 img-responsive">
                            <h5>size chart</h5>
                            <img src="{{ asset('storage/uploads/images/large/'.$element->size_chart) }}"
                                 alt="" class="img-responsive img-thumbnail">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection