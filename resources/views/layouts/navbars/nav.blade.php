<main class="main-content border-radius-lg">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur">
        <div class="container-fluid py-1 px-1">
            @if (!in_array(request()->route()->getName(),['welcome', 'login', 'register']))
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-md"><a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">
                            {{ str_replace('-', ' ', Route::currentRouteName()) }}</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0 text-capitalize">
                        {{ str_replace('-', ' ', Route::currentRouteName()) }}</h6>
                </nav>
            @endif

            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end" id="navbar">

                <ul class="navbar-nav justify-content-end bg-gray-100 card">
                    @if (Route::has('login'))

                        @auth
                            <li class="nav-item px-2 d-flex align-items-center">
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __('Dashboard') }}</a>
                            </li>

                            <li class="nav-item px-2 d-flex align-items-center">
                            @livewire('auth.logout')
                            </li>
                        @else
                            <li class="nav-item px-2 d-flex align-items-center">
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __('Log in') }}</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item px-2 d-flex align-items-center">
                                <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @endauth

                    @endif

                    <li class="nav-item dropdown px-1 pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link p-0 dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end px-1 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">
                                        <span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}
                                    </a>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>