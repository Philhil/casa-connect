<main class="main-content">
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12">

                <div id="app">

                </div>

                <a class="btn btn-info btn-fill btn-round" href="{{ route('dashboard') }}"> <i class="fa fa-arrow-left"></i> {{ __('back to overview') }} </a>

                <div>
                    <div class="card">
                        <div class="card-header pb-0">
                            <h6 class="mb-0">{{ $offer->title }}</h6>
                        </div>
                        <div class="card-body ">
                            <div class="container">

                                <div class="row">
                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                        <span>{{__('Location:')}} {{$offer->postcode}}</span>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                            <b>{{ __('Description:') }}</b>
                                            <p>
                                                {{$offer->description}}
                                            </p>
                                    </div>
                                    <div class="col-xs-12 col-md-6 col-lg-4">
                                        <!-- image carousel -->
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                            <h6>{{ __('Contact') }}:</h6>
                            <form action="{{ route('offer.contact') }}" method="POST" role="form text-left">
                                <input name="offer_id" type="hidden" value="{{$offer->id}}">
                                 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="form-control-label">{{ __('Name') }}</label>
                                            <div class="@error('name')border border-danger rounded-3 @enderror">
                                                <input class="form-control" type="name" placeholder="{{__('Name')}}"
                                                       id="name" name="name" value="{{old("name")}}">
                                            </div>
                                            @error('name')
                                            <div class="text-danger">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mail" class="form-control-label">{{ __('Your E-Mail') }}</label>
                                            <div class="@error('mail')border border-danger rounded-3 @enderror">
                                                <input class="form-control" type="email" id="mail" name="mail"
                                                       placeholder="yourcontactmail@domain.org" value="{{old("mail")}}">
                                            </div>
                                            @error('mail')
                                            <div class="text-danger">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">{{ 'Message' }}</label>
                                    <div class="@error('message')border border-danger rounded-3 @enderror">
                                        <textarea class="form-control" id="message" rows="5" name="message"
                                                  placeholder="{{__('Write a nice text about yourself and your Situation, that the Host get an idea about you and want to offer his shelter')}}"
                                                  >{{old("message")}}</textarea>
                                    </div>
                                    @error('message')
                                    <div class="text-danger">{{ $message }}</div> @enderror
                                </div>

                                <input type="text" name="zip" style="display: none;" value="spamprevention">
                                <input type="text" name="street" style="display: none;" value="">

                                {!! RecaptchaV3::initJs() !!}
                                {!! RecaptchaV3::field('offerrequest') !!}

                                @error('g-recaptcha-response')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Send Massage' }}</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>