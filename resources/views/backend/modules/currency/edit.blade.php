@extends('backend.layouts.app')
@section('content')
    <div class="portlet box blue">
        @include('backend.partials.forms.form_title')
        <div class="portlet-body form">
            <form class="horizontal-form" role="form" method="POST"
                  action="{{ route('backend.currency.update',$element->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-body">
                    <input type="hidden" name="_method" value="put">
                    <h3 class="form-section">Edit Currency</h3>
                    {{--name arabic / name english --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('exchange_rate') ? ' has-error' : '' }}">
                                <label for="exchange_rate" class="control-label">exchange_rate*</label>
                                <input id="exchange_rate"
                                       type="text"
                                       class="form-control"
                                       name="exchange_rate"
                                       value="{{ $element->exchange_rate }}"
                                       placeholder="name in arabic"
                                       maxlength="4"
                                       required autofocus>
                                @if ($errors->has('exchange_rate'))
                                    <span class="help-block">
                                        <strong>
                                            {{ $errors->first('exchange_rate') }}
                                        </strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    @include('backend.partials.forms._btn-group')
                </div>
            </form>
        </div>
    </div>
@endsection
