<div class="main-content">

<div class="container-fluid py-4">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-12 col-xl-4 pt-2">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">{{ __('Profile Picture') }}</h6>
                        </div>
                        <div class="col-md-4 text-right">
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <div class="center" style="display:flex; justify-content:center;">
                        <div class="avatr" style="height: 70%; width:70%;">
                            @if(Auth::user()->profile_photo_path)
                            <img src="{{Storage::disk('s3')->url(Auth::user()->profile_photo_path)}}" alt="picture" class="border-radius-lg shadow">
                            @endif
                        </div>
                    </div>
                    <form action="{{route('profile.edit.storeprofileimage')}}" method="POST" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center flex-row">
                                @csrf
                                <input class="form-control col-form-label-sm" type="file" name="image" id="image">

                                <button type="submit" class="btn btn-outline-dark" value="Upload">
                                    <i class="fas fa-upload text-secondary text-sm" data-bs-toggle="tooltip"
                                       data-bs-placement="top" title="{{ __('Edit Profile Picture') }}"></i>
                                </button>

                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-12 col-xl-4 pt-2">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">{{ __('Profile Settings') }}</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                            {{ __('Name') }}:</strong> &nbsp; {{ Auth::user()->name }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                            {{ __('First Name') }}:</strong> &nbsp; {{ Auth::user()->first_name }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                            {{ __('Email') }}:</strong> &nbsp; {{ Auth::user()->email }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-12 col-xl-4 pt-2">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">{{ __('Description and Languages') }}</h6>
                        </div>
                        <div class="col-md-4 text-right">
                            <a href="{{ route('profile.edit.description') }}">
                                <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="{{ __('Edit Description and Languages') }}"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <ul class="list-group">
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                            {{ __('Description') }}:</strong> &nbsp; {{ Auth::user()->description }}</li>
                        <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">
                            {{ __('Languages') }}:</strong> &nbsp; {{ Auth::user()->languages }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>