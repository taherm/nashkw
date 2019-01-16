<section class="page-section">
    <div class="container">
        <div class="row">
            @foreach($categoriesFeatured as $cat)
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail no-border no-padding category">
                        <div class="media">
                            <a class="media-link" href="#">
                                <img src="{{ asset(env('THUMBNAIL').$cat->image) }}" alt=""/>
                                <div class="caption">
                                    <div class="caption-wrapper div-table">
                                        <div class="caption-inner div-cell">
                                            <div class="caption-title"><span>{{ $cat->name }}</span></div>
                                            <h5 class="caption-title"><span>{{ $cat->caption }}</span></h5>
                                            <div class="items"><span>{{ $cat->products->count() }}</span></div>
                                            <div class="buttons text-center">
                                                <a class="btn btn-default btn-theme-sm"
                                                   href="{{ route('frontend.product.search',['category_id' => $cat->id ]) }}">
                                                    {{ trans('general.show_now') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>