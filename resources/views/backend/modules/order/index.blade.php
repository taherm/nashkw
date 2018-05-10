@extends('backend.layouts.app')

@section('content')
    <div class="portlet-body">
        <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0"
               width="100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>total_price</th>
                <th>reference_id</th>
                <th>products/size/qty</th>
                <th>valid</th>
                <th>status</th>
                <th>email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Id</th>
                <th>total_price</th>
                <th>reference_id</th>
                <th>products/size/qty</th>
                <th>valid</th>
                <th>status</th>
                <th>email</th>
                <th>Action</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach($elements as $element)
                <tr>
                    <td>{{ $element->id }}</td>
                    <td>{{ $element->total_price}}</td>
                    <td>{{ $element->reference_id}}</td>
                    <td>
                        @foreach($element->attributes as $attribute)
                            <li>{{ $attribute->product->name_ar}} - {{ $attribute->size->name_ar }} - {{ $attribute->qty }}</li>
                        @endforeach
                    </td>
                    <td>
                        <span class="label {{ activeLabel($element->valid) }}">{{ i stopped here
                        then check the creating the order and products in the local mode
                        activeText($element->vaid,'Valid') }}</span>
                    </td>
                    <td><span class="label label-info">{{ $element->status }}</span></td>
                    <td><span class="label label-info">{{ $element->email }}</span></td>
                    <td>
                        <div class="btn-group pull-right">
                            <button type="button" class="btn green btn-sm btn-outline dropdown-toggle"
                                    data-toggle="dropdown"> Actions
                                <i class="fa fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                    <form method="post" action="{{ route('backend.order.destroy',$element->id) }}"
                                          class="col-lg-12">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="delete"/>
                                        <button type="submit" class="btn btn-outline btn-sm red">
                                            <i class="fa fa-remove"></i>delete order
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