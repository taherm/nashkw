<!-- Header-area start -->
<header>
    <div class="header-area">
        <!-- header-top start -->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        @include('frontend.partials._nav_left')
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img class="img-responsive" style="max-height: 100px;"
                                                               src="{{asset('storage/uploads/images/medium/'.$contact->logo)}}"
                                                               alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        @include('frontend.partials._nav_right')
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top end -->
        <!-- header-bottom start -->
        <div class="header-bottom hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <!-- main-menu start -->
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a class="no-child" href="{{URL('/')}}">{{ trans('general.home') }}</a></li>
                                    @foreach($categories->sortBy('order') as $category)
                                        <li>
                                            <a href="{{ route('frontend.product.search',['category_id' => $category->id]) }}">{{ $category->name }}</a>
                                            <!-- mega menu start -->
                                            @if(count($category->children) > 0)
                                                <div class="mega-menu mega-menu3">
                                                    @foreach($category->children->sortBy('order') as $child)
                                                        <span>
                                                                <a class="mega-headline"
                                                                   href="{{ route('frontend.product.search',['category_id' => $child->id]) }}">{{ $child->name }}</a>
                                                            @if(count($child->children) > 0)
                                                                @foreach($child->children->sortBy('order') as $subChild)
                                                                    <a href="{{ route('frontend.product.search',['category_id' => $subChild->id]) }}">{{ $subChild->name }}</a>
                                                                @endforeach
                                                            @endif
                                                            </span>

                                                    @endforeach
                                                </div>
                                            @endif
                                        </li>
                                    @endforeach
                                    @foreach($pages->where('on_menu_desktop', true) as $page)
                                        <li>
                                            <a class="no-child"
                                               href="{{ $page->url }}">{{ $page->slug }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                        <!-- main-menu end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header-bottom end -->
    </div>
    <!-- mobile-menu-area start -->
    @include('frontend.partials.nav')
    </div>
    <!-- mobile-menu-area end -->
</header>
<!-- header area end -->