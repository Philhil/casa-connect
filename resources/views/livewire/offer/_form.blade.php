<form action="{{ route('offer.store') }}" method="POST" role="form text-left">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="title" class="form-control-label">{{ __('Titel') }}</label>
                <div class="@error('title')border border-danger rounded-3 @enderror">
                    <input class="form-control" type="text" placeholder="{{__('Title')}}"
                           id="title" name="title" value="{{old("title")}}">
                </div>
                @error('title')
                <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="offerEndsAt" class="form-control-label">{{ __('Verfügbar bis') }}</label>
                <div class="@error('offerEndsAt')border border-danger rounded-3 @enderror">
                    <input class="form-control" type="date" id="offerEndsAt" name="offerEndsAt"
                           value="{{old("offerEndsAt")}}">
                </div>
                @error('offerEndsAt')
                <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="postcode" class="form-control-label">{{ __('ZIP Code') }}</label>
                <div class="@error('postcode')border border-danger rounded-3 @enderror">
                    <input class="form-control" type="text" pattern="[0-9]{5}"
                           placeholder="70499" id="postcode" name="postcode" value="{{old("postcode")}}">
                </div>
                @error('postcode')
                <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="country" class="form-control-label">{{ __('Country') }}</label>
                <div class="@error('country') border border-danger rounded-3 @enderror">
                    <select class="form-control" id="country" name="country">

                        @foreach($countries as $country)
                            <option {{ (old("country") == $country['name'] || (old("country") == null && $country['name'] =="Germany") ? "selected":"") }} value="{{$country['name']}}">
                                {{$country['name']}}</option>
                        @endforeach
                    </select>
                </div>
                @error('country')
                <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="amount">{{ 'For how many Humans you can offer your Place?' }}</label>
                <div class="@error('amount')border border-danger rounded-3 @enderror">
                    <input class="form-control" type="number" placeholder="1" id="amount" name="amount"
                           value="{{old("amount")}}">
                </div>
                @error('amount')
                <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="form-group">
        <label for="description">{{ 'Description' }}</label>
        <div class="@error('description')border border-danger rounded-3 @enderror">
                            <textarea class="form-control" id="description" rows="3" name="description"
                                      placeholder="{{__('Describe your offer in detail')}}"
                                      value="{{old("description")}}"></textarea>
        </div>
        @error('description')
        <div class="text-danger">{{ $message }}</div> @enderror
    </div>
    <div class="d-flex justify-content-end">
        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ __('Create my kindly offer') }}</button>
    </div>
</form>
