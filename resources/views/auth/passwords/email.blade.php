@extends('layouts.app')

<div>
    @include('layouts.navbars.guest.login')
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-8">
                        <div class="card-header pb-0 text-left bg-transparent">

                            <h4 class="mb-0">{{ __('Forgot your password? Enter your email here') }}</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.email') }}" role="form text-left">
                                @csrf

                                <div class="row mb-3">
                                    <label for="email">{{ __('Email') }}</label>
                                    <div class="@error('email')border border-danger rounded-3 @enderror">
                                        <input name="email" id="email" type="email" class="form-control"
                                               placeholder="Email" aria-label="Email" aria-describedby="email-addon"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    </div>
                                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="row mb-0">

                                    <button type="submit"
                                            class="btn bg-gradient-info w-100 mt-4 mb-0">{{ __('Send Password Reset Link') }}</button>
                                </div>
                            </form>

                            @if (session('status'))
                                <div
                                     class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                                    <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                                    <span
                                            class="alert-text text-white">{{ session('status') }}</span>
                                    <button type="button"
                                            class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>