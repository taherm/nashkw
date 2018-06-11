@extends('backend.layouts.app')
@section('content')
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark sbold uppercase">Edit Gallery</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form class="form-horizontal" role="form" method="post"
                  action="{{ route('backend.gallery.update',$element->id) }}"
                  enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="put">
                <div class="form-group">
                    <label class="col-md-2 control-label">Name Ar</label>
                    <div class="col-md-10">
                        <input type="text" name="name_ar" value="{{ $element->name_ar }}" class="form-control"
                               placeholder="Enter text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Name En</label>
                    <div class="col-md-10">
                        <input type="text" name="name_en" value="{{ $element->name_en  }}" class="form-control"
                               placeholder="Enter text">
                    </div>
                </div>

                <div class="form-group">
                    {{--<label for="role_id" class="col-md-2 control-label">Shop*</label>--}}

                    <div class="col-md-10">
                        <input type="hidden" name="galleryable_id" value="{{ $element->galleryable_id }}"/>
                        {{--<select name="galleryable_id" id="galleryable_id" class="form-control" required>--}}
                            {{--@foreach($elements as $shop)--}}
                                {{--{{ var_dump($shop->id) }}--}}
                                {{--<option value="{{ $shop->id }}" {{ $shop->gallery->first() && $shop->gallery->first()->id === $element->galleryable_id ? 'selected' : null }}>{{ $shop->name_ar }}</option>--}}
                            {{--@endforeach--}}
                        {{--</select>--}}
                    </div>
                </div>

                <div class="form-group">
                    <label for="file"
                           class="control-label col-sm-2">main image*</label>
                    <div class="col-sm-4">
                        <input class="form-control tooltip-message" name="image"
                               placeholder="main image"
                               type="file"
                        />
                        <div class="help-block text-left">
                            W * H - Best fit ['1534', '586'] pixels
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <img class="img-responsive img-sm"
                             src="{{ asset('storage/uploads/images/thumbnail/'.$element->image) }}" alt="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="file"
                           class="control-label col-sm-2">more images</label>
                    <div class="col-sm-10">
                        <input class="form-control tooltip-message" name="images[]"
                               placeholder="images" type="file" multiple/>
                        <div class="help-block text-left">
                            W * H - Best fit ['1534', '586'] pixels
                        </div>
                    </div>
                </div>
                @include('backend.partials.forms._btn-group')
            </form>
        </div>
    </div>
    <div class="col-lg-12">
        @foreach($element->images->chunk(4) as $set)
            @foreach($set as $i)
                <div class="col-sm-3">
                    <img class="img-responsive img-thumbnail" style="max-height: 120px;"
                         src="{{ asset('storage/uploads/images/thumbnail/'.$i->image) }}" alt="">
                    <form method="post" action="{{ route('backend.image.destroy',$i->id) }}">
                        @csrf
                        <input type="hidden" name="_method" value="delete"/>
                        <button type="submit" class="btn btn-circle btn-sm red">
                            <i class="fa fa-fw fa-xs fa-remove"></i>
                        </button>
                    </form>
                </div>
            @endforeach
        @endforeach
    </div>
@endsection