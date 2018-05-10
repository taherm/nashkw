@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase">
                            @section('title')
                                {{ Route::currentRouteName() }} {{ (!is_null(request()->has('type'))) ? request()->type : null }}
                            @show
                        </span>
                    </div>
                </div>
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
                    <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>slug_en</th>
                            <th>slug_ar</th>
                            <th>role</th>
                            <th>active</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>slug_en</th>
                            <th>slug_ar</th>
                            <th>role</th>
                            <th>active</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($elements as $element)
                            <tr>
                                <td>{{ $element->id }}</td>
                                <td>{{ $element->name }}</td>
                                <td>
                                    <span class="label label-lg {{ activeLabel($element->active) }} text-uppercase">{{ $element->slug_en }}</span>
                                </td>
                                <td>
                                    <span class="label label-lg {{ activeLabel($element->active) }} text-uppercase">{{ $element->slug_ar }}</span>
                                </td>
                                <td>
                                    <span class="label label-lg {{ activeLabel($element->active) }} text-uppercase">{{ $element->role->name }}</span>
                                </td>
                                <td>
                                    <span class="label label-lg {{ activeLabel($element->active) }} text-uppercase">{{ activeText($element->active)}}</span>
                                </td>
                                {{--<td>--}}
                                {{--@if(!$element->children->isEmpty())--}}
                                {{--<ul>--}}
                                {{--@foreach($element->children as $child)--}}
                                {{--<li>{{ $child->name_en }} - {{ $child->name_ar }}</li>--}}
                                {{--@endforeach--}}
                                {{--</ul>--}}
                                {{--@else--}}
                                {{--<span class="label label-info">no sub categories</span>--}}
                                {{--@endif--}}
                                {{--</td>--}}
                                <td>
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn green btn-sm btn-outline dropdown-toggle"
                                                data-toggle="dropdown"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="{{ route('backend.category.edit',$element->id) }}">
                                                    <i class="fa fa-fw fa-user"></i>edit</a>
                                            </li>
                                            {{--@if($element->is_parent)--}}
                                            {{--<li>--}}
                                            {{--<a href="{{ route('backend.category.index',['parent_id' => $element->id]) }}">--}}
                                            {{--<i class="fa fa-fw fa-user"></i>view sub-category</a>--}}
                                            {{--</li>--}}
                                            {{--@endif--}}
                                            <li>
                                                <a href="{{ route('backend.activation',['model' => 'category','id' => $element->id]) }}">
                                                    <i class="fa fa-fw fa-user"></i>toggle category activation</a>
                                            </li>
                                            <li>
                                                <form method="post"
                                                      action="{{ route('backend.category.destroy',$element->id) }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="delete"/>
                                                    <button type="submit" class="btn btn-outline btn-sm red">
                                                        <i class="fa fa-remove"></i>delete category
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
            </div>
        </div>
    </div>
@endsection