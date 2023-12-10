<script>
    //delete
    $('.delete-button').on('click', function () {
        let id = $(this).data('id');
        let DELETE_URL = "{{ route('admin.game.destroy', '') }}/" + id

        $('#kt_modal_delete_form').attr('action', DELETE_URL);
    });
</script>