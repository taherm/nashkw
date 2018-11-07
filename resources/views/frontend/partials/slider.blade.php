<div class="main-slider">
    <div class="owl-carousel" id="main-slider-{{ app()->getLocale() }}">
        @foreach($sliders as $slider)
            <div class="item slide1">
                <img class="slide-img" src="{{ asset(env('LARGE').$slider->image) }}" alt="{{ $slider->caption }}"
                     alt="{{ $slider->caption_ar .' '. $slider->caption_en }}"/>
                <div class="caption">
                    <div class="container ">
                        <div class="div-table">
                            <div class="div-cell">
                                <div class="caption-content">
                                    <h2 class="caption-title"></h2>
                                    @if($slider->path)
                                        <p class="caption-text">
                                            <a class="btn btn-theme center-block text-center"
                                               href="{{ asset(env('FILES').$slider->path) }}">{{ $slider->caption }}</a>
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
