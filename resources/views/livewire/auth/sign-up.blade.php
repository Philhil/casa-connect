<section class="h-100-vh mb-8">
    <div class="page-header align-items-start section-height-50 pt-5 pb-11 m-3 border-radius-lg"
         style="background-image: url({{asset('assets/img/curved-images/curved14.jpg')}});">
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
                        <form wire:submit.prevent="register" action="#" method="POST" role="form text-left">
                            <div class="mb-3">
                                <div class="@error('first_name') border border-danger rounded-3  @enderror">
                                    <input wire:model="first_name" type="text" class="form-control"
                                           placeholder="{{__('First Name')}}"
                                           aria-label="Name" aria-describedby="email-addon">
                                </div>
                                @error('first_name')
                                <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <div class="@error('name') border border-danger rounded-3  @enderror">
                                    <input wire:model="name" type="text" class="form-control" placeholder="{{__('Name')}}"
                                           aria-label="Name" aria-describedby="email-addon">
                                </div>
                                @error('name')
                                <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <div class="@error('email') border border-danger rounded-3 @enderror">
                                    <input wire:model="email" type="email" class="form-control" placeholder="{{__('Email')}}"
                                           aria-label="Email" aria-describedby="email-addon">
                                </div>
                                @error('email')
                                <div class="text-danger">{{ $message }}</div> @enderror
                            </div>
                            <div class="mb-3">
                                <div class="@error('password') border border-danger rounded-3 @enderror">
                                    <input wire:model="password" type="password" class="form-control"
                                           placeholder="Password" aria-label="Password"
                                           aria-describedby="password-addon">
                                </div>
                                @error('password')
                                <div class="text-danger">{{ $message }}</div> @enderror
                            </div>

                            <input wire:model="zip" type="text" name="zip" style="display: none;"
                                   value="spamprevention">
                            <input wire:model="street" type="text" name="street" style="display: none;" value="">

                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2 g-recaptcha"
                                        data-sitekey="{{env('CAPTCHA_SITE_KEY')}}"
                                        data-callback='handle'
                                        data-action='submit'
                                >Sign up</button>
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

    <script src="https://www.google.com/recaptcha/api.js?render={{env('RECAPTCHA_SITE_KEY')}}"></script>
    <script>
        function handle(e) {
            grecaptcha.ready(function () {
                grecaptcha.execute('{{env('RECAPTCHA_SITE_KEY')}}', {action: 'submit'})
                    .then(function (token) {
                    @this.set('captcha', token);
                    });
            })
        }
    </script>
</section>
