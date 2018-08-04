<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light ">
            @include('backend.partials.forms.form_title')
            <div class="portlet-body">
                <table id="dataTable" class="table table-striped table-bordered table-hover" cellspacing="0">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>product_id</th>
                        <th>size_id</th>
                        <th>color_id</th>
                        <th>qty</th>
                        <th>notes_ar</th>
                        <th>notes_en</th>
                        <th>actions</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>id</th>
                        <th>product_id</th>
                        <th>size_id</th>
                        <th>color_id</th>
                        <th>qty</th>
                        <th>notes_ar</th>
                        <th>notes_en</th>
                        <th>actions</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($element->product_attributes as $element)
                        <tr>
                            <td>{{ $element->id }}</td>
                            <td>{{ $element->product_id }}</td>
                            <td>{{ $element->size->name }}</td>
                            <td>
                                <span class="label"
                                      style="background-color: {{ $element->color->name }}">{{ $element->color->name }}</span>
                            </td>
                            <td>
                                {{ $element->qty }}
                            </td>
                            <td>
                                {{ $element->notees_ar }}
                            </td>
                            <td>
                                {{ $element->notes_en }}
                            </td>
                            <td>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('backend.attribute.edit',$element->id) }}">
                                            <i class="fa fa-fw fa-edit"></i> Edit</a>
                                    </li>
                                    <li>
                                        <a data-toggle="modal" href="#" data-target="#basic"
                                           data-title="Delete"
                                           data-content="Are you sure you want to delete attribute ? "
                                           data-form_id="delete-{{ $element->id }}">
                                            <i class="fa fa-fw fa-recycle"></i> dhelete</a>
                                        <form method="post" id="delete-{{ $element->id }}"
                                              action="{{ route('backend.attribute.destroy',$element->id) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete"/>
                                            <button type="submit" class="btn btn-del hidden">
                                                <i class="fa fa-fw fa-times-circle"></i> delete
                                            </button>
                                        </form>
                                    </li>
                                </ul>

                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn green btn-xs btn-outline dropdown-toggle"
                                            data-toggle="dropdown"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="{{ route('backend.product.edit',$element->id) }}">
                                                <i class="fa fa-fw fa-edit"></i> Edit</a>
                                        </li>
                                        @if($element->gallery)
                                            <li>
                                                <a href="{{ route('backend.gallery.edit',['id' => $element->gallery->id, 'type' => 'product' , 'element_id' => $element->id]) }}"
                                                   target="_blank">
                                                    <i class="fa fa-fw fa-image"></i> edit Gallery</a>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{ route('backend.gallery.create',['id' => $element->id, 'type' => 'product' , 'element_id' => $element->id]) }}"
                                                   target="_blank">
                                                    <i class="fa fa-fw fa-plus-square-o"></i> create Gallery</a>
                                            </li>
                                        @endif
                                        <li>
                                            <a href="{{ route('backend.activate',['model' => 'product','id' => $element->id]) }}">
                                                <i class="fa fa-fw fa-check-circle"></i> toggle active</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('backend.attribute.create',['product_id' => $element->id]) }}">
                                                <i class="fa fa-fw fa-plus-square"></i> assign new attribute</a>
                                        </li>
                                        <li>
                                            <a data-toggle="modal" href="#" data-target="#basic"
                                               data-title="Delete"
                                               data-content="Are you sure you want to delete {{ $element->name  }}? "
                                               data-form_id="delete-{{ $element->id }}"
                                            >
                                                <i class="fa fa-fw fa-recycle"></i> delete</a>
                                            <form method="post" id="delete-{{ $element->id }}"
                                                  action="{{ route('backend.product.destroy',$element->id) }}">
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
        </div>
    </div>
</div>