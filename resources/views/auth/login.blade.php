@extends('layouts.app')

<section>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-5">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">{{ __('Welcome') }}</h3>

                            @if (app('router')->getRoutes()->match(app('request')->create(app('url')->previous()))->getName() == "welcome")
                                <p>{{__('please login or create a account before you can offer a save home')}}.</p>
                            @endif

                            <p class="mb-4 text-xl mx-auto">
                                {{ __('You are new?') }}

                                    <a href="{{ route('register') }}"
                                       class="text-info text-gradient font-weight-bold">{{ __('Create a account') }}</a>
                            </p>
                        </div>
                        <div class="card-body">

                            <form method="POST" action="{{ route('login') }}" role="form text-left">
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

                                <div class="row mb-3">

                                    <label for="password">{{ __('Password') }}</label>
                                    <div class="@error('password')border border-danger rounded-3 @enderror">
                                        <input name="password" id="password" type="password" class="form-control"
                                               placeholder="Password" aria-label="Password"
                                               aria-describedby="password-addon" required autocomplete="current-password">
                                    </div>
                                    @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="row mb-3">

                                    <div class="form-check form-switch">
                                        <input name="remember" class="form-check-input" type="checkbox"
                                               id="remember" {{ old('remember') ? 'checked' : ''}} >
                                        <label class="form-check-label" for="rememberMe">{{ __('Remember me') }}</label>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="text-center">
                                        <button type="submit"
                                                class="btn bg-gradient-info w-100 mt-4 mb-0">{{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">

                            @if (Route::has('password.request'))
                                <small class="text-muted">{{ __('Forgot you password? Reset you password') }} <a
                                            href="{{ route('password.request') }}"
                                            class="text-info text-gradient font-weight-bold">{{ __('here') }}</a></small>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



