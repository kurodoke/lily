@extends('auth.layouts.app')

@section('title', 'Login')

@section('content')
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid vh-100">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-md-row flex-column-fluid ps-10 pe-10">
                <!--begin::Wrapper-->
                <lottie-player autoplay loop mode="normal" class="" src={{ asset('assets/lottie/dogmie.json') }}
                    style="width: 50%;">
                </lottie-player>

                <div class="w-lg-500px bg-body rounded shadow-sm mt-5 mt-md-0 p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form class="form w-100" action={{ route('login') }} method="POST">
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Login ke Lily</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">Belum Punya Akun?
                                <a href={{ route('register') }} class="link-warning fw-bolder">Sini Register</a>
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--begin::Heading-->

                        {{-- begin::flash error --}}
                        @error('authentication')
                            <div class="alert alert-dismissible alert-danger d-flex flex-center">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen050.svg-->
                                <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3"
                                            d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                            fill="black" />
                                        <rect x="9" y="13.0283" width="7.3536" height="1.2256" rx="0.6128"
                                            transform="rotate(-45 9 13.0283)" fill="black" />
                                        <rect x="9.86664" y="7.93359" width="7.3536" height="1.2256" rx="0.6128"
                                            transform="rotate(45 9.86664 7.93359)" fill="black" />
                                    </svg></span>
                                <!--end::Svg Icon-->

                                <div class="d-flex flex-column ps-4">
                                    <!--begin::Title-->
                                    <h4 class="mb-1 text-danger">Login Gagal</h4>
                                    <!--end::Title-->

                                    <!--begin::Content-->
                                    <span>{{ $message }}</span>
                                    <!--end::Content-->
                                </div>

                                <!--begin::Close-->
                                <button type="button" class="btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen040.svg-->
                                    <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                fill="black" />
                                            <rect x="7" y="15.3137" width="12" height="2" rx="1"
                                                transform="rotate(-45 7 15.3137)" fill="black" />
                                            <rect x="8.41422" y="7" width="12" height="2" rx="1"
                                                transform="rotate(45 8.41422 7)" fill="black" />
                                        </svg></span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--end::Close-->
                            </div>
                        @enderror
                        {{-- end::flash error --}}

                        {{-- begin::flash success --}}
                        @if (session()->has(['success']))
                            <div class="alert alert-dismissible alert-success d-flex flex-center">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen037.svg-->
                                <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                            fill="black" />
                                        <path
                                            d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                            fill="black" />
                                    </svg></span>
                                <!--end::Svg Icon-->

                                <div class="d-flex flex-column ps-4">
                                    <!--begin::Title-->
                                    <h4 class="mb-1 text-success">{{ session('success') }}</h4>
                                    <!--end::Title-->

                                    <!--begin::Content-->
                                    <span>Lanjut lagi ke Login</span>
                                    <!--end::Content-->
                                </div>

                                <!--begin::Close-->
                                <button type="button" class="btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                                    <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen040.svg-->
                                    <span class="svg-icon svg-icon-success svg-icon-2hx"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                fill="black" />
                                            <rect x="7" y="15.3137" width="12" height="2" rx="1"
                                                transform="rotate(-45 7 15.3137)" fill="black" />
                                            <rect x="8.41422" y="7" width="12" height="2" rx="1"
                                                transform="rotate(45 8.41422 7)" fill="black" />
                                        </svg></span>
                                    <!--end::Svg Icon-->
                                </button>
                                <!--end::Close-->
                            </div>
                        @endif
                        {{-- end::flash success --}}

                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid" type="text"
                                name="email" value="{{ old('email') }}"/>
                            @error('email')
                                <div class="d-block invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack mb-2">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                <!--end::Label-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid" type="password"
                                name="password" />
                            @error('password')
                                <div class="d-block invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <!--begin::Submit button-->
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-warning w-100 mb-5">
                                <span class="indicator-label">Login</span>
                            </button>
                            <!--end::Submit button-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Main-->
@endsection
