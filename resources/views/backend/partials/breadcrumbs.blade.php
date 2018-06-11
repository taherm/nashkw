<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="{{ route('backend.index') }}">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        @if(request()->segment(2))
            <li>
                <a href="{{ route('backend.'.request()->segment(2).'.index') }}">{{ request()->segment(2) }}</a>
            </li>
            <li>
                <i class="fa fa-angle-right"></i>
                <span>{{ request()->segment(3) }}</span>
            </li>
        @endif
    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown"
                    data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li>
                    <a href="{{ route('backend.home') }}">
                        <i class="icon-user-following"></i> Dashbaord</a>
                </li>
                <li>
                    <a href="{{ route('frontend.home') }}">
                        <i class="icon-home"></i> Home</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('backend.setting.index') }}">
                        <i class="icon-settings"></i> Settings</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END PAGE HEADER-->