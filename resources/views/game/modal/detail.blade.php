       <!--begin::Modal - New Target-->
       <div class="modal fade" id="kt_modal_detail" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kt_modal_detail_form" class="form" action="#"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Detail Game</h1>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="text-muted fw-bold fs-5 mb-3">Menampilkan Informasi dari Game
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                        <div class="row">
                            <!--begin::Input group-->
                            <div class="col-md-12 d-flex flex-column mb-8 fv-row">
                                <!--begin::Image input-->
                                <div class="image-input image-input-empty w-125px h-125px m-auto bg-secondary"
                                    data-kt-image-input="true"
                                    style="background-image: url({{ asset('assets/media/icons/duotune/files/fil010.svg') }});">
                                    <!--begin::Image preview wrapper-->
                                        <div class="image-input-wrapper w-125px h-125px"></div>
                                    <!--end::Image preview wrapper-->
                                </div>
                                <!--end::Image input-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="col-md-12 d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Game</span>

                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid"
                                    placeholder="Masukkan Nama Game" name="game_name" />
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="col-md-12 d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Nama Author</span>

                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid"
                                    placeholder="Masukkan Nama Author" name="game_author" />
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Download</span>

                                </label>
                                <!--end::Label-->
                                <input type="number" class="form-control form-control-solid"
                                    placeholder="Masukkan Total Download" name="game_download" autocomplete="off"/>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Ukuran</span>

                                </label>
                                <!--end::Label-->
                                <input type="number" class="form-control form-control-solid"
                                    placeholder="Masukkan Ukuran Game (MB)" name="game_size" autocomplete="off" />
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="col-md-12 d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Deskripsi Game</span>

                                </label>
                                <!--end::Label-->
                                <textarea class="form-control form-control-solid" rows="3" name="game_description"
                                    placeholder="Masukkan Deskripsi Game"></textarea>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Umur</span>

                                </label>
                                <!--end::Label-->
                                <input type="number" class="form-control form-control-solid overflow-hidden "
                                    placeholder="Masukkan Umur Game" name="game_age" id="kt_tagify_detail_age"/>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Score</span>
                                </label>
                                <div class="rating">

                                    <!--begin::Star 1-->
                                    <label class="rating-label me-3" for="kt_rating_detail_input_1">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </label>
                                    <input class="rating-input" name="game_rating" value="1" type="radio"
                                        id="kt_rating_detail_input_1" />
                                    <!--end::Star 1-->

                                    <!--begin::Star 2-->
                                    <label class="rating-label me-3" for="kt_rating_detail_input_2">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </label>
                                    <input class="rating-input" name="game_rating" value="2" type="radio"
                                        id="kt_rating_detail_input_2" />
                                    <!--end::Star 2-->

                                    <!--begin::Star 3-->
                                    <label class="rating-label me-3" for="kt_rating_detail_input_3">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </label>
                                    <input class="rating-input" name="game_rating" value="3" type="radio"
                                        id="kt_rating_detail_input_3" />
                                    <!--end::Star 3-->

                                    <!--begin::Star 4-->
                                    <label class="rating-label me-3" for="kt_rating_detail_input_4">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </label>
                                    <input class="rating-input" name="game_rating" value="4" type="radio"
                                        id="kt_rating_detail_input_4" />
                                    <!--end::Star 4-->

                                    <!--begin::Star 5-->
                                    <label class="rating-label me-3" for="kt_rating_detail_input_5">
                                        <i class="bi bi-star-fill fs-5"></i>
                                    </label>
                                    <input class="rating-input" name="game_rating" value="5" type="radio"
                                        id="kt_rating_detail_input_5" />
                                    <!--end::Star 5-->
                                </div>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="">Tag</span>

                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid overflow-hidden "
                                    placeholder="Berikan Tag Pada Game" name="game_tag" id="kt_tagify_detail_tag" />
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="">Design Game</span>

                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid overflow-hidden "
                                    placeholder="Masukkan Design dari Game" name="game_design"
                                    id="kt_tagify_detail_design" />
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="">Kreatifitas Untuk Anak</span>

                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid overflow-hidden "
                                    placeholder="Masukkan Kreativitas Anak" name="game_creativity"
                                    id="kt_tagify_detail_creativity" />
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="">Pembelajaran Dalam Game</span>

                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid overflow-hidden "
                                    placeholder="Masukkan Hasil Pembelajaran" name="game_learn"
                                    id="kt_tagify_detail_learn" />
                            </div>
                            <!--end::Input group-->
                        </div>

                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" id="kt_modal_add_cancel" data-bs-dismiss="modal"
                                class="btn btn-warning">Keluar</button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - New Target-->
