@extends('backend.layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('backend.country.index') }}
@show
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
                            <a class="btn red btn-outline" href="http://datatables.net/" target="_blank">the official
                                documentation</a>
                        </p>
                    </div>
                    <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>name_ar</th>
                            <th>name_en</th>
                            <th>flag</th>
                            <th>code</th>
                            <th>active</th>
                            <th>country_iso_alpha3</th>
                            <th>order</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>id</th>
                            <th>name_ar</th>
                            <th>name_en</th>
                            <th>flag</th>
                            <th>mobile_code</th>
                            <th>active</th>
                            <th>country_iso_alpha3</th>
                            <th>order</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($elements as $element)
                            <tr>
                                <td>{{ $element->id }}</td>
                                <td>{{ $element->name_ar }}</td>
                                <td>{{ $element->name_en }}</td>
                                <td>
                                    <img class="img-xs img-rounded"
                                         src="{{ asset('storage/uploads/images/thumbnail/'.$element->flag) }}" alt="">
                                </td>
                                <td>{{ $element->mobile_code }}</td>
                                <td>
                                    <span class="label {{ activeLabel($element->active) }}">{{ activeText($element->active) }}</span>
                                </td>
                                <td>{{ $element->country_iso_alpha3 }}</td>
                                <td>{{ $element->order }}</td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn green btn-sm btn-outline dropdown-toggle"
                                                data-toggle="dropdown"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="{{ route('backend.country.edit',$element->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i>edit</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('backend.country.show',$element->id) }}">
                                                    <i class="fa fa-fw fa-eye-slash"></i>view details</a>
                                            </li>
                                            @if($elements->where('active', true)->count() > 1)
                                                <li>
                                                    <a href="{{ route('backend.activate',['model' => 'country','id' => $element->id]) }}">
                                                        <i class="fa fa-fw fa-check-circle"></i> toggle active</a>
                                                </li>
                                            @endif
                                            @if(!$element->currency)
                                                <li>
                                                    <form method="post"
                                                          action="{{ route('backend.country.destroy',$element->id) }}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="delete"/>
                                                        <button type="submit" class="btn btn-outline btn-sm red">
                                                            <i class="fa fa-remove"></i>delete
                                                        </button>
                                                    </form>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection