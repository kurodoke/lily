@extends('admin.layouts.app')

@section('title', 'Pengelolaan data')
@section('subtitle', 'Admin ➞ Pengelolaan data ➞ Kategori Game')

@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container-xxl" id="kt_content_container">

            @include('admin.managemen.kategori.flash.error')
            @include('admin.managemen.kategori.flash.success')

            <!--begin::Table-->
            <div class="card card-flush mt-6 mt-xl-9">
                <!--begin::Card header-->
                <div class="card-header mt-5">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h3 class="fw-bolder mb-1">Tabel Kategori</h3>
                        <!--begin::Description-->
                        <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400">Pengelolaan data kategori - kategori yang digunakan game</div>
                        <!--end::Description-->
                    </div>
                    <div class="">

                        <!--begin::Actions-->
                        <div class="d-flex mb-4">
                            <a href="#" class="btn btn-sm btn-warning me-3" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_add">Tambah Kategori</a>
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
                                            data-kt-countup-value="{{ $categories->count() }}">0
                                        </div>
                                    </div>
                                    <!--end::Number-->
                                    <!--begin::Label-->
                                    <div class="fw-bold fs-6 text-gray-400">Total Kategori</div>
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
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table id="kt_datatable"
                            class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                            <!--begin::Head-->
                            <thead class="fs-7 text-gray-400 text-uppercase">
                                <tr>
                                    <th class="fw-bolder">#</th>
                                    <th class="min-w-150px">Kategori</th>
                                    <th class="min-w-150px">Detail</th>
                                </tr>
                            </thead>
                            <!--end::Head-->
                            <!--begin::Body-->
                            <tbody class="fs-6">
                                @foreach ($categories as $category)
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
                                        <td>{{ $category->category_name }}</td>
                                        <td class="">
                                            <a href="#" class="btn btn-info btn-sm edit-button"
                                                data-id="{{ $category->id }}" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_edit">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm delete-button"  data-id="{{ $category->id }}"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_delete"">Hapus</a>
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
    @include('admin.managemen.kategori.modal.add')
    @include('admin.managemen.kategori.modal.edit')
    @include('admin.managemen.kategori.modal.delete')


@endsection


@include('admin.managemen.kategori.script')
