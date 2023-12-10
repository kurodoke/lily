@section('script')
    <script>
        const datatable = $("#kt_datatable").DataTable();

        const filterSearch = document.querySelector('[data-kt-filter-datatable="search"]');
        filterSearch.addEventListener('keyup', function(e) {
            datatable.search(e.target.value).draw();
        });
    </script>

    <script>
        //input mask (price)

        new Inputmask("Rp999.999.999", {
            "numericInput": true
        }).mask("#kt_mask_edit_price");
        new Inputmask("Rp999.999.999", {
            "numericInput": true
        }).mask("#kt_mask_add_price");

        $('#kt_select_add_premium').on('change', function(e) {
            if ($(this).val() === "Paid") {
                $('#kt_mask_add_price').val('1000');
                $('#kt_mask_add_price').prop("disabled", false);
            } else {
                $('#kt_mask_add_price').val('');
                $('#kt_mask_add_price').prop("disabled", true);
            }
        });
        $('#kt_select_edit_premium').on('change', function(e) {
            if ($(this).val() === "Paid") {
                $('#kt_mask_edit_price').val('1000');
                $('#kt_mask_edit_price').prop("disabled", false);
            } else {
                $('#kt_mask_edit_price').val('');
                $('#kt_mask_edit_price').prop("disabled", true);
            }
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
        let data_categories = @json($categories->all());

        const options = {
            tagTextProp: 'name',
            enforceWhitelist: true,
            dropdown: {
                maxItems: Infinity,
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

    @include('admin.game.modal.script.add')
    @include('admin.game.modal.script.detail')
    @include('admin.game.modal.script.edit')
    @include('admin.game.modal.script.delete')
@endsection
