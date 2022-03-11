<form action="{{ route('profile.storedescription') }}" method="POST" role="form text-left">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="description">{{ __('Description') }}</label>
                <div class="@error('description')border border-danger rounded-3 @enderror">
                                    <textarea class="form-control" id="description" rows="3" name="description"
                                              placeholder="{{__('Introduce yourself')}}"
                                              value="{{ __('Introduce yourself') }}">{{ Auth::user()->description }}</textarea>
                </div>
                @error('description')
                <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="Languages" class="form-control-label">{{ __('Languages') }}</label>
                <div class="@error('languages')border border-danger rounded-3 @enderror">
                    <input class="form-control" type="text" placeholder="{{__('Languages')}}"
                           id="languages" name="languages" value="{{ Auth::user()->languages }}">
                </div>
                @error('languages')
                <div class="text-danger">{{ $message }}</div> @enderror
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        <button type="button" class="btn bg-gradient-dark btn-md mt-4 mb-4" onclick="window.location='{{ route("profile.edit.description") }}'">{{ __('Cancel') }}</button>
        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ __('Save') }}</button>
    </div>
</form>
