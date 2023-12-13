@extends('survey.layouts.app')

@section('content')
    <form action="{{ route('search-game') }}" method="GET" class="survey d-flex flex-column justify-content-center align-items-center">

        <!--begin::survey umur-->
        <div class="survey-item d-flex vh-100 align-items-center" id="1">
            <div class="d-flex flex-column">
                <div class="title">
                    <p class="fs-2"><span class="me-5">1 <span class="text-warning">➞</span></span>Berapa Umur kamu?
                        <i class="fas fa-exclamation-circle ms-2 fs-5" data-bs-toggle="tooltip" title=""
                            data-bs-original-title="umur seseorang yang ingin bermain game"
                            aria-label="umur seseorang yang ingin bermain game"></i>
                    </p>
                </div>
                <div class="questions ms-5">
                    @foreach ($ages as $age)
                        <div class="form-check form-check-custom form-check-solid form-check-sm mb-5">
                            <input class="btn-check" type="radio" name="search_age" value="{{ $age->id }}"
                                id="age_{{ $age->id }}" />
                            <label class="btn btn-light-warning" for="age_{{ $age->id }}">
                                {{ $age->age }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--end::survey umur-->
        <!--begin::survey kategori-->
        <div class="survey-item d-flex vh-100 align-items-center" id="2">
            <div class="d-flex flex-column">
                <div class="title">
                    <p class="fs-2"><span class="me-5">2 <span class="text-warning">➞</span></span>Apa Kategori Game
                        Favoritmu?
                    </p>
                </div>
                <div class="questions ms-5 row justify-content-start">
                    @foreach ($categories as $category)
                        <div class="col form-check form-check-custom form-check-solid form-check-sm mb-5">
                            <input class="btn-check" type="checkbox" name="search_category[]" value="{{ $category->id }}"
                                id="category_{{ $category->id }}" />
                            <label class="btn btn-sm btn-light-warning text-nowrap" for="category_{{ $category->id }}">
                                {{ $category->category_name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--end::survey kategori-->

        <!--begin::survey premium-->
        <div class="survey-item d-flex vh-100 align-items-center" id="3">
            <div class="d-flex flex-column">
                <div class="title">
                    <p class="fs-2"><span class="me-5">3 <span class="text-warning">➞</span></span>Apa kamu ingin
                        mengeluarkan uang untuk membeli sebuah Game?
                    </p>
                </div>
                <div class="questions ms-5">
                    <div class="form-check form-check-custom form-check-solid form-check-sm mb-5">
                        <input class="btn-check" type="radio" name="search_premium" value="1" id="premium_1" />
                        <label class="btn btn-light-warning" for="premium_1">
                            Iya
                        </label>
                    </div>
                    <div class="form-check form-check-custom form-check-solid form-check-sm mb-5">
                        <input class="btn-check" type="radio" name="search_premium" value="0" id="premium_2" />
                        <label class="btn btn-light-warning" for="premium_2">
                            Tidak
                        </label>
                    </div>
                    
                </div>
                <div class="submit mt-10">
                    <div class="form-check form-check-custom form-check-solid form-check-sm mb-5">
                        <button class="btn btn-warning" type="submit" id="search_submit" @disabled(true)> Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--end::survey premium-->
    </form>
@endsection
