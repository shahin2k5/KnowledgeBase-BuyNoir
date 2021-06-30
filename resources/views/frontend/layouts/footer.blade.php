@php
    $setting = \App\Models\Setting::find(1);
@endphp

        <div class="footer py-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <img src="{{ $setting->logo }}" alt="{{ $setting->title }}" style="width: 100px;"  onerror="this.src='{{ asset('assets/admin/img/logo.png') }}';">
                        <ul class="list-unstyled mt-3 mb-0 footer-social-media">

                            <li><a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{ $setting->linkedin }}"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>