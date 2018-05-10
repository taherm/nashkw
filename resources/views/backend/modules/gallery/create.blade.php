@extends('backend.layouts.app')
@section('content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark sbold uppercase">Create Gallery</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" method="post"
                  action="{{ route('backend.gallery.store') }}"
                  enctype="multipart/form-data">
                {{ csrf_field() }}
                {{--<div class="form-group">--}}
                    {{--<label class="col-md-2 control-label">Name Ar</label>--}}
                    {{--<div class="col-md-10">--}}
                        {{--<input type="text" name="name_ar" value="{{ old('name_ar')}}" class="form-control"--}}
                               {{--placeholder="Enter text">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label class="col-md-2 control-label">Name En</label>--}}
                    {{--<div class="col-md-10">--}}
                        {{--<input type="text" name="name_en" value="{{ old('name_en') }}" class="form-control"--}}
                               {{--placeholder="Enter text">--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="form-group">
                    <label for="role_id" class="col-md-2 control-label">Pages*</label>

                    <div class="col-md-10">
                        <select name="page_id" id="page_id" class="form-control" required>
                            @foreach($elements as $element)
                                <option value="{{ $element->id }}">{{ $element->title_ar }}-{{ $element->title_en }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="file"
                           class="control-label col-sm-2">main image*</label>
                    <div class="col-sm-10">
                        <input class="form-control tooltip-message" name="image"
                               placeholder="main image"
                               type="file"
                               required
                        />
                        <div class="help-block text-left">
                            W * H - Best fit ['586', '1534'] pixels
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="file"
                           class="control-label col-sm-2">more images</label>
                    <div class="col-sm-10">
                        <input class="form-control tooltip-message" name="images[]"
                               placeholder="images" type="file" multiple/>
                        <div class="help-block text-left">
                            W * H - Best fit ['586', '1534'] pixels
                        </div>
                    </div>
                </div>
                @include('backend.partials.forms._btn-group')
            </form>
        </div>
    </div>
@endsection