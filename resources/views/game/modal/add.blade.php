       <!--begin::Modal - New Target-->
       <div class="modal fade" id="kt_modal_add" tabindex="-1" aria-hidden="true">
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
                       <form id="kt_modal_add_form" class="form" action="{{ route('admin.game.store') }}"
                           method="POST">
                           @csrf
                           <!--begin::Heading-->
                           <div class="mb-13 text-center">
                               <!--begin::Title-->
                               <h1 class="mb-3">Tambah Game</h1>
                               <!--end::Title-->
                               <!--begin::Description-->
                               <div class="text-muted fw-bold fs-5 mb-3">Tambahkan Game untuk anak - anak
                               </div>
                               <!--end::Description-->
                           </div>
                           <!--end::Heading-->
                           <div class="row">
                               <!--begin::Input group-->
                               <div class="col-md-12 d-flex flex-column mb-8 fv-row">
                                   <!--begin::Image input-->
                                   <div class="image-input image-input-empty w-125px h-125px m-auto"
                                       data-kt-image-input="true"
                                       style="background-image: url(/assets/media/avatars/blank.png)">
                                       <!--begin::Image preview wrapper-->
                                       <div class="image-input-wrapper w-125px h-125px"></div>
                                       <!--end::Image preview wrapper-->

                                       <!--begin::Edit button-->
                                       <label
                                           class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                           data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                           data-bs-dismiss="click" title="Change avatar">
                                           <i class="bi bi-pencil-fill fs-7"></i>

                                           <!--begin::Inputs-->
                                           <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                           <input type="hidden" name="avatar_remove" />
                                           <!--end::Inputs-->
                                       </label>
                                       <!--end::Edit button-->

                                       <!--begin::Cancel button-->
                                       <span
                                           class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                           data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                           data-bs-dismiss="click" title="Cancel avatar">
                                           <i class="bi bi-x fs-2"></i>
                                       </span>
                                       <!--end::Cancel button-->

                                       <!--begin::Remove button-->
                                       <span
                                           class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                           data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                           data-bs-dismiss="click" title="Remove avatar">
                                           <i class="bi bi-x fs-2"></i>
                                       </span>
                                       <!--end::Remove button-->
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
                                   <input type="text" class="form-control form-control-solid"
                                       placeholder="Masukkan Nama Author" name="game_author" />
                               </div>
                               <!--end::Input group-->

                               <!--begin::Input group-->
                               <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                   <!--begin::Label-->
                                   <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                       <span class="required">Ukuran</span>

                                   </label>
                                   <!--end::Label-->
                                   <input type="text" class="form-control form-control-solid"
                                       placeholder="Masukkan Nama Author" name="game_author" />
                               </div>
                               <!--end::Input group-->

                               <!--begin::Input group-->
                               <div class="col-md-12 d-flex flex-column mb-8 fv-row">
                                   <!--begin::Label-->
                                   <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                       <span>Deskripsi Game</span>

                                   </label>
                                   <!--end::Label-->
                                   <textarea class="form-control form-control-solid" rows="3" name="game_description"
                                       placeholder="Masukkan Deskripsi Game"></textarea>
                               </div>
                               <!--end::Input group-->

                               <!--begin::Input group-->
                               <div class="col-md-12 d-flex flex-column mb-8 fv-row">
                                   <!--begin::Label-->
                                   <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                       <span class="">Umur</span>

                                   </label>
                                   <!--end::Label-->
                                   <input type="text" class="form-control form-control-solid"
                                       placeholder="Masukkan Umur Game" name="game_name" />
                               </div>
                               <!--end::Input group-->

                               <!--begin::Input group-->
                               <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                   <!--begin::Label-->
                                   <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                       <span class="">Tag</span>

                                   </label>
                                   <!--end::Label-->
                                   <input type="text" class="form-control form-control-solid"
                                       placeholder="Masukkan Nama Game" name="game_name" />
                               </div>
                               <!--end::Input group-->
                               <!--begin::Input group-->
                               <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                   <!--begin::Label-->
                                   <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                       <span class="">Manfaat Game</span>

                                   </label>
                                   <!--end::Label-->
                                   <input type="text" class="form-control form-control-solid"
                                       placeholder="Masukkan Nama Game" name="game_name" />
                               </div>
                               <!--end::Input group-->
                               <!--begin::Input group-->
                               <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                   <!--begin::Label-->
                                   <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                       <span class="">Kreatifitas Untuk Anak</span>

                                   </label>
                                   <!--end::Label-->
                                   <input type="text" class="form-control form-control-solid"
                                       placeholder="Masukkan Nama Game" name="game_name" />
                               </div>
                               <!--end::Input group-->
                               <!--begin::Input group-->
                               <div class="col-md-6 d-flex flex-column mb-8 fv-row">
                                   <!--begin::Label-->
                                   <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                       <span class="">Pembelajaran Dalam Game</span>

                                   </label>
                                   <!--end::Label-->
                                   <input type="text" class="form-control form-control-solid"
                                       placeholder="Masukkan Nama Game" name="game_name" />
                               </div>
                               <!--end::Input group-->
                           </div>

                           <!--begin::Actions-->
                           <div class="text-center">
                               <button type="reset" id="kt_modal_add_cancel" data-bs-dismiss="modal"
                                   class="btn btn-light me-3">Batal</button>
                               <button type="submit" id="kt_modal_add_submit" class="btn btn-warning">
                                   <span class="indicator-label">Tambah</span>
                               </button>
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
