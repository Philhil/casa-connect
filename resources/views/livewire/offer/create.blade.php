<main class="main-content">
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div>
                    <div class="card">
                        <div class="card-header pb-0">
                            <h6 class="mb-0">{{ __('Create Offer') }}</h6>
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

                            <div id="app">
                                @include('livewire.offer._form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>