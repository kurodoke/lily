@extends('admin.layouts.app')

@section('title', 'User')
@section('subtitle', 'Admin ➞ User')

@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">

            @include('admin.user.flash.error')
            @include('admin.user.flash.success')

            <!--begin::Table-->
            <div class="card card-flush mt-6 mt-xl-9">
                <!--begin::Card header-->
                <div class="card-header mt-5">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h3 class="fw-bolder mb-1">Tabel User</h3>
                        <!--begin::Description-->
                        <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400">List user yang terdaftar pada sistem
                        </div>
                        <!--end::Description-->
                    </div>
                    <div class="">

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
                                            data-kt-countup-value="{{ $users->count() }}">0
                                        </div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-bold fs-6 text-gray-400">Total User</div>
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
                            class="form-control form-control-solid w-250px ps-15" placeholder="Cari User" />
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
                                    <th class="fw-bolder">#</th>
                                    <th class="min-w-300px">User</th>
                                    <th class="min-w-150px">Detail</th>
                                </tr>
                            </thead>
                            <!--end::Head-->
                            <!--begin::Body-->
                            <tbody class="fs-6">
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <!--begin::User-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Wrapper-->
                                                <div class="me-5 position-relative">
                                                    <span>{{ $loop->iteration }}</span>
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::User-->
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                @php
                                                    $array = ['info', 'success', 'warning', 'danger', 'primary', 'dark'];
                                                    $color = $array[array_rand($array)];
                                                @endphp
                                                <div class="symbol symbol-50px me-5 symbol-circle">
                                                    <span
                                                        class="symbol-label fs-2x fw-bold text-{{$color}} bg-light-{{$color}}">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                                                </div>
                                                <div class="d-flex justify-content-start flex-column ms-2">
                                                    <a href="#"
                                                        class="text-dark fw-bolder text-hover-primary mb-1 fs-5">{{ $user->name }}</a>
                                                    <span
                                                        class="text-muted fw-bold text-muted d-block fs-7">{{ $user->email }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="">
                                            <a href="#" class="btn btn-danger btn-sm delete-button"
                                                data-id="{{ $user->id }}" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_delete"">Hapus</a>
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
    @include('admin.user.modal.delete')


@endsection


@include('admin.user.script')
