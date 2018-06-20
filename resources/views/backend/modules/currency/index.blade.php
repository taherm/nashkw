@extends('backend.layouts.app')

@section('content')
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
            {{--<table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0"--}}
            <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>symbol</th>
                    <th>exchange_rate</th>
                    <th>country</th>
                    <th>active</th>
                    <th>actions</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>name</th>
                    <th>symbol</th>
                    <th>exchange_rate</th>
                    <th>country</th>
                    <th>active</th>
                    <th>actions</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($elements as $element)
                    <tr>
                        <td>{{ $element->id }}</td>
                        <td>{{ $element->name }}</td>
                        <td>{{ $element->symbol }}</td>
                        <td>{{ $element->exchange_rate }}</td>
                        <td>{{ $element->country->name }}</td>
                        <td>
                            <span class="label {{ activeLabel($element->active) }}">{{ activeText($element->active) }}</span>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn green btn-xs btn-outline dropdown-toggle"
                                        data-toggle="dropdown"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li>
                                        <a href="{{ route('backend.currency.edit',$element->id) }}">
                                            <i class="fa fa-fw fa-edit"></i> Edit</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('backend.activate',['model' => 'currency','id' => $element->id]) }}">
                                            <i class="fa fa-fw fa-check-circle"></i> toggle active</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection