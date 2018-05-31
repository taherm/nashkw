<script src="{{ mix('js/frontend.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        console.log('jquery loaded');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>
@if(app()->isLocale('ar'))
    <script src="{{ mix('js/frontend-custom-ar.js') }}"></script>
@endif