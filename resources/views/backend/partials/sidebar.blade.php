<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- END SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu page-sidebar-menu-closed"
            data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item {{ activeItem('user') }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-fw fa-user-circle"></i>
                    <span class="title">Users</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    @foreach($roles as $r)
                        <li class="nav-item start ">
                            <a href="{{ route('backend.user.index', ['role' => $r->id]) }}" class="nav-link ">
                                <i class="fa fa-fw fa-arrow-circle-o-right"></i>
                                <span class="title">{{ $r->name }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item {{ activeItem('plan') }}">
                <a href="{{ route('backend.plan.index') }}" class="nav-link nav-toggle">
                    <i class="fa fa-fw fa-newspaper-o"></i>
                    <span class="title">Plans</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start ">
                        <a href="{{ route('backend.plan.index') }}" class="nav-link ">
                            <i class="icon-lock-open"></i>
                            <span class="title">Plans</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="{{ route('backend.plan.create') }}" class="nav-link ">
                            <i class="icon-plus"></i>
                            <span class="title">Create Plans</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ activeItem('role') }}">
                <a href="{{ route('backend.role.index') }}" class="nav-link nav-toggle">
                    <i class="fa fa-fw fa-user-plus"></i>
                    <span class="title">Roles</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start ">
                        <a href="{{ route('backend.role.index') }}" class="nav-link ">
                            <i class="icon-pencil"></i>
                            <span class="title">Roles Settings</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ activeItem('deal') }}">
                <a href="{{ route('backend.deal.index') }}" class="nav-link nav-toggle">
                    <i class="fa fa-fw fa-money"></i>
                    <span class="title">Deals</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{ route('backend.deal.index',['status' => 'success']) }}" class="nav-link ">
                            Successful Deal</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ activeItem('commercial') }}">
                <a href="{{ route('backend.commercial.index') }}" class="nav-link nav-toggle">
                    <i class="fa fa-fw fa-eye-slash"></i>
                    <span class="title">Commercials</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{ route('backend.commercial.index') }}" class="nav-link ">
                            <i class="fa fa-fw fa-eye-slash"></i>
                            <span class="title">Commercials</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('backend.commercial.create') }}" class="nav-link ">
                            <i class="fa fa-fw fa-plus-circle"></i>
                            <span class="title">Create Commercial</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                </ul>
            </li>

            {{--categories about us--}}
            <li class="nav-item {{ activeItem('category') }}">
                <a href="{{ route('backend.category.index') }}" class="nav-link nav-toggle">
                    <i class="fa fa-fw fa-list-ol"></i>
                    <span class="title">Categories</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{ route('backend.category.index') }}" class="nav-link ">
                            <i class="fa fa-fw fa-list-ul"></i>
                            <span class="title">Categories</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('backend.category.create') }}" class="nav-link ">
                            <i class="fa fa-fw fa-plus-square"></i>
                            <span class="title">Create Category</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                </ul>
            </li>

            {{--Settings--}}
            <li class="nav-item {{ activeItem('setting', ['category','contactus', 'aboutus']) }}">
                <a href="{{ route('backend.setting.index') }}" class="nav-link nav-toggle">
                    <i class="fa fa-fw fa-cogs"></i>
                    <span class="title">App Settings</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{ route('backend.setting.index') }}" class="nav-link ">
                            <i class="fa fa-fw fa-edit"></i>
                            <span class="title">Edit App Settings</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ activeItem('country',['governate','area']) }}">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-fw fa-globe"></i>
                    <span class="title">Countries</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{ route('backend.country.create') }}" class="nav-link ">
                            <i class="fa fa-fw fa-plus-circle"></i>
                            <span class="title">Add New Country</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('backend.country.index') }}" class="nav-link ">
                            Countries List</a>
                    </li>
                    <li class="nav-item ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-fw fa-globe"></i>
                            <span class="title">Countries Control</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu always-open">
                            @foreach($countries as $country)
                                <li class="nav-item">
                                    <a href="{{ route('backend.country.show',$country->id) }}" class="nav-link ">
                                        {{ $country->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-folder"></i>
                    <span class="title">Multi Level Menu</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i> Item 1
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="?p=dashboard-2" target="_blank" class="nav-link">
                                    <i class="icon-user"></i> Arrow Toggle
                                    <span class="arrow nav-toggle"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-power"></i> Sample Link 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-paper-plane"></i> Sample Link 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="icon-star"></i> Sample Link 1</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-camera"></i> Sample Link 1</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-link"></i> Sample Link 2</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-pointer"></i> Sample Link 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="?p=dashboard-2" target="_blank" class="nav-link">
                            <i class="icon-globe"></i> Arrow Toggle
                            <span class="arrow nav-toggle"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-tag"></i> Sample Link 1</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-pencil"></i> Sample Link 1</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="icon-graph"></i> Sample Link 1</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="icon-bar-chart"></i> Item 3 </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>