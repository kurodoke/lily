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

    @include('game.modal.script.add')
    @include('game.modal.script.detail')
    @include('game.modal.script.edit')
    @include('game.modal.script.delete')
@endsection