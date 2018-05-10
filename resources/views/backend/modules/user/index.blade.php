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
                            <th>active</th>
                            <th>mobile</th>
                            <th>sms verified</th>
                            <th>deal type</th>
                            <th>country</th>
                            <th>logo</th>
                            <th>branches</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>name</th>
                            <th>active</th>
                            <th>mobile</th>
                            <th>sms verified</th>
                            <th>Deal Type</th>
                            <th>country</th>
                            <th>logo</th>
                            <th>branches</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($elements as $element)
                            <tr>
                                <td>{{ $element->id }}</td>
                                <td>{{ $element->name }}</td>
                                <td>
                                    <span class="label {{ activeLabel($element->active) }}">{{ activeText($element->active) }}</span>
                                </td>
                                <td>
                                    {{ $element->mobile }}
                                </td>
                                <td>
                                    <span class="label {{ activeLabel($element->verified) }}">{{ activeText($element->verified)}}</span>
                                </td>
                                <td>
                                    @if($element->deal)
                                        <span class="label {{ activeLabel($element->deal->isValid) }}">{{ activeText($element->deal->isValid,$element->deal->plan->name)}}</span>
                                    @endif
                                </td>
                                <td>
                                    @if($element->country)
                                    {{ $element->country->name }} </br>
                                    @endif
                                    @if($element->governate)
                                    {{ $element->governate->name }} </br>
                                    @endif
                                    @if($element->area)
                                        {{ $element->area->name }}
                                    @endif
                                </td>
                                <td><img src="{{ asset('storage/uploads/images/thumbnail/'.$element->logo) }}"
                                         class="img-xs img-rounded img-circle" style="max-width: 50px;" alt="">
                                </td>
                                <td style="min-width: 200px">
                                    @if($element->role->is_company && !$element->branches->isEmpty())
                                        <ol>
                                            @foreach($element->branches as $branch)
                                                <li style="margin: 5px;">
                                                    <div class="keep-open btn-group" title="Columns">
                                                        <button type="button"
                                                                class="btn {{ $branch->active ? "btn-success" : "btn-danger" }} dropdown-toggle"
                                                                data-toggle="dropdown"
                                                                aria-expanded="false">
                                                            {{ $branch->name }}
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" role="menu">
                                                            <li>
                                                                <a href="{{ route('backend.branch.show',$branch->id) }}">
                                                                    <i class="fa fa-fw fa-edit"></i>View Branch</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('backend.activation',['model' => 'branch','id' => $branch->id]) }}">
                                                                    <i class="fa fa-fw fa-check-circle"></i> toggle
                                                                    active</a>
                                                            </li>
                                                            {{--<li>--}}
                                                            {{--<form method="post"--}}
                                                            {{--action="{{ route('backend.branch.destroy',$branch->id) }}"--}}
                                                            {{--class="col-lg-12">--}}
                                                            {{--{{ csrf_field() }}--}}
                                                            {{--<input type="hidden" name="_method" value="delete"/>--}}
                                                            {{--<button type="submit" class="btn btn-sm">--}}
                                                            {{--<i class="fa fa-remove"></i> Delete Branch--}}
                                                            {{--</button>--}}
                                                            {{--</form>--}}
                                                            {{--</li>--}}
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ol>
                                    @else
                                        <span class="label {{ activeLabel($element->role->is_company) }}">{{ activeText($element->role->isCompany)}}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn green btn-xs btn-outline dropdown-toggle"
                                                data-toggle="dropdown"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="{{ route('backend.user.edit',$element->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i> Edit User</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('backend.gallery.show',$element->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i> View Gallery</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('backend.reset.password',['mobile' => $element->mobile]) }}">
                                                    <i class="fa fa-fw fa-edit"></i> Reset Password</a>
                                            </li>
                                            {{--<li>--}}
                                            {{--<a href="{{ route('backend.branch.create',['user_id' => $element->id]) }}">--}}
                                            {{--<i class="fa fa-fw fa-edit"></i> Add Branch</a>--}}
                                            {{--</li>--}}
                                            <li>
                                                <a href="{{ route('backend.activation',['model' => 'user','id' => $element->id]) }}">
                                                    <i class="fa fa-fw fa-check-circle"></i> toggle active</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('backend.validation',['model' => 'user','id' => $element->id]) }}">
                                                    <i class="fa fa-fw fa-check-circle"></i> toggle deal validation</a>
                                            </li>
                                            <li>
                                                <form method="post"
                                                      action="{{ route('backend.user.destroy',$element->id) }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="delete"/>
                                                    <button type="submit" class="btn btn-outline btn-sm red">
                                                        <i class="fa fa-remove"></i>delete user
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