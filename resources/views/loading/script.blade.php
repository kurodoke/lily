<script>
    $(document).ready(function() {
        setTimeout(() => {
            $('.loading').addClass('animated')
            setTimeout(() => {
                $('.loading').hide()
            }, 1000)
        }, 1000);
    });
</script>