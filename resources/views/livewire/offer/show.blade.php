<main class="main-content">
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12">

                <div id="app">

                </div>

                <a class="btn btn-info btn-fill btn-round" href="{{ route('dashboard') }}"> <i class="fa fa-arrow-left"></i> {{ 'back to overwiew' }} </a>

                <div>
                    <div class="card">
                        <div class="card-header pb-0">
                            <h6 class="mb-0">{{ $offer->title }}</h6>
                        </div>
                        <div class="card-body ">

                            @if (false)
                                <div wire:model="showDemoNotification" class="mt-3  alert alert-primary alert-dismissible fade show"
                                     role="alert">
                        <span class="alert-text text-white">
                            {{ __('You are in a demo version, you can\'t update the profile.') }}</span>
                                    <button wire:click="$set('showDemoNotification', false)" type="button" class="btn-close"
                                            data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            @endif

                            @if (false)
                                <div wire:model="showSuccesNotification"
                                     class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                                    <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                                    <span
                                            class="alert-text text-white">{{ __('Your profile information have been successfuly saved!') }}</span>
                                    <button wire:click="$set('showSuccesNotification', false)" type="button" class="btn-close"
                                            data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            @endif

                            <div class="container">

                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <span>Location: {{$offer->postcode}}</span>
                                        </div>
                                        <div class="row mt-2">
                                            <b>{{ __('Description') }}:</b>
                                            <p>
                                                {{$offer->description}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- image carousel -->
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                            <h6>{{ __('Contact') }}:</h6>
                            <form action="{{ route('offer.contact') }}" method="POST" role="form text-left">
                                 <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="form-control-label">{{ __('Name') }}</label>
                                            <div class="@error('title')border border-danger rounded-3 @enderror">
                                                <input class="form-control" type="name" placeholder="Name"
                                                       id="name" name="name" value="{{old("name")}}">
                                            </div>
                                            @error('title')
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
                                    <label for="description">{{ 'Message' }}</label>
                                    <div class="@error('message')border border-danger rounded-3 @enderror">
                        <textarea class="form-control" id="description" rows="5" name="description"
                                  placeholder="{{__('Write a nice text about yourself and your Situation, that the Host get an idea about you and want to offer his shelter')}}" value="{{old("message")}}"></textarea>
                                    </div>
                                    @error('message')
                                    <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
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