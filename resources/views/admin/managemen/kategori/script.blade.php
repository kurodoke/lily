@section('script')
<script>
    // datatable
    $("#kt_datatable").DataTable();

</script>

<script>
    function edit(e) {
        let id = $(e).data('id');
        let API_URL = "{{ route('api.v1.kategori.show' , '') }}/" + id
        let EDIT_URL = "{{ route('admin.managemen.kategori.update', '') }}/" + id

        $('#kt_modal_edit_form input').not("[name='_token']").attr('disabled', true);
        $('#kt_modal_edit_form #kt_modal_edit_submit').attr('disabled', true);
        $('#kt_modal_edit_form #kt_modal_edit_submit').html('Tunggu');

        $.ajax({
            url: API_URL,
            method: 'GET', 
            success: (res) => {
                $('#kt_modal_edit_form').attr('action', EDIT_URL);
                $('#kt_modal_edit_form input[name="category_name"]').val(res.data.category_name);
                $('#kt_modal_edit_form input').not("[name='_token']").attr('disabled', false);
                $('#kt_modal_edit_form #kt_modal_edit_submit').attr('disabled', false);
                $('#kt_modal_edit_form #kt_modal_edit_submit').html('Edit');
            },
            error: (err) => {

            }
        })
    };

    //delete
    function del(e) {
        let id = $(e).data('id');
        let DELETE_URL = "{{ route('admin.managemen.kategori.destroy', '') }}/" + id

        $('#kt_modal_delete_form').attr('action', DELETE_URL);
    };
</script>


@endsection