@extends('auth.layouts.app')

@section('title', 'Login')

@section('content')

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group position-relative has-icon-left mb-4">
            @error('authentication')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="email" name="email" class="form-control form-control-xl" placeholder="Email"
                value="{{ old('email') }}" autofocus required />
            <div class="form-control-icon">
                <i class="bi bi-person"></i>
            </div>
            @error('email', 'authentication')
                <div class="d-block invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" name="password" class="form-control form-control-xl" placeholder="Password" required />
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
            @error('password', 'authentication')
                <div class="d-block invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-check form-check-lg d-flex align-items-end">
            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" />
            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                Keep me logged in
            </label>
        </div>
        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
            Masuk
        </button>
    </form>

    @if ($errors->has('authentication'))
        <span class="text-danger">peh</span>
    @endif
@endsection
