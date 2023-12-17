<div class="row mt-10 mb-10">

    <div class="col-12 title-wrapper">
        <h1 class="fs-1 fw-bolder text-dark" id="description" data-kt-scroll-offset="{default: 100, lg: 150}">Tentang
            {{ $game->name }}</h1>
    </div>

    <div class="col-12 description-wrapper">
        <p class="fs-5 text-muted" style="white-space: break-spaces;">
            {{ $game->description }}
        </p>
    </div>

    <div class="col-12 tag-wrapper mt-5">
        <!--begin::tag-->
        <div class="d-flex align-items-center w-100 flex-wrap">
            @foreach ($game->categories as $category)
                <div class="tag me-2 bg-info rounded pt-1 pb-1 ps-2 pe-2 mt-2">
                    <span class="fs-7 fw-bold text-white">{{ $category->category_name }}</span>
                </div>
            @endforeach
            @foreach ($game->tags as $tag)
                <div class="tag me-2 bg-info rounded pt-1 pb-1 ps-2 pe-2 mt-2">
                    <span class="fs-7 fw-bold text-white">{{ $tag->tag_name }}</span>
                </div>
            @endforeach
        </div>
        <!--end::tag-->
    </div>


    <div class="col-12 row mt-10">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card border">
                <div class="card-body">
                    <div class="fs-3 fw-bolder" id="other-informaton" data-kt-scroll-offset="{default: 100, lg: 150}">
                        <p>
                            Informasi Tambahan {{ $game->name }}
                        </p>
                    </div>
                    <div>
                        <ul>
                            @if (count($game->designs) != 0)
                                <li>
                                    <p class=" fs-5 m-0"> Game ini dibuat berdasarkan</p>
                                    <ol class="breadcrumb breadcrumb-dot text-info fs-7 mb-3">
                                        @foreach ($game->designs as $design)
                                            <li class="breadcrumb-item pe-3">{{ $design->design_name }}</li>
                                        @endforeach
                                    </ol>
                                </li>
                            @endif
                            @if (count($game->learns) != 0)
                                <li>
                                    <p class=" fs-5 m-0">Game ini Memberikan pengetahuan tentang</p>
                                    <ol class="breadcrumb breadcrumb-dot text-info fs-7 mb-3">
                                        @foreach ($game->learns as $learn)
                                            <li class="breadcrumb-item pe-3">{{ $learn->learn_name }}</li>
                                        @endforeach
                                    </ol>
                                </li>
                            @endif

                            @if (count($game->creativities) != 0)
                                <li>
                                    <p class=" fs-5 m-0">Game ini menyebabkan</p>
                                    <ol class="breadcrumb breadcrumb-dot text-info fs-7 mb-3">
                                        @foreach ($game->creativities as $creativity)
                                            <li class="breadcrumb-item pe-3">{{ $creativity->creativity_name }}</li>
                                        @endforeach
                                    </ol>
                                </li>
                            @endif
                        </ul>
                        @if (count($game->designs) == 0 && count($game->learns) == 0 && count($game->creativities) == 0)
                            <div class="row mt-6">
                                <div class="col-3"></div>
                                <div class="col-6 text-center">
                                    
                                    <div class="rounded overflow-hidden">
                                        <lottie-player autoplay loop mode="normal" speed="1" class=""
                                            src={{ asset('assets/lottie/pigswim.json') }}>
                                        </lottie-player>

                                    </div>
                                    <h3 class="fs-7 text-muted mt-2">
                                        Tidak Ada Informasi Tambahan
                                    </h3>
                                </div>
                                <div class="col-3"></div>

                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2"></div>

    </div>
</div>
