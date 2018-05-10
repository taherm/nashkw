@extends('backend.layouts.app')
@section('content')

    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-settings font-dark"></i>
                <span class="caption-subject font-dark sbold uppercase">Create New Commercial</span>
            </div>
        </div>
        <div class="portlet-body form">
            <form role="form" method="post" action="{{ route('backend.commercial.store') }}"
                  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-body">
                    <div class="form-group form-md-line-input">
                        <input type="file" class="form-control" name="image" placeholder="..." required>
                        <label for="form_control_1">commercial Image - ['1534', '586']</label>
                        <div class="help-block text-left">
                            W * H - Best fit 1534 x 586 pixels
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-body">
                            <div class="md-radio-inline">
                                <div class="md-radio">
                                    <input type="radio" id="radio53" name="active" value="1" class="md-radiobtn" checked>
                                    <label for="radio53">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> Active</label>
                                </div>
                                <div class="md-radio">
                                    <input type="radio" id="radio54" name="active" value="0" class="md-radiobtn">
                                    <label for="radio54">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> N/A</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-body">
                            <div class="md-radio-inline">
                                <div class="md-radio">
                                    <input type="radio" id="radio55" name="is_category" value="1" class="md-radiobtn" checked>
                                    <label for="radio55">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> is_category</label>
                                </div>
                                <div class="md-radio">
                                    <input type="radio" id="radio56" name="is_category" value="0" class="md-radiobtn">
                                    <label for="radio56">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> N/A</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-body">
                            <div class="md-radio-inline">
                                <div class="md-radio">
                                    <input type="radio" id="radio57" name="is_splash" value="1" class="md-radiobtn" checked>
                                    <label for="radio57">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> is_splash</label>
                                </div>
                                <div class="md-radio">
                                    <input type="radio" id="radio58" name="is_splash" value="0" class="md-radiobtn">
                                    <label for="radio58">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> N/A</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-body">
                            <div class="md-radio-inline">
                                <div class="md-radio">
                                    <input type="radio" id="radio59" name="is_company" value="1" class="md-radiobtn" checked>
                                    <label for="radio59">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> is_company</label>
                                </div>
                                <div class="md-radio">
                                    <input type="radio" id="radio51" name="is_company" value="0" class="md-radiobtn">
                                    <label for="radio51">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> N/A</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-body">
                            <div class="md-radio-inline">
                                <div class="md-radio">
                                    <input type="radio" id="radio59" name="is_individual" value="1" class="md-radiobtn" checked>
                                    <label for="radio59">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> is_individual</label>
                                </div>
                                <div class="md-radio">
                                    <input type="radio" id="radio51" name="is_individual" value="0" class="md-radiobtn">
                                    <label for="radio51">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> N/A</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('backend.partials.forms._btn-group')
            </form>
        </div>
    </div>
@endsection