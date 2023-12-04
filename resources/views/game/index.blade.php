@extends('layouts.app')

@section('title', 'Game')
@section('subtitle', 'Game')

@section('content')
    
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">
            @if($errors->any())
            @dd($errors->all())
        @endif
            <!--begin::Table-->
            <div class="card card-flush mt-6 mt-xl-9">
                <!--begin::Card header-->
                <div class="card-header mt-5">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h3 class="fw-bolder mb-1">Tabel Game</h3>
                        <!--begin::Description-->
                        <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400">Pengelolaan data data pada game</div>
                        <!--end::Description-->
                    </div>
                    <div class="">

                        <!--begin::Actions-->
                        <div class="d-flex mb-4">
                            <a href="#" class="btn btn-sm btn-warning me-3" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_add">Tambah Game</a>
                            <!--begin::Menu-->
                        </div>
                        <!--end::Actions-->
                        <!--begin::Info-->
                        <div class="d-flex flex-wrap justify-content-start">
                            <!--begin::Stats-->
                            <div class="d-flex flex-wrap">
                                <!--begin::Stat-->
                                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                    <!--begin::Number-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/abstract/abs047.svg-->
                                        <span class="svg-icon svg-icon-warning svg-icon-2x me-3"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M12.3028 2C2.20276 8.5 0.302758 19.4 12.3028 22C24.3028 19.4 22.4028 8.5 12.3028 2Z"
                                                    fill="black" />
                                                <path
                                                    d="M12.3028 22L20.6028 13.7C20.7028 17.5 18.2028 20.7 12.3028 22ZM19.6028 9.7C19.1028 8.7 18.5028 7.7 17.6028 6.7L12.3028 12V17L19.6028 9.7ZM9.40277 4.10001C8.50277 4.90001 7.60277 5.80001 6.90277 6.60001L12.2028 11.9V6.89999L9.40277 4.10001ZM12.3028 2V7L15.2028 4.10001C14.3028 3.40001 13.3028 2.7 12.3028 2ZM4.00278 13.7L12.3028 22V17L5.00278 9.7C4.40278 11.1 4.00278 12.4 4.00278 13.7Z"
                                                    fill="black" />
                                            </svg></span>
                                        <!--end::Svg Icon-->
                                        <div class="fs-4 fw-bolder" data-kt-countup="true"
                                            data-kt-countup-value="{{ $games->count() }}">0
                                        </div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-bold fs-6 text-gray-400">Total Game</div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Stat-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--begin::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-muted svg-icon-2 ms-6 position-absolute">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                    transform="rotate(45 17.0365 15.1223)" fill="black" />
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-filter-datatable="search"
                            class="form-control form-control-solid w-250px ps-15" placeholder="Cari Game" />
                    </div>
                    <!--end::Search-->
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="kt_datatable"
                            class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                            <!--begin::Head-->
                            <thead class="fs-7 text-gray-400 text-uppercase">
                                <tr>
                                    <th class="ps-4 min-w-300px rounded-start">Game</th>
                                    <th class="min-w-100px">Download</th>
                                    <th class="min-w-100px">Size</th>
                                    <th class="min-w-150px">Score</th>
                                    <th class="min-w-150px">Detail</th>
                                </tr>
                            </thead>
                            <!--end::Head-->
                            <!--begin::Body-->
                            <tbody class="fs-6">
                                @foreach ($games as $game)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-5">
                                                    <span class="symbol-label bg-light">
                                                        <img src="assets/media/svg/avatars/001-boy.svg"
                                                            class="h-75 align-self-end" alt="">
                                                    </span>
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $game->name }}</a>
                                                    <span
                                                        class="text-muted fw-bold text-muted d-block fs-7">{{ $game->author }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">
                                                {{ $game->download }}&pm;</p>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">Juta</span>
                                        </td>
                                        <td><a href="#"
                                                class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{ $game->size }}</a>
                                            <span class="text-muted fw-bold text-muted d-block fs-7">MB</span>
                                        </td>
                                        <td>
                                            <div class="rating">
                                                @for ($i = 0; $i < 5; $i++)
                                                    <div class="rating-label me-2 {{ $i < $game->score ? 'checked' : '' }}">
                                                        <i class="bi bi-star-fill fs-5"></i>
                                                    </div>
                                                @endfor
                                            </div>
                                        </td>
                                        <td class="row row-gap-2">
                                            <div class="col-3" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark"
                                                data-bs-placement="top" title="Edit Game">
                                                <a href="#" class="btn btn-info btn-sm edit-button m-0 p-1"
                                                    data-id="{{ $game->id }}" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_edit">
                                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen055.svg-->
                                                    <span class="svg-icon svg-icon-info svg-icon-1 m-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                                                                d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z"
                                                                fill="black" />
                                                            <path
                                                                d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z"
                                                                fill="black" />
                                                            <path
                                                                d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </div>
                                            <div class="col-3" data-bs-toggle="tooltip"
                                                data-bs-custom-class="tooltip-dark" data-bs-placement="top"
                                                title="Detail Game">
                                                <a href="#" class="btn btn-warning btn-sm detail-button m-0 p-1"
                                                    data-id="{{ $game->id }}" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_detail">
                                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen005.svg-->
                                                    <span class="svg-icon svg-icon-warning svg-icon-1 m-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
                                                                fill="black" />
                                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </div>
                                            <div class="col-3" data-bs-toggle="tooltip"
                                                data-bs-custom-class="tooltip-dark" data-bs-placement="top"
                                                title="Hapus Game">
                                                <a href="#" class="btn btn-danger btn-sm delete-button m-0 p-1"
                                                    data-id="{{ $game->id }}" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_delete">
                                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen027.svg-->
                                                    <span class="svg-icon svg-icon-danger svg-icon-1 m-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                fill="black" />
                                                            <path opacity="0.5"
                                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                fill="black" />
                                                            <path opacity="0.5"
                                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <!--end::Body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->

        </div>
    </div>

    @include('game.modal.add')
    @include('game.modal.edit')
    @include('game.modal.delete')

@endsection

@include('game.script')
