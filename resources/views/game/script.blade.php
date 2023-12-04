@section('script')
    <script>
        const datatable = $("#kt_datatable").DataTable();

        const filterSearch = document.querySelector('[data-kt-filter-datatable="search"]');
        filterSearch.addEventListener('keyup', function(e) {
            datatable.search(e.target.value).draw();
        });
    </script>

    <script>
        // templates for the tagify
        function tagtemplate(tagData) {
            return `<tag title='${tagData.name}' contenteditable='false' spellcheck="false"
                    class='tagify__tag ${tagData.class ? tagData.class : ""}' ${this.getAttributes(tagData)}>
                        <x title='remove tag' class='tagify__tag__removeBtn'></x>
                        <div class="d-flex align-items-center">
                            <span class='tagify__tag-text'>${tagData.name}</span>
                        </div>
                    </tag>`
        }

        function dropdowntemplate(tagData) {
            return `<div class='tagify__dropdown__item ${tagData.class ? tagData.class : ""}'>
                        <span>${tagData.name}</span>
                    </div>`
        }
    </script>


    <script>
        // data for tags input
        let input__creativity = document.querySelector('#kt_tagify_creativity');
        let input__design = document.querySelector('#kt_tagify_design');
        let input__tags = document.querySelector('#kt_tagify_tag');
        let input__learns = document.querySelector('#kt_tagify_learn');

        let data_creativity = @json($creativities->all());
        let data_design = @json($design->all());
        let data_tags = @json($tags->all());
        let data_learns = @json($learns->all());

        const options = {
            tagTextProp: 'name',
            enforceWhitelist: true,
            dropdown: {
                enabled: 0,
                closeOnSelect: false,
                searchKeys: ["name"],
            },
            templates: {
                tag: tagtemplate,
                dropdownItem: dropdowntemplate,

            },
            originalInputValueFormat: valuesArr => valuesArr.map(item => item.value).join(','),
        }
    </script>

    <script>
        // init all the tags
        const tag__creativity = new Tagify(input__creativity, {
            ...options,
            whitelist: data_creativity
        });
        tag__creativity.on('add', function(e) {
            if (e.detail.data.name === e.detail.data.value) {
                tag__creativity.removeTags(e.detail.tag);
            }
        })

        const tag__design = new Tagify(input__design, {
            ...options,
            whitelist: data_design
        });
        tag__design.on('add', function(e) {
            if (e.detail.data.name === e.detail.data.value) {
                tag__design.removeTags(e.detail.tag);
            }
        })

        const tag__tags = new Tagify(input__tags, {
            ...options,
            whitelist: data_tags
        });
        tag__tags.on('add', function(e) {
            if (e.detail.data.name === e.detail.data.value) {
                tag__tags.removeTags(e.detail.tag);
            }
        })

        const tag_learns = new Tagify(input__learns, {
            ...options,
            whitelist: data_learns
        });
        tag_learns.on('add', function(e) {
            if (e.detail.data.name === e.detail.data.value) {
                tag_learns.removeTags(e.detail.tag);
            }
        })
    </script>
@endsection
