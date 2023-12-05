<script>
    // data for tags input
    const input__add_creativity = document.querySelector('#kt_tagify_add_creativity');
    const input__add_design = document.querySelector('#kt_tagify_add_design');
    const input__add_tags = document.querySelector('#kt_tagify_add_tag');
    const input__add_learns = document.querySelector('#kt_tagify_add_learn');
    const input__add_ages = document.querySelector('#kt_tagify_add_age');

</script>

<script>
    // init the add tagifys

    // tag add
    const tag__add_creativity = new Tagify(input__add_creativity, {
        ...options,
        whitelist: data_creativity
    });

    tag__add_creativity.on('add', function(e) {
        if (e.detail.data.name === e.detail.data.value) {
            tag__add_creativity.removeTags(e.detail.tag);
        }
    });

    // tag design
    const tag__add_design = new Tagify(input__add_design, {
        ...options,
        whitelist: data_design
    });
    tag__add_design.on('add', function(e) {
        if (e.detail.data.name === e.detail.data.value) {
            tag__add_design.removeTags(e.detail.tag);
        }
    });

    //tag tag
    const tag__add_tag = new Tagify(input__add_tags, {
        ...options,
        whitelist: data_tags
    });
    tag__add_tag.on('add', function(e) {
        if (e.detail.data.name === e.detail.data.value) {
            tag__add_tag.removeTags(e.detail.tag);
        }
    });

    //tag learn
    const tag__add_learn = new Tagify(input__add_learns, {
        ...options,
        whitelist: data_learns
    });
    tag__add_learn.on('add', function(e) {
        if (e.detail.data.name === e.detail.data.value) {
            tag__add_learn.removeTags(e.detail.tag);
        }
    });

    //tag age
    const tag__add_age = new Tagify(input__add_ages, {
        ...options,
        maxTags: 1,
        whitelist: data_ages
    });
    tag__add_age.on('add', function(e) {
        if (e.detail.data.name === e.detail.data.value) {
            tag__add_age.removeTags(e.detail.tag);
        }
    });
</script>
