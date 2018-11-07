<section class="page-section dark">
    <div class="container">
        <h2 class="section-title"><span>{{ $title }}</span></h2>
        <div class="featured-products-carousel">
            <div class="productCarousel owl-carousel">
                @foreach($elements as $element)
                    <div class="widget widget-shop-deals">
                        {{--<a class="btn btn-theme btn-title-more" href="#">See All</a>--}}
                        {{--<h4 class="widget-title"><span>Hot Deals</span></h4>--}}
                        <div class="thumbnail thumbnail-hot-deal no-border no-padding">
                            <div class="media">
                                <a class="media-link" href="{{ route('frontend.product.show', $element->id) }}">
                                    <img src="{{ asset(env('THUMBNAIL').$element->image) }}" alt="{{ $element->name }}"/>
                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                    <div class="countdown-wrapper">
                                        <input type="hidden" name="counter" value="{{ $element->end_sale }}" id="dealCountValue{{ $loop->index }}">
                                        <div id="dealCountdown{{ $loop->index }}" class="defaultCountdown clearfix"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="caption text-center">
                                <h4 class="caption-title"><a href="{{ route('frontend.product.show', $element->id) }}">{{ $element->name }}</a></h4>
                                <div class="price">
                                    <small><ins>{{ $element->convertedSalePrice }}</ins>{{ $currency->symbol }}</small>&nbsp;
                                    <del><small>{{ $element->convertedPrice }} {{ $currency->symbol }}</small></del>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
