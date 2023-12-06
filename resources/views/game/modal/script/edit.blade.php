<script>
    // data for tags input
    const input__edit_creativity = document.querySelector('#kt_tagify_edit_creativity');
    const input__edit_design = document.querySelector('#kt_tagify_edit_design');
    const input__edit_tags = document.querySelector('#kt_tagify_edit_tag');
    const input__edit_learns = document.querySelector('#kt_tagify_edit_learn');
    const input__edit_ages = document.querySelector('#kt_tagify_edit_age');
</script>

<script>
    // init the edit tagifys

    // tag creativty
    const tag__edit_creativity = new Tagify(input__edit_creativity, {
        ...options,
        whitelist: data_creativity
    });

    tag__edit_creativity.on('add', function(e) {
        if (e.detail.data.name === e.detail.data.value) {
            tag__edit_creativity.removeTags(e.detail.tag);
        }
    });

    // tag design
    const tag__edit_design = new Tagify(input__edit_design, {
        ...options,
        whitelist: data_design
    });
    tag__edit_design.on('add', function(e) {
        if (e.detail.data.name === e.detail.data.value) {
            tag__edit_design.removeTags(e.detail.tag);
        }
    });

    //tag tag
    const tag__edit_tag = new Tagify(input__edit_tags, {
        ...options,
        whitelist: data_tags
    });
    tag__edit_tag.on('add', function(e) {
        if (e.detail.data.name === e.detail.data.value) {
            tag__edit_tag.removeTags(e.detail.tag);
        }
    });

    //tag learn
    const tag__edit_learn = new Tagify(input__edit_learns, {
        ...options,
        whitelist: data_learns
    });
    tag__edit_learn.on('add', function(e) {
        if (e.detail.data.name === e.detail.data.value) {
            tag__edit_learn.removeTags(e.detail.tag);
        }
    });

    //tag age
    const tag__edit_age = new Tagify(input__edit_ages, {
        ...options,
        maxTags: 1,
        whitelist: data_ages
    });
    tag__edit_age.on('add', function(e) {
        if (e.detail.data.name === e.detail.data.value) {
            tag__edit_age.removeTags(e.detail.tag);
        }
    });
</script>


<script>
    //edit
    $('.edit-button').on('click', function() {
        let id = $(this).data('id');
        let API_URL = "{{ route('api.v1.game.show', '') }}/" + id
        let EDIT_URL = "{{ route('admin.game.update', '') }}/" + id

        $('#kt_modal_edit_form #kt_modal_edit_submit').attr('disabled', true);
        $('#kt_modal_edit_form #kt_modal_edit_submit').html('Tunggu');

        $.ajax({
            url: API_URL,
            method: 'GET',
            success: (res) => {
                $('#kt_modal_edit_form').attr('action', EDIT_URL);
                // console.log(res);
                $('#kt_modal_edit_form .image-input').css('background-image',
                    `url({{ asset('storage') }}/${res.data.game.logo_filename})`);

                $('#kt_modal_edit_form input[name="game_name"]').val(res.data.game.name);
                $('#kt_modal_edit_form input[name="game_author"]').val(res.data.game.author);
                $('#kt_modal_edit_form input[name="game_download"]').val(res.data.game.download);
                $('#kt_modal_edit_form input[name="game_size"]').val(res.data.game.size);
                $('#kt_modal_edit_form textarea[name="game_description"]').val(res.data.game
                    .description);

                for (let i = 1; i <= 5; i++) {
                    var input_rating_id = $('#kt_modal_edit_form #kt_rating_edit_input_' + i)
                    if (i <= res.data.game.score) {
                        $(input_rating_id).prop('checked', true);
                    } else {
                        $(input_rating_id).prop('checked', false);
                    }
                }

                tag__edit_age.addTags([{
                    value: res.data.age.id,
                    name: `${res.data.age.age_min} - ${res.data.age.age_max} Tahun`
                }]);

                tag__edit_tag.addTags(
                    res.data.tag.map((data) => {
                        return {
                            value: data.id,
                            name: data.tag_name
                        }
                    })
                );

                tag__edit_design.addTags(
                    res.data.design.map((data) => {
                        return {
                            value: data.id,
                            name: data.design_name
                        }
                    })
                );

                tag__edit_creativity.addTags(
                    res.data.creativity.map((data) => {
                        return {
                            value: data.id,
                            name: data.creativity_name
                        }
                    })
                );

                tag__edit_learn.addTags(
                    res.data.learn.map((data) => {
                        return {
                            value: data.id,
                            name: data.learn_name
                        }
                    })
                );

                $('#kt_modal_edit_form #kt_modal_edit_submit').attr('disabled', false);
                $('#kt_modal_edit_form #kt_modal_edit_submit').html('Edit');
            },
            error: (err) => {}
        });
    });
</script>