@php
    $maxWords = 25; // Jumlah maksimal kata yang ingin ditampilkan

    $limitItems = 4;

    $minScore = 4;
@endphp

@if (count($games) != 0)
    <!--begin::How It Works Section-->
    <div class="mb-10 mb-lg-20 z-index-2 mt-10">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Heading-->
            <div class="text-center mb-17">
                <!--begin::Title-->
                <h3 class="fs-2hx text-dark mb-5" id="best-game" data-kt-scroll-offset="{default: 100, lg: 150}">Game yang
                    paling terbaik</h3>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="fs-4 text-muted fw-bold mb-9">Game - Game yang paling kami rekomendasikan berdasarkan hasil
                    survey kamu
                </div>
                <!--end::Text-->

                <div id="kt_carousel_top_game" class="carousel carousel-custom slide" data-bs-ride="carousel"
                    data-bs-interval="8000">
                    <!--begin::Heading-->
                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                        <!--begin::Label-->
                        <span class="fs-4 fw-bolder pe-2"></span>
                        <!--end::Label-->

                        <!--begin::Carousel Indicators-->
                        <ol class="p-0 m-0 carousel-indicators carousel-indicators-dots">
                            @foreach ($games as $game)
                                @if ($loop->iteration == $limitItems || $game->score < $minScore)
                                    @break
                                @endif
                            <li data-bs-target="#kt_carousel_top_game" data-bs-slide-to="{{ $loop->iteration - 1 }}"
                                class="ms-1 {{ $loop->iteration - 1 == 0 ? 'active' : '' }}">
                            </li>
                            @endforeach
                        </ol>
                        <!--end::Carousel Indicators-->
                    </div>
                    <!--end::Heading-->

                <!--begin::Carousel-->
                <div class="carousel-inner pt-8">
                    @foreach ($games as $game)
                        @php
                            // Menghapus tag HTML dan membatasi jumlah kata
                            $strippedString = strip_tags($game->description); // Menghapus tag HTML
                            $wordArray = explode(' ', $strippedString); // Memecah string menjadi array kata
                            $limitedWords = implode(' ', array_slice($wordArray, 0, $maxWords)); // Mengambil sejumlah kata sesuai dengan batas

                        @endphp
                        @if ($loop->iteration == $limitItems || $game->score < $minScore)
                            @break
                        @endif
                        <!--begin::Item-->
                        <div class="carousel-item {{ $loop->iteration - 1 == 0 ? 'active' : '' }}">
                            <div class="row">
                                <div class="col-3">
                                    <a href="{{ route('detail-game', $game->id) }}">
                                        <img class="rounded w-100"
                                            src="{{ asset('storage/' . $game->logo_filename) }}" alt="">
                                    </a>
                                </div>

                                <div class="col-9 text-start position-relative">
                                    <!--begin::title-->
                                    <h3 class="fs-1 fw-bolder pe-2"><a class="text-black"
                                            href="{{ route('detail-game', $game->id) }}">{{ $game->name }}@if ($game->premium == "Paid")
                                                <span class="text-danger fs-8">Berbayar</span>
                                            @endif</a>
                                    </h3>
                                    <!--end::title-->
                                    <!--begin::author-->
                                    <h3 class="fs-3 text-muted pe-2">{{ $game->author }}</h3>
                                    <!--end::author-->
                                    <!--begin::description-->
                                    <p class="fs-5 text-muted pe-2">{{ $limitedWords . '...' }}
                                    </p>
                                    <!--end::description-->

                                    <!--begin::tag-->
                                    <div
                                        class="d-flex align-items-center flex-wrap position-absolute bottom-0 start-0 p-5 mw-500px">
                                        @foreach ($game->categories as $category)
                                            <div class="tag me-2 bg-info rounded pt-1 pb-1 ps-2 pe-2 mt-2">
                                                <span
                                                    class="fs-7 fw-bold text-white">{{ $category->category_name }}</span>
                                            </div>
                                        @endforeach
                                        @foreach ($game->tags as $tag)
                                            <div class="tag me-2 bg-info rounded pt-1 pb-1 ps-2 pe-2 mt-2">
                                                <span class="fs-7 fw-bold text-white">{{ $tag->tag_name }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!--end::tag-->

                                    <!--begin::rating-->
                                    <div class="rating position-absolute bottom-0 end-0 p-5">
                                        @for ($i = 0; $i < 5; $i++)
                                            <div
                                                class="rating-label me-2 {{ $i < $game->score ? 'checked' : '' }}">
                                                <i class="bi bi-star-fill fs-3"></i>
                                            </div>
                                        @endfor
                                    </div>
                                    <!--end::rating-->
                                </div>

                            </div>
                        </div>
                        <!--end::Item-->
                        @php
                            $games->shift();
                        @endphp
                    @endforeach
                </div>
                <!--end::Carousel-->
            </div>
            <!--end::Heading-->
        </div>
        <!--end::Container-->
    </div>
</div>
<!--end::How It Works Section-->
@endif
