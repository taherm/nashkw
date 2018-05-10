@extends('backend.layouts.app')

@section('content')
    <div class="portlet-body">
        <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>code</th>
                <th>symbol</th>
                <th>format</th>
                <th>exchange_rate</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>code</th>
                <th>symbol</th>
                <th>format</th>
                <th>exchange_rate</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach($elements as $element)
                <tr>
                    <td>{{ $element->id }}</td>
                    <td>{{ $element->name }}</td>
                    <td>{{ $element->code }}</td>
                    <td>{{ $element->symbol }}</td>
                    <td>{{ $element->format }}</td>
                    <td>{{ $element->exchange_rate }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection