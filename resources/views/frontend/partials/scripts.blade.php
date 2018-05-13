
<script src="{{ asset('js/frontend.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        console.log('jquery loaded');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //Fix Carousal click
        $('.owl-item img').on('click', function(){
            $('.owl-item li').removeClass('active');
            $(this).addClass('active');
        });
    });

</script>