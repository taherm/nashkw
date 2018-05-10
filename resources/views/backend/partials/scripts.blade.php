<script src="{{ mix('js/backend.js') }}"></script>
<script src="{{ mix('js/backend-custom.js') }}"></script>
<script type="application/javascript">
    console.log('from scripts blade outsside');
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
    ]); ?>
    $(document).ready(function () {
       console.log('from scripts.blade');
        $('.demo').minicolors();
    });
</script>
