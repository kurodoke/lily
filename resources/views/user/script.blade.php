@section('script')
<script>
    // datatable
    $("#kt_datatable").DataTable();

    //delete
    $('.delete-button').on('click', function () {
        let id = $(this).data('id');
        let DELETE_URL = "{{ route('admin.user.destroy', '') }}/" + id

        $('#kt_modal_delete_form').attr('action', DELETE_URL);
    });

</script>

<script>
    const datatable = $("#kt_datatable").DataTable();

    const filterSearch = document.querySelector('[data-kt-filter-datatable="search"]');
    filterSearch.addEventListener('keyup', function(e) {
        datatable.search(e.target.value).draw();
    });
</script>

@endsection