@extends('layouts.app')

@section('title', 'Dashboard')
@section('subtitle', 'Dashboard')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container-xxl" id="kt_content_container">
            <div class="row gy-5 g-xl-10">
                <div class="col-md-8">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            <!--begin::Heading-->
                            <div class="fs-2hx fw-bolder">237</div>
                            <div class="fs-4 fw-bold text-gray-400 mb-7">Total Game</div>
                            <!--end::Heading-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-wrap">
                                <!--begin::Chart-->
                                <div class="d-flex flex-center h-100px w-100px me-9 mb-5">
                                    <canvas id="kt_game_chart" class="mh-400px"></canvas>
                                </div>
                                <!--end::Chart-->
                                <!--begin::Labels-->
                                <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                        <div class="bullet bg-primary me-3"></div>
                                        <div class="text-gray-400">Active</div>
                                        <div class="ms-auto fw-bolder text-gray-700">30</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-bold align-items-center mb-3">
                                        <div class="bullet bg-success me-3"></div>
                                        <div class="text-gray-400">Completed</div>
                                        <div class="ms-auto fw-bolder text-gray-700">45</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-bold align-items-center">
                                        <div class="bullet bg-gray-300 me-3"></div>
                                        <div class="text-gray-400">Yet to start</div>
                                        <div class="ms-auto fw-bolder text-gray-700">25</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <div class="col-md-4 rounded p-0 overflow-hidden">
                    <lottie-player autoplay loop mode="normal" speed="2" class=""
                        src={{ asset('assets/lottie/windmill.json') }}>
                    </lottie-player>
                </div>
                <div class="col-md-12">

                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">Game yang baru saja terdaftar</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bolder text-muted bg-light">
                                            <th class="ps-4 min-w-300px rounded-start">Game</th>
                                            <th class="min-w-125px">Download</th>
                                            <th class="min-w-125px">Size</th>
                                            <th class="min-w-200px">Score</th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
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
                                                            class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad
                                                            Simmons</a>
                                                        <span class="text-muted fw-bold text-muted d-block fs-7">HTML, JS,
                                                            ReactJS</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">$8,000,000</a>
                                                <span class="text-muted fw-bold text-muted d-block fs-7">Pending</span>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">126</a>
                                                <span class="text-muted fw-bold text-muted d-block fs-7">Mb</span>
                                            </td>
                                            <td>
                                                <div class="rating">
                                                    <div class="rating-label me-2 checked">
                                                        <i class="bi bi-star-fill fs-5"></i>
                                                    </div>
                                                    <div class="rating-label me-2 checked">
                                                        <i class="bi bi-star-fill fs-5"></i>
                                                    </div>
                                                    <div class="rating-label me-2 checked">
                                                        <i class="bi bi-star-fill fs-5"></i>
                                                    </div>
                                                    <div class="rating-label me-2 checked">
                                                        <i class="bi bi-star-fill fs-5"></i>
                                                    </div>
                                                    <div class="rating-label me-2 checked">
                                                        <i class="bi bi-star-fill fs-5"></i>
                                                    </div>
                                                </div>
                                                <span class="text-muted fw-bold text-muted d-block fs-7 mt-1">Best Rated</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@include('dashboard.script')
