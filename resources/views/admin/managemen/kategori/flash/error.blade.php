@error('category_name')
    <div class="alert alert-dismissible alert-danger d-flex flex-center">
        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen034.svg-->
        <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none">
                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)"
                    fill="black" />
                <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)"
                    fill="black" />
            </svg></span>
        <!--end::Svg Icon-->

        <div class="d-flex flex-column ps-4">
            <!--begin::Title-->
            <h4 class="mb-1 text-danger">Aksi Gagal</h4>
            <!--end::Title-->

            <!--begin::Content-->
            <span>{{ $message }}</span>
            <!--end::Content-->
        </div>

        <!--begin::Close-->
        <button type="button" class="btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen040.svg-->
            <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)"
                        fill="black" />
                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)"
                        fill="black" />
                </svg></span>
            <!--end::Svg Icon-->
        </button>
        <!--end::Close-->
    </div>
@enderror
