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
        let input__creativity = Array.from(document.querySelectorAll('.kt_tagify_creativity'));
        let input__design = Array.from(document.querySelectorAll('.kt_tagify_design'));
        let input__tags = Array.from(document.querySelectorAll('.kt_tagify_tag'));
        let input__learns = Array.from(document.querySelectorAll('.kt_tagify_learn'));
        let input__ages = Array.from(document.querySelectorAll('.kt_tagify_age'));

        let data_creativity = @json($creativities->all());
        let data_design = @json($design->all());
        let data_tags = @json($tags->all());
        let data_learns = @json($learns->all());
        let data_ages = @json($ages->all());

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
        input__creativity.map((input) => {
            const tag = new Tagify(input, {
                ...options,
                whitelist: data_creativity
            });
            tag.on('add', function(e) {
                if (e.detail.data.name === e.detail.data.value) {
                    tag.removeTags(e.detail.tag);
                }
            })
        });

        input__design.map((input) => {
            const tag = new Tagify(input, {
                ...options,
                whitelist: data_design
            });
            tag.on('add', function(e) {
                if (e.detail.data.name === e.detail.data.value) {
                    tag.removeTags(e.detail.tag);
                }
            })
        });

        input__tags.map((input) => {
            const tag = new Tagify(input, {
                ...options,
                whitelist: data_tags
            });
            tag.on('add', function(e) {
                if (e.detail.data.name === e.detail.data.value) {
                    tag.removeTags(e.detail.tag);
                }
            })
        });

        input__learns.map((input) => {
            const tag = new Tagify(input, {
                ...options,
                whitelist: data_learns
            });
            tag.on('add', function(e) {
                if (e.detail.data.name === e.detail.data.value) {
                    tag.removeTags(e.detail.tag);
                }
            })
        });

        input__ages.map((input) => {
            const tag = new Tagify(input, {
                ...options,
                maxTags: 1,
                whitelist: data_ages
            });
            tag.on('add', function(e) {
                if (e.detail.data.name === e.detail.data.value) {
                    tag.removeTags(e.detail.tag);
                }
            })
        });
    </script>

    @include('game.modal.script.detail')
@endsection