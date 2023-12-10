<!--begin::How It Works Section-->
<div class="mb-10 mb-lg-20 z-index-2">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Heading-->
        <div class="text-center mb-17">
            <!--begin::Title-->
            <h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Bagaimana
                Web ini Berkerja</h3>
            <!--end::Title-->
            <!--begin::Text-->
            <div class="fs-5 text-muted fw-bold mb-9">Web ini bekerja dengan me-rekomendasikan Game berdasarkan <br /> hasil survey dari kamu.
            </div>
            <!--end::Text-->
            <div class="row">
                <div class="col"></div>
                <div class="col bg-light rounded-circle">
                    <lottie-player autoplay loop mode="normal" speed="1" class="p-4"
                        src={{ asset('assets/lottie/animal.json') }}>
                    </lottie-player>
                </div>
                <div class="col"></div>
            </div>

        </div>
        <!--end::Heading-->
        <!--begin::Row-->
        <div class="row w-100 gy-10 mb-md-20">
            <!--begin::Col-->
            <div class="col-md-4 px-5">
                <!--begin::Story-->
                <div class="text-center mb-10 mb-md-0">
                    <!--begin::Heading-->
                    <div class="d-flex flex-center mb-5">
                        <!--begin::Badge-->
                        <span class="badge badge-circle badge-light-danger fw-bolder p-5 me-3 fs-3">1</span>
                        <!--end::Badge-->
                        <!--begin::Title-->
                        <div class="fs-5 fs-lg-3 fw-bolder text-dark">Isi Survey</div>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Description-->
                    <div class="fw-bold fs-6 fs-lg-4 text-muted">Pertama, isi survey yang kami berikan
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Story-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-4 px-5">
                <!--begin::Story-->
                <div class="text-center mb-10 mb-md-0">
                    <!--begin::Heading-->
                    <div class="d-flex flex-center mb-5">
                        <!--begin::Badge-->
                        <span class="badge badge-circle badge-light-danger fw-bolder p-5 me-3 fs-3">2</span>
                        <!--end::Badge-->
                        <!--begin::Title-->
                        <div class="fs-5 fs-lg-3 fw-bolder text-dark">Cari Game yang menarik</div>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Description-->
                    <div class="fw-bold fs-6 fs-lg-4 text-muted">Kedua, Kami tampilkan Game-Game sesuai survey kamu sebelumnya, dan pilihlah game yang sesuai minat kamu.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Story-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-4 px-5">
                <!--begin::Story-->
                <div class="text-center mb-10 mb-md-0">
                    <!--begin::Heading-->
                    <div class="d-flex flex-center mb-5">
                        <!--begin::Badge-->
                        <span class="badge badge-circle badge-light-danger fw-bolder p-5 me-3 fs-3">3</span>
                        <!--end::Badge-->
                        <!--begin::Title-->
                        <div class="fs-5 fs-lg-3 fw-bolder text-dark">Simpan Game Pilihanmu</div>
                        <!--end::Title-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Description-->
                    <div class="fw-bold fs-6 fs-lg-4 text-muted">Terakhir, Simpan Game - Game pilihanmu hanya dengan <a class="link link-danger" href="{{ route('login') }}">Login</a> 
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Story-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::How It Works Section-->
