<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/default.css')}}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-8 lg:px-10">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <h1>🇺🇦 Welcome Ukraine</h1>

                </div>
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <small class="text-gray-800"><b>C</b>ome <b>A</b>nd <b>S</b>tay for <b>A</b> while - The platform to match providers and affected humans.</small>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="w-8 h-8 text-gray-500">
                                    <svg id="emoji" viewBox="0 0 72 72" xmlns="http://www.w3.org/2000/svg">
                                        <g id="line">
                                            <line x1="60.0633" x2="60.0633" y1="61.4636" y2="20.1288" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            <line x1="35.7945" x2="63.8" y1="9.2474" y2="28.0984" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            <line x1="11.4616" x2="11.4616" y1="61.4636" y2="20.1288" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            <polyline fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" points="17.329 61.464 17.329 32.857 35.737 20.438 35.788 20.438 54.196 32.857 54.196 61.464"/>
                                            <line x1="35.7304" x2="7.7249" y1="9.2474" y2="28.0984" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M30.0582,50.1659,28.82,61.3753c-.0477.51-.81.99-1.3913.99a1.2679,1.2679,0,0,1-1.12-1.0926l1.2612-18.86"/>
                                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M23.8757,51.3542s.6437-3.7629.7427-5.0008c.099-1.1387.1485-4.6046.1485-4.6046a2.4237,2.4237,0,0,1,2.4051-2.4756h7.2243"/>
                                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M44.07,42.2877a5.9857,5.9857,0,0,0-.8914,3.224c0,1.5625,1.34,3.4821,1.34,4.5112.2993,2.9933.8156,11.17.8156,11.17A1.2565,1.2565,0,0,1,44.15,62.36a1.3687,1.3687,0,0,1-1.3345-1.1674L41.5682,50.07"/>
                                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M36.6367,41.4589a2.3275,2.3275,0,0,1,2.5942-2.1645h4.6445a2.8911,2.8911,0,0,1,2.911,2.4944s-.15,3.4923-.05,4.64a46.0007,46.0007,0,0,0,1.0976,4.8891"/>
                                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M34.2682,62.9868l.24-6.293"/>
                                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M36.9646,56.6938l.2388,6.3645"/>
                                            <g>
                                                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M37.0315,49.5446h.3109a1.5021,1.5021,0,0,1,1.6685,1.6311l.4845,5.2043"/>
                                                <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M34.366,49.5446H34.13a1.5021,1.5021,0,0,0-1.6685,1.6311L31.9771,56.38"/>
                                            </g>
                                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M34.0081,47.1064a1.671,1.671,0,0,1-.3906-1.1731,2.0253,2.0253,0,1,1,3.6765,1.1731"/>
                                            <circle cx="31.2056" cy="33.8729" r="2.7168" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            <circle cx="40.7019" cy="33.8729" r="2.7168" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        </g>
                                    </svg>
                                </div>

                                <div class="ml-4 text-lg leading-7 font-semibold">
                                    <a href="{{route('createoffer')}}" class="underline text-gray-900 dark:text-white">Offer a save home</a>
                                </div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Here you can offer a accommodation.
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="w-8 h-8 text-gray-500">
                                    <svg id="emoji" viewBox="0 0 72 72" xmlns="http://www.w3.org/2000/svg">
                                        <g id="line">
                                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M44.0447,53.3654l.9629,4.2419"/>
                                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M27.5069,52.3557l-.9629,5.2516"/>
                                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M44.0447,53.3654l.9629,4.2419"/>
                                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M27.5069,52.3557l-.9629,5.2516"/>
                                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M42.4083,47.855h0"/>
                                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M31.9885,45.0752H37.363c2.7606,0,4.3909.8926,5.0453,2.78"/>
                                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M23.9418,35.9037v1.7a9.5391,9.5391,0,0,0,5.2783,8.98c1.5335.6681,2.3676,1.3319,2.3676,2.8875A2.6368,2.6368,0,0,1,28.7754,52.03c-5.1552,0-11.4429-6.4679-11.4429-15.14,0-8.8036,5.3449-11.6923,8.0955-11.6923h7.0138a5.1725,5.1725,0,0,1,5.1472,4.9914v1.423"/>
                                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M47.7707,38.3017v.69a9.539,9.539,0,0,1-5.2784,8.98c-1.5335.6681-2.3675,1.3319-2.3675,2.8875a2.607,2.607,0,0,0,2.8122,2.5583c5.1552,0,11.4429-6.4679,11.4429-15.14,0-8.2189-5.3448-11.0192-8.0955-11.0192H40.28"/>
                                            <circle cx="29.5155" cy="18.1951" r="3.5434" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            <circle cx="35.2544" cy="38.6475" r="3.5434" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                            <circle cx="42.7382" cy="20.0538" r="3.5434" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        </g>
                                    </svg>
                                </div>

                                <div class="ml-4 text-lg leading-7 font-semibold">
                                    <a href="/dashboard" class="underline text-gray-900 dark:text-white">Search shelter</a>
                                </div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    You need a save place? Here you can find a shelter.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <p class="ml-1">
                                Made with Laravel
                            </p>
                        </div>
                    </div>

                    @if(env('APP_DEBUG'))
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                    @endif

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        <a href="{{ url('/impressum') }}" class="ml-1 underline">Impressum</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
