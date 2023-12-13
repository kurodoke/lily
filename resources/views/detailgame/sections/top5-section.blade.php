<!--begin::How It Works Section-->
<div class="mb-10 mb-lg-20 z-index-2 mt-10">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Heading-->
        <div class="text-center mb-17">
            <div id="kt_carousel_top_game" class="carousel carousel-custom slide" data-bs-ride="carousel"
                data-bs-interval="8000">
                <!--begin::Heading-->
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                    <!--begin::Label-->
                    <span class="fs-4 fw-bolder pe-2"></span>
                    <!--end::Label-->

                    <!--begin::Carousel Indicators-->
                    <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                        <li data-bs-target="#kt_carousel_top_game" data-bs-slide-to="0" class="ms-1 active"></li>
                        <li data-bs-target="#kt_carousel_top_game" data-bs-slide-to="1" class="ms-1"></li>
                        <li data-bs-target="#kt_carousel_top_game" data-bs-slide-to="2" class="ms-1"></li>
                    </ol>
                    <!--end::Carousel Indicators-->
                </div>
                <!--end::Heading-->

                <!--begin::Carousel-->
                <div class="carousel-inner pt-8">
                    <!--begin::Item-->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-4">
                                <a href="{{ route('detail-game', '1') }}">
                                    <img class="w-100"
                                        src="{{ asset('storage\game_image\mi0pU4YSGkbBLClNjn4MNQMNPtikGYM51WrdYNmB.webp') }}"
                                        alt="">
                                </a>
                            </div>

                            <div class="col-8 text-start position-relative">
                                <!--begin::title-->
                                <h3 class="fs-1 fw-bolder pe-2"><a class="text-black" href="{{ route('detail-game', '1') }}">Pokemon Go</a></h3>
                                <!--end::title-->
                                <!--begin::author-->
                                <h3 class="fs-3 text-muted pe-2">Niantic inc.</h3>
                                <!--end::author-->
                                <!--begin::description-->
                                <p class="fs-5 text-muted pe-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Temporibus expedita distinctio
                                    minus ipsam maiores quia nihil amet laboriosam inventore sequi iste dolore deleniti,
                                    ducimus, et repellat obcaecati nostrum aspernatur labore!
                                </p>
                                <!--end::description-->

                                <!--begin::tag-->
                                <div
                                    class="d-flex align-items-center flex-wrap position-absolute bottom-0 start-0 p-5 mw-500px">
                                    @for ($i = 0; $i < 10; $i++)
                                        <div class="tag me-2 bg-info rounded pb-1 ps-2 pe-2 mt-2">
                                            <span class="fs-9 fw-bold text-white">Adventure</span>
                                        </div>
                                    @endfor
                                </div>
                                <!--end::tag-->


                                <!--begin::rating-->
                                <div class="rating position-absolute bottom-0 end-0 p-5">
                                    @for ($i = 0; $i < 5; $i++)
                                        <div class="rating-label me-2 checked">
                                            <i class="bi bi-star-fill fs-3"></i>
                                        </div>
                                    @endfor
                                </div>
                                <!--end::rating-->
                            </div>

                        </div>
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="carousel-item">
                        pler2
                    </div>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <div class="carousel-item">
                        pler3
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Carousel-->
            </div>
            <!--end::Heading-->
        </div>
        <!--end::Container-->
    </div>
</div>
<!--end::How It Works Section-->
