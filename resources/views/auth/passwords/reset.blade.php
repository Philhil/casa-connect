@extends('layouts.app')

<section>
    <div class="page-header section-height-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                    <div class="card card-plain mt-5">
                        <div class="card-header pb-0 text-left bg-transparent">
                            <h3 class="font-weight-bolder text-info text-gradient">{{ __('Reset Password') }}</h3>

                            @if (app('router')->getRoutes()->match(app('request')->create(app('url')->previous()))->getName() == "welcome")
                                <p>{{__('please login or create a account before you can offer a save home')}}</p>
                            @endif
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.update') }}" role="form text-left">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="row mb-3">
                                    <label for="email">{{ __('Email') }}</label>
                                    <div class="@error('email')border border-danger rounded-3 @enderror">
                                        <input name="email" id="email" type="email" class="form-control"
                                               placeholder="Email" aria-label="Email" aria-describedby="email-addon"
                                               value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                    </div>
                                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="row mb-3">
                                    <label for="password">{{ __('Password') }}</label>
                                    <div class="@error('password')border border-danger rounded-3 @enderror">
                                        <input name="password" id="password" type="password" class="form-control"
                                               placeholder="Password" aria-label="Password"
                                               aria-describedby="password-addon" required autocomplete="new-password">
                                    </div>
                                    @error('password') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="row mb-3">
                                    <label for="password">{{ __('Confirm Password') }}</label>
                                    <div class="@error('password_confirmation')border border-danger rounded-3 @enderror">
                                        <input name="password_confirmation" id="password_confirmation" type="password" class="form-control"
                                               placeholder="{{ __('Confirm Password') }}" aria-label="{{ __('Confirm Password') }}"
                                               aria-describedby="password-addon" required autocomplete="new-password">
                                    </div>
                                    @error('password_confirmation') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <div class="row mb-0">
                                    <div class="text-center">
                                        <button type="submit"
                                                class="btn bg-gradient-info w-100 mt-4 mb-0">{{ __('Reset Password') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>