@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                @include('backend.partials.forms.form_title')
                <div class="portlet-body">
                    <div class="portlet-body">
                        <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0"
                               width="100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>splash</th>
                                <th>show in home</th>
                                <th>show in category</th>
                                <th>show in company</th>
                                <th>show in individual</th>
                                <th>image</th>
                                <th>active</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>splash</th>
                                <th>show in home</th>
                                <th>show in category</th>
                                <th>show in company</th>
                                <th>show in individual</th>
                                <th>image</th>
                                <th>active</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($elements as $element)
                                <tr>
                                    <td>{{ $element->id }}</td>
                                    <td>
                                        <span class="label {{ activeLabel($element->is_splash) }}">{{ activeText($element->is_splash,'splash') }}</span>
                                    </td>
                                    <td>
                                        <span class="label {{ activeLabel($element->is_home) }}">{{ activeText($element->is_home,'home') }}</span>
                                    </td>
                                    <td>
                                        <span class="label {{ activeLabel($element->is_category) }}">{{ activeText($element->is_category,'category list') }}</span>
                                    </td>
                                    <td>
                                        <span class="label {{ activeLabel($element->is_company) }}">{{ activeText($element->is_company,'company') }}</span>
                                    </td>
                                    <td>
                                        <span class="label {{ activeLabel($element->is_individual) }}">{{ activeText($element->is_individual,'individual') }}</span>
                                    </td>
                                    <td>
                                        <img src="{{ asset('storage/uploads/images/thumbnail/'.$element->image) }}"
                                             alt=""
                                             class="img-responsive img-xs img-rounded">
                                    </td>
                                    <td>
                                        <span class="label {{ activeLabel($element->active) }}">{{ activeText($element->active) }}</span>
                                    </td>
                                    <td>{{ $element->created_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="btn-group pull-right">
                                            <button type="button" class="btn green btn-sm btn-outline dropdown-toggle"
                                                    data-toggle="dropdown"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right" role="menu">
                                                <li>
                                                    <a href="{{ route('backend.commercial.edit',$element->id) }}">
                                                        <i class="fa fa-fw fa-user"></i>edit</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('backend.activation',['model' => 'commercial','id' => $element->id]) }}">
                                                        <i class="fa fa-fw fa-check-circle"></i> toggle active</a>
                                                </li>
                                                <li>
                                                    <form method="post"
                                                          action="{{ route('backend.commercial.destroy',$element->id) }}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="_method" value="delete"/>
                                                        <button type="submit" class="btn btn-outline btn-sm red">
                                                            <i class="fa fa-remove"></i>delete commercial
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
    </div>
@endsection