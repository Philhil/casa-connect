@extends('layouts.app')

@section('auth_views')
<section class="h-100-vh mb-8">
    <div class="page-header align-items-start section-height-20 pt-1 pb-10 m-2 border-radius-lg">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="text-white mb-2 mt-5">{{ __('Welcome!') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-header text-center pt-4">
                        <h5>{{ __('Register') }}</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" role="form text-left">
                            @csrf

                            <div class="row mb-3">
                                <div class="@error('first_name') border border-danger rounded-3  @enderror">
                                    <input name="first_name" type="text" class="form-control"
                                           placeholder="{{__('First Name')}}"
                                           aria-label="Name" aria-describedby="email-addon"
                                           value="{{ old('first_name') }}" required autocomplete="name" autofocus>
                                </div>
                                @error('first_name')<div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="row mb-3">
                                <div class="@error('name') border border-danger rounded-3  @enderror">
                                    <input name="name" type="text" class="form-control" placeholder="{{__('Name')}}"
                                           aria-label="Name" aria-describedby="email-addon"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                                @error('name')<div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="row mb-3">
                                <div class="@error('email') border border-danger rounded-3 @enderror">
                                    <input name="email" type="email" class="form-control" placeholder="{{__('Email')}}"
                                           aria-label="Email" aria-describedby="email-addon"
                                           value="{{ old('email') }}" required autocomplete="email">
                                </div>
                                @error('email')<div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <div class="row mb-3">
                                <div class="@error('password') border border-danger rounded-3 @enderror">
                                    <input name="password" type="password" class="form-control"
                                           placeholder="Password" aria-label="Password"
                                           aria-describedby="password-addon"
                                           required autocomplete="new-password">
                                </div>
                                @error('password')<div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <input name="zip" type="text" name="zip" style="display: none;" value="spamprevention">
                            <input name="street" type="text" name="street" style="display: none;" value="">

                            {!! RecaptchaV3::initJs() !!}
                            {!! RecaptchaV3::field('register') !!}

                            @error('g-recaptcha-response')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror

                            <div class="row mb-0">
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2" data-action='submit'>
                                        {{__('Sign up')}}
                                    </button>
                                </div>
                            </div>

                            <p class="text-sm mt-3 mb-0">{{ __('Already have an account? ') }}<a
                                        href="{{ route('login') }}"
                                        class="text-dark font-weight-bolder">{{ __('Sign in') }}</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('auth_views')