<div class="row mt-10">
    <div class="mb-5">
        <a href="{{ url()->previous() }}" class="btn btn-sm btn-danger">
            <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr074.svg-->
            <span class="svg-icon svg-icon-danger svg-icon-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z"
                        fill="black" />
                </svg></span>
            <!--end::Svg Icon-->
            <span>
                Kembali
            </span>
        </a>
    </div>
    <div class="col-4">

        <div class="">
            <img class="h-100 w-md-auto rounded" style="width: 100%"
                src="{{ asset('storage/' . $game->logo_filename) }}" alt="">
        </div>
    </div>

    <div class="col-8 text-start mt-5">
        <!--begin::title-->
        <h3 class="fs-2hx fw-bolder pe-2" id="detail-game" data-kt-scroll-offset="{default: 100, lg: 150}"><span
                class="text-black">{{ $game->name }}</span></h3>
        <!--end::title-->
        <!--begin::author-->
        <h3 class="fs-3 text-muted pe-2">{{ $game->author }}</h3>
        <!--end::author-->

        <!--begin::rating-->
        <div class="rating mt-5">
            @for ($i = 0; $i < 5; $i++)
                <div class="rating-label me-2 {{ $i < $game->score ? 'checked' : '' }}">
                    <i class="bi bi-star-fill fs-1"></i>
                </div>
            @endfor
        </div>
        <!--end::rating-->


        <div class="row position-relative mt-10">
            <div class="col text-center">
                <span class="fs-3 fw-bold">{{ $game->download }}&pm;</span>
                <p class="fs-5 text-muted">Total Download</p>
            </div>

            <div class="col text-center">
                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr044.svg-->
                <span class="svg-icon svg-icon-dark svg-icon-3"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M21 22H3C2.4 22 2 21.6 2 21C2 20.4 2.4 20 3 20H21C21.6 20 22 20.4 22 21C22 21.6 21.6 22 21 22ZM13 13.4V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V13.4H13Z"
                            fill="black" />
                        <path opacity="0.3" d="M7 13.4H17L12.7 17.7C12.3 18.1 11.7 18.1 11.3 17.7L7 13.4Z"
                            fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->

                <span class="fs-3 fw-bold">{{ $game->size }}Mb</span>
                <p class="fs-5 text-muted">Ukuran Game</p>
            </div>
            <div class="col text-center">
                <span class="fs-3 fw-bold">{{ $game->ages->age_min . ' - ' . $game->ages->age_max }} Tahun</span>
                <p class="fs-5 text-muted">
                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen049.svg-->
                    <span class="svg-icon svg-icon-muted svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3"
                                d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                fill="black" />
                            <path
                                d="M12.0006 11.1542C13.1434 11.1542 14.0777 10.22 14.0777 9.0771C14.0777 7.93424 13.1434 7 12.0006 7C10.8577 7 9.92348 7.93424 9.92348 9.0771C9.92348 10.22 10.8577 11.1542 12.0006 11.1542Z"
                                fill="black" />
                            <path
                                d="M15.5652 13.814C15.5108 13.6779 15.4382 13.551 15.3566 13.4331C14.9393 12.8163 14.2954 12.4081 13.5697 12.3083C13.479 12.2993 13.3793 12.3174 13.3067 12.3718C12.9257 12.653 12.4722 12.7981 12.0006 12.7981C11.5289 12.7981 11.0754 12.653 10.6944 12.3718C10.6219 12.3174 10.5221 12.2902 10.4314 12.3083C9.70578 12.4081 9.05272 12.8163 8.64456 13.4331C8.56293 13.551 8.49036 13.687 8.43595 13.814C8.40875 13.8684 8.41781 13.9319 8.44502 13.9864C8.51759 14.1133 8.60828 14.2403 8.68991 14.3492C8.81689 14.5215 8.95295 14.6757 9.10715 14.8208C9.23413 14.9478 9.37925 15.0657 9.52439 15.1836C10.2409 15.7188 11.1026 15.9999 11.9915 15.9999C12.8804 15.9999 13.7421 15.7188 14.4586 15.1836C14.6038 15.0748 14.7489 14.9478 14.8759 14.8208C15.021 14.6757 15.1661 14.5215 15.2931 14.3492C15.3838 14.2312 15.4655 14.1133 15.538 13.9864C15.5833 13.9319 15.5924 13.8684 15.5652 13.814Z"
                                fill="black" />
                        </svg></span>
                    <!--end::Svg Icon-->
                    Umur Anak
                </p>
            </div>
        </div>
    </div>
    <a href="{{ $game->url }}" target="_blank" rel="noopener noreferrer">
        <div class="btn btn-light-danger mt-10 w-100">
            <span>
                Download Game
            </span>
        </div>
    </a>
</div>
