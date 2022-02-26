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

        <!--

            $table->integer('amount');
            $table->longText('description');
                -->
            <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title" class="form-control-label">{{ __('Titel') }}</label>
                            <div class="@error('title')border border-danger rounded-3 @enderror">
                                <input wire:model="offer.title" class="form-control" type="text" placeholder="Titel"
                                       id="title">
                            </div>
                            @error('user.title')
                            <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="offerEndsAt" class="form-control-label">{{ __('Verfügbar bis') }}</label>
                            <div class="@error('user.offerEndsAt')border border-danger rounded-3 @enderror">
                                <input wire:model="user.offerEndsAt" class="form-control" type="date" id="offerEndsAt">
                            </div>
                            @error('user.offerEndsAt')
                            <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="postcode" class="form-control-label">{{ __('ZIP Code') }}</label>
                            <div class="@error('user.postcode')border border-danger rounded-3 @enderror">
                                <input wire:model="user.postcode" class="form-control" type="text" pattern="[0-9]{5}"
                                       placeholder="70499" id="postcode">
                            </div>
                            @error('user.phone')
                            <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="country" class="form-control-label">{{ __('Country') }}</label>
                            <div class="@error('user.country') border border-danger rounded-3 @enderror">
                                <input wire:model="user.country" class="form-control" type="text"
                                       placeholder="Germany" id="country">
                            </div>
                            @error('user.country')
                            <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="amount">{{ 'For how many Humans you can offer your Place?' }}</label>
                            <div class="@error('user.description')border border-danger rounded-3 @enderror">
                                <input wire:model="user.amount" class="form-control" type="number"
                                       placeholder="1" id="amount">
                            </div>
                            @error('user.amount')
                            <div class="text-danger">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <div class="form-group">
                    <label for="description">{{ 'Description' }}</label>
                    <div class="@error('user.description')border border-danger rounded-3 @enderror">
                            <textarea wire:model="user.description" class="form-control" id="description" rows="3"
                                      placeholder="Discrype your offer in detail"></textarea>
                    </div>
                    @error('user.description')
                    <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Create my kindly offer' }}</button>
                </div>
            </form>

        </div>
    </div>
</div>