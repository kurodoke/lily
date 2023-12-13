<!--begin::How It Works Section-->
<div class="z-index-2 mt-10">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Heading-->
        <div class="text-start mb-17">
            <!--begin::Title-->
            <h3 class="fs-1 text-dark mb-5" id="other-game" data-kt-scroll-offset="{default: 100, lg: 150}">Game - Game
                Lainnya</h3>
            <!--end::Title-->
            <!--begin::Text-->
            <div class="fs-5 text-muted fw-bold mb-9">Game lain yang mungkin kamu minat</div>
            <!--end::Text-->
            <div class="row">
                @for ($i = 0; $i < 25; $i++)
                <a href="{{ route('detail-game', '1') }}" class="col-2 ps-2 pb-7 d-flex flex-wrap">
                    <div class="mh-150px mw-150px overflow-hidden rounded">

                        <div class="overlay-wrapper">
                            <img class="w-100"
                                src="{{ asset('storage\game_image\eqsqHX4mak5GCCPowYhHeXBTSrn4SPkW69AvkMHH.webp') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="w-100">
                        <p class="w-100 text-dark" style="overflow-wrap: break-word;">gameppepepepepeekkkkajksdahskjdhakhs</p>
                    </div>
                </a>
                @endfor
            </div>
        </div>
    </div>
</div>
<!--end::How It Works Section-->
