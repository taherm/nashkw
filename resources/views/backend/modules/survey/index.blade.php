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
                            {{ trans('message.backend_survey_index') }}
                        </p>
                    </div>
                    <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>slug_ar</th>
                            <th>slug_en</th>
                            <th>is_home</th>
                            <th>is_desktop</th>
                            <th>is_footer</th>
                            <th>active</th>
                            <th>order</th>
                            <th>url</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>slug_ar</th>
                            <th>slug_en</th>
                            <th>is_home</th>
                            <th>is_desktop</th>
                            <th>is_footer</th>
                            <th>active</th>
                            <th>order</th>
                            <th>url</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($elements as $element)
                            <tr>
                                <td>{{ $element->id }}</td>
                                <td>{{ $element->name }}</td>
                                <td>{{ $element->slug_ar }}</td>
                                <td>{{ $element->slug_en }}</td>
                                <td>
                                    <span class="label {{ activeLabel($element->is_home) }}">{{ activeText($element->is_home) }}</span>
                                </td>
                                <td>
                                    <span class="label {{ activeLabel($element->is_desktop) }}">{{ activeText($element->is_desktop) }}</span>
                                </td>
                                <td>
                                    <span class="label {{ activeLabel($element->is_footer) }}">{{ activeText($element->is_footer) }}</span>
                                </td>
                                <td>
                                    <span class="label {{ activeLabel($element->active) }}">{{ activeText($element->is_home) }}</span>
                                </td>
                                <td>
                                    <span class="label label-warning">{{ $element->order }}</span>
                                </td>
                                <td>
                                    <span class="btn btn-success btn-circle">
                                    <a href="{{ url(config('app.url').'/survey/'.$element->id) }}">{{ config('app.url') }}
                                        /survey/{{ $element->id }}</a>
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn green btn-sm btn-outline dropdown-toggle"
                                                data-toggle="dropdown"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="{{ route('frontend.survey.show',$element->id) }}">
                                                    <i class="fa fa-fw fa-eye"></i>View Survey</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('backend.survey.edit',$element->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i>edit</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('backend.activate',['model' => 'survey','id' => $element->id]) }}">
                                                    <i class="fa fa-fw fa-check-circle"></i> toggle active</a>
                                            </li>
                                            <li>
                                                <a data-toggle="modal" href="#" data-target="#basic"
                                                   data-title="Delete"
                                                   data-content="Are you sure you want to delete {{ $element->name  }}? "
                                                   data-form_id="delete-{{ $element->id }}"
                                                >
                                                    <i class="fa fa-fw fa-recycle"></i> delete</a>
                                                <form method="post" id="delete-{{ $element->id }}"
                                                      action="{{ route('backend.survey.destroy',$element->id) }}">
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
                    @if($elements->render())
                        {{ $elements->render() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection