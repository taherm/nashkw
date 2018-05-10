@extends('backend.layouts.app')

@section('content')
    <div class="portlet-body">
        <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>active</th>
                <th>modal_id</th>
                <th>modal_type</th>
                <th>Page Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>active</th>
                <th>modal_id</th>
                <th>modal_type</th>
                <th>Page Name</th>
                <th>Action</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach($elements as $element)
                <tr>
                    <td>{{ $element->id }}</td>
                    <td>
                        <span class="label {{ activeLabel($element->active) }}">{{ activeText($element->active) }}</span>
                    </td>
                    <td>{{ $element->galleryable_id}}</td>
                    <td>
                        <span class="label label-success">{{ class_basename($element->galleryable_type) }}</span>
                    </td>
                    <td>
                        {{ $element->galleryable_type }}
                    </td>

                    <td>
                        <div class="btn-group pull-right">
                            <button type="button" class="btn green btn-sm btn-outline dropdown-toggle"
                                    data-toggle="dropdown"> Actions
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                    <a href="{{ route('backend.gallery.edit',$element->id) }}">
                                        <i class="fa fa-fw fa-user"></i>edit Gallery</a>
                                </li>
                                <li>
                                    <a href="{{ route('backend.activation',['model' => 'gallery', 'id' => $element->id]) }}">
                                        <i class="fa fa-fw fa-user"></i>toggle activation</a>
                                </li>
                                <li>
                                    <form method="post" action="{{ route('backend.gallery.destroy',$element->id) }}"
                                          class="col-lg-12">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="delete"/>
                                        <button type="submit" class="btn btn-outline btn-sm red">
                                            <i class="fa fa-remove"></i>delete gallery
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