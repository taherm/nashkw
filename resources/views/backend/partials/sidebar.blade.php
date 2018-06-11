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
            <li class="nav-item {{ activeItem('product') }}">
                <a href="{{ route('backend.product.index')}}" class="nav-link nav-toggle">
                    <i class="fa fa-fw fa-product-hunt"></i>
                    <span class="title">Products</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{ route('backend.product.create') }}" class="nav-link ">
                            <i class="fa fa-fw fa-plus-square"></i>
                            <span class="title">Create New Product</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ activeItem('user') }}">
                <a href="{{ route('backend.user.index')}}" class="nav-link nav-toggle">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="title">Users</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
            </li>


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

            <li class="nav-item {{ activeItem('country') }}">
                <a href="{{ route('backend.country.index') }}" class="nav-link nav-toggle">
                    <i class="fa fa-fw fa-globe"></i>
                    <span class="title">Countries</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{ route('backend.country.index') }}" class="nav-link nav-toggle">
                            <i class="fa fa-fw fa-globe"></i>
                            <span class="title">Countries Control</span>
                            <span class="arrow"></span>
                        </a>
                        {{--<ul class="sub-menu always-open"> --}}
                        {{--@foreach($countries as $country)--}}
                        {{--<li class="nav-item">--}}
                        {{--<a href="{{ route('backend.country.show',$country->id) }}" class="nav-link ">--}}
                        {{--{{ $country->name }}</a>--}}
                        {{--</li>--}}
                        {{--@endforeach--}}
                        {{--</ul>--}}
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('backend.country.create') }}" class="nav-link ">
                            <i class="fa fa-fw fa-plus-circle"></i>
                            <span class="title">Add New Country</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ activeItem('currency') }}">
                <a href="{{ route('backend.currency.index') }}" class="nav-link nav-toggle">
                    <i class="fa fa-fw fa-dollar"></i>
                    <span class="title">Currencies</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{ route('backend.currency.create') }}" class="nav-link nav-toggle">
                            <i class="fa fa-fw fa-plus-circle"></i>
                            <span class="title">Create New Currency</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ activeItem('coupon') }}">
                <a href="{{ route('backend.coupon.index') }}" class="nav-link nav-toggle">
                    <i class="fa fa-fw fa-credit-card"></i>
                    <span class="title">Coupons</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{ route('backend.coupon.create') }}" class="nav-link nav-toggle">
                            <i class="fa fa-fw fa-plus-circle"></i>
                            <span class="title">Create New Coupon</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ activeItem('color') }}">
                <a href="{{ route('backend.color.index') }}" class="nav-link nav-toggle">
                    <i class="fa fa-fw fa-paint-brush"></i>
                    <span class="title">Colors</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{ route('backend.color.create') }}" class="nav-link nav-toggle">
                            <i class="fa fa-fw fa-paint-brush"></i>
                            <span class="title">Create New Color</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item {{ activeItem('size') }}">
                <a href="{{ route('backend.size.index') }}" class="nav-link nav-toggle">
                    <i class="fa fa-fw fa-tags"></i>
                    <span class="title">Sizes</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{ route('backend.size.create') }}" class="nav-link nav-toggle">
                            <i class="fa fa-fw fa-pie-chart"></i>
                            <span class="title">Create New Size</span>
                            <span class="arrow"></span>
                        </a>
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