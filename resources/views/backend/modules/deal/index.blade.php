@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                @include('backend.partials.forms.form_title')
                <div class="portlet-body">
                    <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>reference_id</th>
                            <th>price</th>
                            <th>duration</th>
                            <th>total</th>
                            <th>valid</th>
                            <th>images</th>
                            <th>branches</th>
                            <th>label</th>
                            <th>has_offer</th>
                            <th>show_first</th>
                            <th>plan_id</th>
                            <th>user_id</th>
                            <th>start_date</th>
                            <th>end_date</th>
                            {{--<th>Action</th>--}}
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>id</th>
                            <th>reference_id</th>
                            <th>price</th>
                            <th>duration</th>
                            <th>total</th>
                            <th>valid</th>
                            <th>images</th>
                            <th>branches</th>
                            <th>label</th>
                            <th>has_offer</th>
                            <th>show_first</th>
                            <th>plan_id</th>
                            <th>user_id</th>
                            <th>start_date</th>
                            <th>end_date</th>
                            {{--<th>Action</th>--}}
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($elements as $element)
                            <tr>
                                <td>{{ $element->id }}</td>
                                <td>{{ $element->reference_id }}</td>
                                <td>{{ $element->price }}</td>
                                <td>{{ $element->duration }}</td>
                                <td>{{ $element->total }}</td>
                                <td>
                                    <span class="label {{ activeLabel($element->valid) }}">{{ activeText($element->valid,'Valid') }}</span>
                                </td>
                                <td>
                                    <span class="label {{ activeLabel($element->has_images) }}">{{ activeText($element->has_images,'images') }}</span>
                                </td>
                                <td>
                                    <span class="label {{ activeLabel($element->has_branches) }}">{{ activeText($element->has_branches,'branches') }}</span>
                                </td>
                                <td>
                                    <span class="label {{ activeLabel($element->has_label) }}">{{ activeText($element->has_label,'label') }}</span>
                                </td>
                                <td>
                                    <span class="label {{ activeLabel($element->has_offer) }}">{{ activeText($element->has_offer,'has_offer') }}</span>
                                </td>
                                <td>
                                    <span class="label {{ activeLabel($element->show_first) }}">{{ activeText($element->show_first,'show_first') }}</span>
                                </td>
                                <td>
                                    {{ $element->plan->name }} - {{ $element->plan_id }}
                                </td>
                                <td>
                                    {{ $element->user->name }}
                                </td>
                                <td>{{ $element->start_date->diffForHumans() }}</td>
                                <td>{{ $element->end_date->diffForHumans() }}</td>
                                {{--<td>--}}
                                {{--<div class="btn-group pull-right">--}}
                                {{--<button type="button" class="btn green btn-sm btn-outline dropdown-toggle"--}}
                                {{--data-toggle="dropdown"> Actions--}}
                                {{--<i class="fa fa-angle-down"></i>--}}
                                {{--</button>--}}
                                {{--<ul class="dropdown-menu pull-right" role="menu">--}}
                                {{--<li>--}}
                                {{--<a href="{{ route('backend.plan.edit',$element->id) }}">--}}
                                {{--<i class="fa fa-fw fa-user"></i>edit</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                {{--<a href="{{ route('backend.activation',['model' => 'plan','id' => $element->id]) }}">--}}
                                {{--<i class="fa fa-fw fa-check-circle"></i> toggle active</a>--}}
                                {{--</li>--}}
                                {{--@if($element->deals->isEmpty())--}}
                                {{--<li>--}}
                                {{--<form method="post" action="{{ route('backend.plan.destroy',$element->id) }}">--}}
                                {{--{{ csrf_field() }}--}}
                                {{--<input type="hidden" name="_method" value="delete"/>--}}
                                {{--<button type="submit" class="btn btn-outline btn-sm red">--}}
                                {{--<i class="fa fa-remove"></i>delete plan--}}
                                {{--</button>--}}
                                {{--</form>--}}
                                {{--</li>--}}
                                {{--@endif--}}
                                {{--</ul>--}}
                                {{--</div>--}}
                                {{--</td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection