@section('script')
<script>
    // datatable
    $("#kt_datatable").DataTable();

    //edit
    $('.edit-button').on('click', function () {
        let id = $(this).data('id');
        let API_URL = "{{ route('api.v1.pembelajaran.show' , '') }}/" + id
        let EDIT_URL = "{{ route('admin.managemen.pembelajaran.update', '') }}/" + id

        $('#kt_modal_edit_form input').not("[name='_token']").attr('disabled', true);
        $('#kt_modal_edit_form #kt_modal_edit_submit').attr('disabled', true);
        $('#kt_modal_edit_form #kt_modal_edit_submit').html('Tunggu');

        $.ajax({
            url: API_URL,
            method: 'GET', 
            success: (res) => {
                $('#kt_modal_edit_form').attr('action', EDIT_URL);
                $('#kt_modal_edit_form input[name="learn_name"]').val(res.data.learn_name);
                $('#kt_modal_edit_form input').not("[name='_token']").attr('disabled', false);
                $('#kt_modal_edit_form #kt_modal_edit_submit').attr('disabled', false);
                $('#kt_modal_edit_form #kt_modal_edit_submit').html('Edit');
            },
            error: (err) => {

            }
        })
    });

    //delete
    $('.delete-button').on('click', function () {
        let id = $(this).data('id');
        let DELETE_URL = "{{ route('admin.managemen.pembelajaran.destroy', '') }}/" + id

        $('#kt_modal_delete_form').attr('action', DELETE_URL);
    });

</script>



@endsection