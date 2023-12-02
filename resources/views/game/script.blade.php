@section('script')

<script>
    const datatable = $("#kt_datatable").DataTable();

    const filterSearch = document.querySelector('[data-kt-filter-datatable="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            datatable.search(e.target.value).draw();
    });

</script>

@endsection
