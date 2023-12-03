@section('script')
    <script>
        const datatable = $("#kt_datatable").DataTable();

        const filterSearch = document.querySelector('[data-kt-filter-datatable="search"]');
        filterSearch.addEventListener('keyup', function(e) {
            datatable.search(e.target.value).draw();
        });
    </script>

    <script>
        let input__creativity = document.querySelector('#kt_tagify_creativity');
        let input__design = document.querySelector('#kt_tagify_design');
        let input__tags = document.querySelector('#kt_tagify_tag');
        let input__learns = document.querySelector('#kt_tagify_learn');

        let data_creativity = @json($creativities->all());
        let data_design = @json($design->all());
        let data_tags = @json($tags->all());
        let data_learns = @json($learns->all());


        const options = {
            enforceWhitelist: true,
            dropdown: {
                enabled: 0,
                closeOnSelect: false,
                searchKeys: ["name"],
            },
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(','),
        }

        new Tagify(input__creativity, {
            ...options, 
            whitelist: data_creativity.map((data) => {
                return data.name
            }),
        });
        new Tagify(input__design, {
            ...options, 
            whitelist: data_design.map((data) => {
                return data.name
            }),
        });
        new Tagify(input__tags, {
            ...options, 
            whitelist: data_tags.map((data) => {
                return data.name
            }),
        });
        new Tagify(input__learns, {
            ...options, 
            whitelist: data_learns.map((data) => {
                return data.name
            }),
        });

    </script>
@endsection
