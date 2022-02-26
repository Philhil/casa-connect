<footer class="footer pb-4">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-left">
                    Made with  <i style="font-size: 0.8rem;" class="fas fa-lg fa-heart"></i>
                    for a better world.
                    © {{ now()->year }}
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">

                    <li class="nav-item">
                        <a href="" class="nav-link text-muted" target="_blank">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('impressum')}}" class="nav-link pe-0 text-muted"
                            target="_blank">impressum</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
