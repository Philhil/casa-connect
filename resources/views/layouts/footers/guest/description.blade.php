<footer class="footer pt-4 position-sticky">
    <div class="container">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-left">
                    {{__('Made with')}}  <i class="fas fa-lg fa-heart"></i>
                    {{__('for a better world.')}}
                    © {{ now()->year }}
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">

                    <li class="nav-item">
                        <a href="mailto:contact@casa-connect.org" class="nav-link text-muted" target="_blank">{{__('Contact')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('datenschutz')}}" class="nav-link pe-0 text-muted"
                           target="_blank">Datenschutz</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('impressum')}}" class="nav-link pe-0 text-muted"
                           target="_blank">{{__('Impressum')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
