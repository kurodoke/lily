@section('script')
<script>
    // datatable
    $("#kt_age_datatable").DataTable();

    //edit
    $('.edit-button').on('click', function () {
        let id = $(this).data('id');
        let API_URL = "{{ route('api.v1.umur.show' , '') }}/" + id
        let EDIT_URL = "{{ route('admin.managemen.umur.update', '') }}/" + id

        $('#kt_modal_edit_form input').not("[name='_token']").attr('disabled', true);
        $('#kt_modal_edit_form #kt_modal_edit_submit').attr('disabled', true);
        $('#kt_modal_edit_form #kt_modal_edit_submit').html('Tunggu');

        $.ajax({
            url: API_URL,
            method: 'GET', 
            success: (res) => {
                $('#kt_modal_edit_form').attr('action', EDIT_URL);
                $('#kt_modal_edit_form input[name="age_min"]').val(res.data.age_min);
                $('#kt_modal_edit_form input[name="age_max"]').val(res.data.age_max);
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
        let DELETE_URL = "{{ route('admin.managemen.umur.destroy', '') }}/" + id

        $('#kt_modal_delete_form').attr('action', DELETE_URL);
    });

</script>



@endsection