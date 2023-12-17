<script>
    // data for tags input
    const input__detail_creativity = document.querySelector('#kt_tagify_detail_creativity');
    const input__detail_design = document.querySelector('#kt_tagify_detail_design');
    const input__detail_tags = document.querySelector('#kt_tagify_detail_tag');
    const input__detail_learns = document.querySelector('#kt_tagify_detail_learn');
    const input__detail_ages = document.querySelector('#kt_tagify_detail_age');
    const input__detail_categories = document.querySelector('#kt_tagify_detail_category');
</script>

<script>
    // init the detail tagifys

    // tag detail
    const tag__detail_creativity = new Tagify(input__detail_creativity, {
        ...options,
        whitelist: data_creativity
    });

    tag__detail_creativity.on('add', function(e) {
        if (e.detail.data.name === e.detail.data.value) {
            tag__detail_creativity.removeTags(e.detail.tag);
        }
    });

    // tag design
    const tag__detail_design = new Tagify(input__detail_design, {
        ...options,
        whitelist: data_design
    });
    tag__detail_design.on('add', function(e) {
        if (e.detail.data.name === e.detail.data.value) {
            tag__detail_design.removeTags(e.detail.tag);
        }
    });

    //tag tag
    const tag__detail_tag = new Tagify(input__detail_tags, {
        ...options,
        whitelist: data_tags
    });
    tag__detail_tag.on('add', function(e) {
        if (e.detail.data.name === e.detail.data.value) {
            tag__detail_tag.removeTags(e.detail.tag);
        }
    });

    //tag learn
    const tag__detail_learn = new Tagify(input__detail_learns, {
        ...options,
        whitelist: data_learns
    });
    tag__detail_learn.on('add', function(e) {
        if (e.detail.data.name === e.detail.data.value) {
            tag__detail_learn.removeTags(e.detail.tag);
        }
    });

    //tag age
    const tag__detail_age = new Tagify(input__detail_ages, {
        ...options,
        whitelist: data_ages
    });
    tag__detail_age.on('add', function(e) {
        if (e.detail.data.name === e.detail.data.value) {
            tag__detail_age.removeTags(e.detail.tag);
        }
    });

    //tag category
    const tag__detail_category = new Tagify(input__detail_categories, {
        ...options,
        whitelist: data_categories
    });
    tag__detail_category.on('add', function(e) {
        if (e.detail.data.name === e.detail.data.value) {
            tag__detail_category.removeTags(e.detail.tag);
        }
    });
</script>


<script>
    //detail
    $('.detail-button').on('click', function() {
        let id = $(this).data('id');
        let API_URL = "{{ route('api.v1.game.show', '') }}/" + id

        tag__detail_creativity.removeAllTags();
        tag__detail_design.removeAllTags();
        tag__detail_tag.removeAllTags();
        tag__detail_learn.removeAllTags();
        tag__detail_age.removeAllTags();
        tag__detail_category.removeAllTags();

        $.ajax({
            url: API_URL,
            method: 'GET',
            success: (res) => {

                // console.log(res);
                $('#kt_modal_detail_form .image-input').css('background-image',
                    `url({{ asset('storage') }}/${res.data.game.logo_filename})`);

                $('#kt_modal_detail_form input[name="game_name"]').val(res.data.game.name);
                $('#kt_modal_detail_form input[name="game_author"]').val(res.data.game.author);
                $('#kt_modal_detail_form input[name="game_download"]').val(res.data.game.download);
                $('#kt_modal_detail_form input[name="game_size"]').val(res.data.game.size);
                $('#kt_modal_detail_form input[name="game_url"]').val(res.data.game.url);
                $('#kt_modal_detail_form select[name="game_premium"]').val(res.data.game.premium).trigger('change');
                $('#kt_modal_detail_form input[name="game_price"]').val((res.data.game.price === null) ? "" : `Rp${res.data.game.price.toLocaleString('id-ID')}`);
                $('#kt_modal_detail_form textarea[name="game_description"]').val(res.data.game
                    .description);

                for (let i = 1; i <= 5; i++) {
                    var input_rating_id = $('#kt_modal_detail_form #kt_rating_detail_input_' + i)
                    if (i <= res.data.game.score) {
                        $(input_rating_id).prop('checked', true);
                    } else {
                        $(input_rating_id).prop('checked', false);
                    }
                }

                tag__detail_age.addTags(
                    res.data.age.map((data) => {
                        return {
                            value: data.id,
                            name: `${data.age_min} - ${data.age_max} Tahun`
                        }
                    })
                );

                tag__detail_tag.addTags(
                    res.data.tag.map((data) => {
                        return {
                            value: data.id,
                            name: data.tag_name
                        }
                    })
                );

                tag__detail_design.addTags(
                    res.data.design.map((data) => {
                        return {
                            value: data.id,
                            name: data.design_name
                        }
                    })
                );

                tag__detail_creativity.addTags(
                    res.data.creativity.map((data) => {
                        return {
                            value: data.id,
                            name: data.creativity_name
                        }
                    })
                );

                tag__detail_learn.addTags(
                    res.data.learn.map((data) => {
                        return {
                            value: data.id,
                            name: data.learn_name
                        }
                    })
                );

                tag__detail_category.addTags(
                    res.data.category.map((data) => {
                        return {
                            value: data.id,
                            name: data.category_name
                        }
                    })
                );

            },
            error: (err) => {}
        });
    });
</script>
