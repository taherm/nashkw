<!-- Pagination -->
<div class="pagination-wrapper">
    <ul class="pagination">
        {{--<li class="disabled"><a href="#"><i--}}
                        {{--class="fa fa-angle-double-left"></i>--}}
                {{--Previous</a>--}}
        {{--</li>--}}
        {{--<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a>--}}
        {{--</li>--}}
        {{--{{ $elements->appends($_GET)->links() }}--}}
        {{--<li><a href="#">2</a></li>--}}
        {{--<li><a href="#">3</a></li>--}}
        {{--<li><a href="#">4</a></li>--}}
        {{--<li><a href="#">Next <i--}}
                        {{--class="fa fa-angle-double-right"></i></a>--}}
        {{--</li>--}}
        {{ $elements->appends($_GET)->links() }}
    </ul>
</div>
<!-- /Pagination -->

