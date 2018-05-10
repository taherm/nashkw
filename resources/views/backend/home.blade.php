@extends('backend.layouts.app')

@section('content')
    <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                    <div class="visual">
                        <i class="fa fa-money"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="{{ $companies }}">1</span>
                        </div>
                        <div class="desc ">Total Companies With Valid Deal</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                    <div class="visual">
                        <i class="fa fa-user-circle"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="{{ $individuals }}">{{ $individuals }}</span>
                        </div>
                        <div class="desc"> Total Individuals with Valid Deal</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                    <div class="visual">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup" data-value="{{ $deals }}">{{ $deals }}</span></div>
                        <div class="desc"> Total Active Valid Deals paid by Tap Service</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                    <div class="visual">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            <span data-counter="counterup"
                                  data-value="{{ $totalProfileViews }}">{{ $totalProfileViews }}</span>
                        </div>
                        <div class="desc">Views Counter</div>
                    </div>
                </a>
            </div>
            <div class="col-lg-12">
                <div class="portlet box yellow-crusta">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-gift"></i>Important Information (settings)
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#portlet_tab_3" data-toggle="tab"> Settings </a>
                            </li>
                            {{--<li>--}}
                            {{--<a href="#portlet_tab_2" data-toggle="tab"> Paid Plans </a>--}}
                            {{--</li>--}}
                            {{--<li class="">--}}
                            {{--<a href="#portlet_tab_1" data-toggle="tab"> Tab 1 </a>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <div class="tab-pane" id="portlet_tab_1">
                                <div class="portlet-body">
                                    <div class="scroller" style="height:200px" data-rail-visible="1"
                                         data-rail-color="yellow" data-handle-color="#a1b2bd">
                                        <strong>Scroll is hidden</strong>
                                        <br/> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget
                                        lacinia
                                        odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis
                                        mollis,

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="portlet_tab_2">
                                <div class="scroller" style="height:200px" data-rail-visible="1"
                                     data-rail-color="yellow"
                                     data-handle-color="#a1b2bd">
                                    <strong>Scroll is hidden</strong>
                                    <br/> Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
                                    odio
                                    sem nec elit. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non
                                    commodo luctus, nisi erat porttitor ligula,
                                    eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
                                    Duis
                                </div>
                            </div>
                            <div class="tab-pane active" id="portlet_tab_3">
                                <div class="scroller" style="height:200px" data-rail-visible="1"
                                     data-rail-color="yellow" data-handle-color="#a1b2bd">
                                    you can turn on the app to be totally free by turning on the app_free feature under
                                    the
                                    settings.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection