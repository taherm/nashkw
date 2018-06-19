@extends('backend.layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('backend.coupon.index') }}
@show
@section('content')
    <div class="portlet-body">
        <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>id</th>
                <th>is_percentage</th>
                <th>consumed</th>
                <th>code</th>
                <th>minimum_charge</th>
                <th>user_id</th>
                <th>user name</th>
                <th>due_date</th>
                <th>active</th>
                <th>actions</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>id</th>
                <th>is_percentage</th>
                <th>consumed</th>
                <th>code</th>
                <th>minimum_charge</th>
                <th>user_id</th>
                <th>user name</th>
                <th>due_date</th>
                <th>active</th>
                <th>actions</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach($elements as $element)
                <tr>
                    <td>{{ $element->id }}</td>
                    <td>
                        <span class="label {{ activeLabel($element->is_percentage) }}">{{ activeText($element->is_percentage,'Percentage') }}</span>
                    </td>
                    <td>
                        <span class="label {{ activeLabel($element->consumed) }}">{{ activeText($element->consumed,'Consumed') }}</span>
                    </td>
                    <td>{{ $element->code }}</td>
                    <td>{{ $element->minimum_charge}}</td>
                    <td>{{ $element->user_id }}</td>
                    <td>{{ $element->user->name }}</td>
                    <td>
                        <span class="label {{ activeLabel($element->active) }}">{{ activeText($element->active,$element->due_date->format('d-M-Y')) }}</span>
                    </td>
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
                                    <a href="{{ route('backend.coupon.edit',$element->id) }}">
                                        <i class="fa fa-fw fa-edit"></i> Edit</a>
                                </li>
                                <li>
                                    <a href="{{ route('backend.activate',['model' => 'coupon','id' => $element->id]) }}">
                                        <i class="fa fa-fw fa-check-circle"></i> toggle active</a>
                                </li>
                                <li>
                                    <a data-toggle="modal" href="#" data-target="#basic"
                                       data-title="Delete"
                                       data-content="Are you sure you want to delete coupon for user : {{ $element->user->name }}? "
                                       data-form_id="delete-{{ $element->id }}"
                                    >
                                        <i class="fa fa-fw fa-recycle"></i> delete</a>
                                    <form method="post" id="delete-{{ $element->id }}"
                                          action="{{ route('backend.coupon.destroy',$element->id) }}">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete"/>
                                        <button type="submit" class="btn btn-del hidden">
                                            <i class="fa fa-fw fa-times-circle"></i> delete
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection