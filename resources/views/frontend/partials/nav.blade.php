<div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12 hidden-lg hidden-md">
                <nav id="dropdown">
                    <ul>
                        <li><a href="{{ route('home')  }}">home</a></li>
                        @foreach($categories->sortBy('order') as $category)
                            <li>
                                <a href="{{ route('frontend.product.search',['category_id' => $category->id]) }}">{{ $category->name }}</a>
                                <!-- mega menu start -->
                                @if(count($category->children) > 0)
                                    <ul>
                                        @foreach($category->children->sortBy('order') as $child)
                                            <li>
                                                <a class="mega-headline"
                                                   href="{{ route('frontend.product.search',['category_id' => $child->id]) }}">{{ $child->name }}</a>
                                                @if(count($child->children) > 0)
                                                    <ul>
                                                        @foreach($child->children->sortBy('order') as $subChild)
                                                            <li>
                                                                <a href="{{ route('frontend.product.search',['cateogry_id' => $subChild->id]) }}">{{ $subChild->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>