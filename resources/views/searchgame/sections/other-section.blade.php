<!--begin::How It Works Section-->
<div class="z-index-2 mt-10">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Heading-->
        <div class="text-start mb-17">
            @if (count($games) != 0)
                <!--begin::Title-->
                <h3 class="fs-1 text-dark mb-5" id="other-game" data-kt-scroll-offset="{default: 100, lg: 150}">Game - Game
                    Lainnya</h3>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="fs-5 text-muted fw-bold mb-9">Game lain yang mungkin kamu suka</div>
                <!--end::Text-->
                <div class="row">
                    @foreach ($games as $game)
                        <a href="{{ route('detail-game', $game->id) }}" class="col-2 ps-2 pb-7 d-flex flex-wrap">
                            <div class="mh-150px mw-150px overflow-hidden rounded">

                                <div class="overlay-wrapper">
                                    <img class="w-100" src="{{ asset('storage/' . $game->logo_filename) }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="w-100">
                                <p class="w-100 text-dark" style="overflow-wrap: break-word;">{{ $game->name }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <div class="row text-center">
                    <hr>
                    <div class="col"></div>
                    <div class="col">
                        <h3 class="fs-3 text-muted mb-3" id="other-game" data-kt-scroll-offset="{default: 100, lg: 150}">
                            Tidak Ada Game Lain
                        </h3>
                        <div class="rounded overflow-hidden">
                            <lottie-player autoplay loop mode="normal" speed="1" class=""
                                src={{ asset('assets/lottie/pigswim.json') }}>
                            </lottie-player>

                        </div>
                        <p class="mt-2 text-black">Jangan sedih coba cari yang lain</p>
                    </div>
                    <div class="col"></div>
                </div>
            @endif
        </div>
    </div>
</div>
<!--end::How It Works Section-->
